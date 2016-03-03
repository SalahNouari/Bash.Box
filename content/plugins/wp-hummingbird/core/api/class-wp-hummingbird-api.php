<?php

class WP_Hummingbird_API {

	private $api_url = 'https://premium.wpmudev.org/api/%%MODULE%%/v1/';


	public function get_this_site() {
		if ( defined( 'WPHB_API_DOMAIN' ) ) {
			return WPHB_API_DOMAIN;
		}

		return network_site_url();
	}

	public function get_api_url( $module ) {
		if ( defined( 'WPHB_TEST_API_URL' ) && WPHB_TEST_API_URL ) {
			return WPHB_TEST_API_URL;
		} else {
			$url = $this->api_url;
		}

		return str_replace( '%%MODULE%%', $module, $url );
	}

	/**
	 * Sends a "ping" to Performance tests so it can be inizialized
	 *
	 * @return array|mixed|object|WP_Error
	 */
	public function performance_check() {
		return $this->request( 'performance', 'site/check/', 'POST' );
	}

	/**
	 * Get Performance results
	 *
	 * @return array|mixed|object|WP_Error
	 */
	public function performance_results() {
		return $this->request( 'performance', 'site/result/latest/', 'GET' );
	}

	/**
	 * Get Uptime stats
	 *
	 * @param string $time day|week|month
	 *
	 * @return array|mixed|object|WP_Error
	 */
	public function uptime_get_stats( $time = 'day' ) {
		return $this->request( 'uptime', 'stats/' . $time, 'GET', 20 );
	}

	public function uptime_enable() {
		return $this->request( 'uptime', 'monitoring/', 'POST', 20 );
	}

	public function uptime_disable() {
		return $this->request( 'uptime', 'monitoring/', 'DELETE', 20 );
	}

	public function request( $module, $path, $method, $timeout = false ) {
		global $wpmudev_un;
		if ( ! is_object( $wpmudev_un )  && class_exists( 'WPMUDEV_Dashboard' ) && method_exists( 'WPMUDEV_Dashboard', 'instance' ) ) {
			$wpmudev_un = WPMUDEV_Dashboard::instance();
		}

		if ( ! wphb_is_member() ) {
			return new WP_Error( 'dashboard-error', __( 'Have you installed and logged in to the latest version of WPMUDEV Dashboard?', 'wphb' ) );
		}

		if ( defined( 'WPHB_API_KEY' ) ) {
			$api_key = WPHB_API_KEY;
		} elseif ( is_object( $wpmudev_un ) && method_exists( $wpmudev_un, 'get_apikey' ) ) {
			$api_key = $wpmudev_un->get_apikey();
		} elseif ( is_object( WPMUDEV_Dashboard::$api ) && method_exists( WPMUDEV_Dashboard::$api, 'get_key' ) ) {
			$api_key = WPMUDEV_Dashboard::$api->get_key();
		}
		else {
			$api_key = '';
		}

		if ( defined( 'WPHB_API_DOMAIN' ) ) {
			$domain = WPHB_API_DOMAIN;
		} else {
			$domain = $this->get_this_site();
		}

		$url = $this->get_api_url( $module ) . $path;

		if ( $method == 'POST' ) {
			$args['body'] = array( 'domain' => $domain );
		} else {
			$url = add_query_arg( array( 'domain' => $this->get_this_site() ), $url );
		}

		$args['headers']   = array( 'Authorization' => 'Basic ' . $api_key );
		$args['sslverify'] = false;
		$args['method']    = $method;

		if ( $timeout ) {
			$args['timeout'] = $timeout;
		}

		$this->log( "WPHB API: Sending request to $url" );
		$this->log( "WPHB API: Arguments:" );
		$this->log( $args );

		$response = wp_remote_post( $url, $args );

		$this->log( "WPHB API: Response:" );
		$this->log( $response );

		$code = wp_remote_retrieve_response_code( $response );
		$error = false;
		$message = '';
		$data = array();

		if ( is_wp_error( $response ) ) {
			$error   = true;
			$code    = $response->get_error_code();
			$message = $response->get_error_message();
			$data    = $response->get_error_data();
			$body    = array();
		}
		elseif ( $code != 200 ) {
			// Error coming from the server
			$body    = json_decode( wp_remote_retrieve_body( $response ) );
			$error = true;
			$message = $body->message;
			$data = false;
		}
		else {
			$body    = json_decode( wp_remote_retrieve_body( $response ) );
		}

		if ( $error ) {
			return new WP_Error( $code, $message, $data );
		}

		return $body;
	}

	private function log( $message ) {
		if ( defined( 'WP_DEBUG_LOG' ) && WP_DEBUG_LOG ) {
			$date = current_time( 'mysql' );
			if ( ! is_string( $message ) ) {
				$message = print_r( $message, true );
			}
			error_log( '[' . $date . '] - ' . $message );
		}
	}


}