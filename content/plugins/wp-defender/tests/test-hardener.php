<?php

/**
 * @author: Hoang Ngo
 */
Class Hardener_Test extends WP_UnitTestCase {
	function __construct() {
		$files = WD_Utils::get_dir_tree( wp_defender()->get_plugin_path() . 'app/module/hardener-module/component/' );
		foreach ( $files as $file ) {
			//include_once $file;
		}
	}

	function test_load() {

	}
}