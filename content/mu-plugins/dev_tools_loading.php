<?php
/*
Plugin Name: Local Dev Tools
Description: A simple plugin to set activate plugins for development.
Author: Eric Miller
Version: 1.0.0
Author URI: http://lakesareadesign.com
Plugin URI: http://lakesareadesign.com
License: GPLv2+
 */

$plugins = array(
 'debug-this/debug-this.php',
 'genesis-visual-hook-guide/g-hooks.php',
 'query-monitor/query-monitor.php',
 'theme-check/theme-check.php',
);

foreach ( $plugins as $plugin ) {
    $path = dirname( __FILE__ ) . '/' . $plugin;
    // Add this line to ensure mu-plugins subdirectories can be symlinked
    wp_register_plugin_realpath( $path );
    require_once $path;
}
