<?php

/**
 * The following functions abstract away various implementation details of the plugin.
 * They never echo anything.
 */

/**
 * Check if we're on a certain type of question page
 *
 * @param string $type The type of page
 * @return bool
 */
function is_qa_page( $type = '' ) {
	static $flags;

	if ( !$flags ) {
		$flags = array(
			'ask'		 => (bool) get_query_var( 'qa_ask' ),
			'unanswered' => (bool) get_query_var( 'qa_unanswered' ),
			'edit'		 => (bool) get_query_var( 'qa_edit' ),
			'user'		 => 'question' == get_query_var( 'post_type' ) && get_query_var( 'author_name' ),
			'single'	 => is_singular( 'question' ),
			'archive'	 => is_post_type_archive( 'question' ),
			'tag'		 => is_tax( 'question_tag' ),
			'category'	 => is_tax( 'question_category' )
		);
	}

	// Check if any flags are true
	if ( empty( $type ) )
		$result	 = in_array( true, $flags );
	else
		$result	 = isset( $flags[ $type ] ) && $flags[ $type ];

	return apply_filters( 'is_qa_page', $result, $type );
}

/**
 * Get the URL to a certain type of question page
 *
 * @param string $type The type of URL
 * @param int (optional) $id A question or tag id, depending on the type
 * @return string
 */
function qa_get_url( $type, $id = 0 ) {
	$base = get_post_type_archive_link( 'question' );

	switch ( $type ) {
		case 'ask':
			$result	 = trailingslashit( $base ) . user_trailingslashit( QA_SLUG_ASK );
			break;
		case 'unanswered':
			$result	 = trailingslashit( $base ) . user_trailingslashit( QA_SLUG_UNANSWERED );
			break;
		case 'edit':
			$post	 = get_post( $id );
			if ( $post ) {
				$result = trailingslashit( $base ) . user_trailingslashit( QA_SLUG_EDIT . '/' . $post->ID );
			}
			break;
		case 'delete':
			$post = get_post( $id );
			if ( $post ) {
				$result = esc_url_raw( add_query_arg( array(
					'qa_delete'	 => $post->ID,
					'_wpnonce'	 => wp_create_nonce( 'qa_delete' )
				), $base ) );
			}
			break;
		case 'user':
			if ( !$id ) {
				$id = get_current_user_id();
			}
			$user = get_userdata( $id );
			if ( $user ) {
				if ( defined( 'BP_VERSION' ) ) {

				}
				$result = trailingslashit( $base ) . user_trailingslashit( QA_SLUG_USER . '/' . $user->user_nicename );
			}
			break;
		case 'single':
			$result	 = get_permalink( $id );
			break;
		case 'archive':
			$result	 = get_post_type_archive_link( 'question' );
			break;
		case 'tag':
			$result	 = get_term_link( $id, 'question_tag' );
			break;
		case 'category':
			$result	 = get_term_link( $id, 'question_category' );
			break;
		default:
			return '';
	}

	return apply_filters( 'qa_get_url', $result, $type, $id );
}

function is_question_answered( $question_id = 0, $type = 'any' ) {
	if ( !$question_id )
		$question_id = get_the_ID();

	if ( 'accepted' == $type ) {
		return apply_filters( 'qa_is_question_answered', get_post_meta( $question_id, '_accepted_answer', true ) );
	} else {
		return apply_filters( 'qa_is_question_answered', (get_answer_count( $question_id ) > 0 ) );
	}
}

function get_answer_count( $question_id ) {
	$count = (int) get_post_meta( $question_id, '_answer_count', true );

	if ( $count < 0 )
		update_post_meta( $question_id, '_answer_count', 0 );

	return $count;
}

/* Reputation API */

function qa_get_votes( $id ) {
	return $GLOBALS[ '_qa_votes' ]->get( $id );
}

function qa_add_vote( $id, $vote ) {
	return $GLOBALS[ '_qa_votes' ]->add( $id, $vote );
}

function qa_remove_vote( $id ) {
	return $GLOBALS[ '_qa_votes' ]->remove( $id );
}

function qa_get_user_rep( $user_id ) {
	return (int) get_user_meta( $user_id, '_qa_rep', true );
}

/* = Private API (the following functions may vanish at any point)
  -------------------------------------------------------------- */

/**
 * Minimalist HTML framework.
 *
 * Usage:
 *
 * html( 'p', 'Hello world!' );
 * html( 'a', array( 'href' => 'http://example.com' ), 'A link' );
 * html( 'img', array( 'src' => 'http://example.com/f.jpg' ) );
 * html( 'ul', html( 'li', 'a' ), html( 'li', 'b' ) );
 *
 * @return string An HTML tag
 */
function _qa_html( $tag ) {
	$args = func_get_args();

	$tag = array_shift( $args );

	if ( is_array( $args[ 0 ] ) ) {
		$closing	 = $tag;
		$attributes	 = array_shift( $args );
		foreach ( $attributes as $key => $value ) {
			$tag .= ' ' . $key . '="' . htmlspecialchars( $value, ENT_QUOTES ) . '"';
		}
	} else {
		list( $closing ) = explode( ' ', $tag, 2 );
	}

	if ( in_array( $closing, array( 'area', 'base', 'basefont', 'br', 'hr', 'input', 'img', 'link', 'meta' ) ) ) {
		return "<{$tag} />";
	}

	$content = implode( '', $args );

	return "<{$tag}>{$content}</{$closing}>";
}

/**
 * Update to v1.4
 * @since 1.4
 */
function qa_update_14() {
	$version = get_option( 'qa_installed_version' );
	if ( $version == QA_VERSION )
		return;

	// Just update version number if theme is already supported
	if ( strpos( qa_supported_themes(), get_template() ) !== false )
		$supported_theme = true;
	else
		$supported_theme = false;

	if ( !$options = get_option( QA_OPTIONS_NAME ) )
		$options = array();

	$changed = false;
	if ( !isset( $options[ "general_settings" ][ "page_layout" ] ) ) {
		if ( isset( $options[ "general_settings" ][ "full_width" ] ) && $options[ "general_settings" ][ "full_width" ] )
			$options[ "general_settings" ][ "page_layout" ]	 = 'content';
		else
			$options[ "general_settings" ][ "page_layout" ]	 = 'content-sidebar';

		unset( $options[ "general_settings" ][ "full_width" ] );
		$changed = true;
	}
	if ( !isset( $options[ "general_settings" ][ "page_width" ] ) && !$supported_theme ) {
		$options[ "general_settings" ][ "page_width" ]	 = 1000;
		$changed									 = true;
	}
	if ( !isset( $options[ "general_settings" ][ "content_width" ] ) && !$supported_theme ) {
		$options[ "general_settings" ][ "content_width" ]	 = 600;
		$changed										 = true;
	}
	if ( !isset( $options[ "general_settings" ][ "sidebar_width" ] ) && !$supported_theme ) {
		$options[ "general_settings" ][ "sidebar_width" ]	 = 300;
		$changed										 = true;
	}
	if ( !isset( $options[ "general_settings" ][ "content_alignment" ] ) ) {
		$options[ "general_settings" ][ "content_alignment" ]	 = 'center';
		$changed											 = true;
	}
	if ( $changed || empty( $options ) ) {
		update_option( QA_OPTIONS_NAME, $options );
		update_option( 'qa_installed_version', QA_VERSION );
	}
}

/**
 * Returns supported theme names from css files in theme mods directory
 *
 * @since 1.4
 *
 */
function qa_supported_themes() {
	$dir	 = QA_PLUGIN_DIR . 'theme-mods/css/';
	$files	 = glob( $dir . 'custom-*.css' );
	if ( is_array( $files ) && !empty( $files ) ) {
		$file_list = '';
		foreach ( $files as $filename ) {
			$file_list .= str_replace( array( $dir . 'custom-', '.css' ), '', $filename ) . ', ';
		}
		return rtrim( $file_list, ', ' );
	}

	return '';
}