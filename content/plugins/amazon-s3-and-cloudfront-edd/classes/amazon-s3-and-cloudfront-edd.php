<?php

class Amazon_S3_And_CloudFront_EDD {

	/**
	 * @param string $plugin_file_path
	 */
	function __construct( $plugin_file_path ) {
		// Set download method to redirect
		add_filter( 'edd_file_download_method', array( $this, 'set_download_method' ) );
		// Hook into edd_requested_file to swap in the S3 secure URL
		add_filter( 'edd_requested_file', array( $this, 'get_download_url' ), 10, 3 );
		// Hook into the save download files metabox to apply the private ACL
		add_filter( 'edd_metabox_save_edd_download_files', array( $this, 'make_edd_files_private_on_s3' ), 11 );

		load_plugin_textdomain( 'as3cf-edd', false, dirname( plugin_basename( $plugin_file_path ) ) . '/languages/' );
	}

	/**
	 * Set download method
	 *
	 * @param string $method
	 *
	 * @return string
	 */
	function set_download_method( $method ) {
		return 'redirect';
	}

	/**
	 * Uses the secure S3 url for downloads of a file
	 *
	 * @param $file
	 * @param $download_files
	 * @param $file_key
	 *
	 * @return mixed
	 */
	function get_download_url( $file, $download_files, $file_key ) {
		global $as3cf, $edd_options;

		$file_data = $download_files[ $file_key ];
		$file_name = $file_data['file'];
		$post_id   = $file_data['attachment_id'];
		$expires   = apply_filters( 'as3cf_edd_download_expires', 5 );
		$headers   = apply_filters( 'as3cf_edd_download_headers', array(
			'ResponseContentDisposition' => 'attachment',
		), $file_data );

		// Our S3 upload
		if ( $as3cf->get_attachment_s3_info( $post_id ) ) {
			return $as3cf->get_secure_attachment_url( $post_id, $expires, null, $headers, true );
		}

		// Official EDD S3 addon upload - path should not start with '/', 'http', 'https' or 'ftp' or contain AWSAccessKeyId
		$url = parse_url( $file_name );

		if ( ( '/' !== $file_name[0] && false === isset( $url['scheme'] ) ) || false !== ( strpos( $file_name, 'AWSAccessKeyId' ) ) ) {
			$bucket     = ( isset( $edd_options['edd_amazon_s3_bucket'] ) ) ? trim( $edd_options['edd_amazon_s3_bucket'] ) : $as3cf->get_setting( 'bucket' );
			$expires    = time() + $expires;
			$secure_url = $as3cf->get_s3client()->getObjectUrl( $bucket, $file_name, $expires, $headers );

			return $secure_url;
		}

		// None S3 upload
		return $file;
	}

	/**
	 * Apply ACL to files uploaded outside of EDD on save of EDD download files
	 *
	 * @param $files
	 *
	 * @return mixed
	 */
	function make_edd_files_private_on_s3( $files ) {
		global $as3cf, $post;

		// get existing files attached to download
		$old_files          = edd_get_download_files( $post->ID );
		$old_attachment_ids = wp_list_pluck( $old_files, 'attachment_id' );
		$new_attachment_ids = array();

		if ( is_array( $files ) ) {
			foreach ( $files as $key => $file ) {
				$new_attachment_ids[] = $file['attachment_id'];

				if ( ! ( $s3object = $as3cf->get_attachment_s3_info( $file['attachment_id'] ) ) ) {
					// not S3 upload ignore
					continue;
				}

				global $as3cfpro;
				if ( $as3cfpro->is_pro_plugin_setup() ) {
					$s3object = $as3cf->set_attachment_acl_on_s3( $file['attachment_id'], $s3object, $as3cf::PRIVATE_ACL );
					if ( $s3object && ! is_wp_error( $s3object ) ) {
						$as3cf->make_acl_admin_notice( $s3object );
					}
				}
			}
		}

		// determine which attachments have been removed and maybe set to public
		$removed_attachment_ids = array_diff( $old_attachment_ids, $new_attachment_ids );
		$this->maybe_make_removed_edd_files_public( $removed_attachment_ids, $post->ID );

		return $files;
	}

	/**
	 * Remove public ACL from attachments removed from a download
	 * as long as they are not attached to any other downloads
	 *
	 * @param $attachment_ids
	 * @param $download_id
	 */
	function maybe_make_removed_edd_files_public( $attachment_ids, $download_id ) {
		global $as3cf, $wpdb;

		foreach( $attachment_ids as $id ) {
			if ( ! ( $s3object = $as3cf->get_attachment_s3_info( $id ) ) ) {
				// not an S3 attachment, ignore
				continue;
			}

			$length = strlen( $id );
			// check the attachment isn't used by other downloads
			$sql = "
				SELECT COUNT(*)
				FROM `{$wpdb->prefix}postmeta`
				WHERE `{$wpdb->prefix}postmeta`.`meta_key` = 'edd_download_files'
				AND `{$wpdb->prefix}postmeta`.`post_id` != {$download_id}
				AND `{$wpdb->prefix}postmeta`.`meta_value` LIKE '%s:13:\"attachment_id\";s:{$length}:\"{$id}\"%'
			";

			if ( $wpdb->get_var( $sql ) > 0 ) {
				// used for another download, ignore
				continue;
			}

			// set acl to public
			$s3object = $as3cf->set_attachment_acl_on_s3( $id, $s3object, $as3cf::DEFAULT_ACL );
			if ( $s3object && ! is_wp_error( $s3object ) ) {
				$as3cf->make_acl_admin_notice( $s3object );
			}
		}
	}
}