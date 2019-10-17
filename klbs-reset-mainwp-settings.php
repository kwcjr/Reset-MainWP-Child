<?php
/**
 * Plugin Name: Reset mainWP Settings
 * Plugin URI: https://bitbucket.org/kronoslabs/klbs-reset-mainwpchild-settings/src
 * Description: Reset mainWP-Child Plugin Settings.
 * Author: Keith Crain
 * Author URI: Kronoslabs.io
 * Version: 1.0.0
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// load wp
define('WP_USE_THEMES', false);
global $wpdb;
require('wp-load.php');

// grab wpdb Global Variable
global $wpdb;

// grab wpdb table prefix being used in this installation
$table_name = "{$wpdb->prefix}options";

// prepared statment == SQL DELETE FROM `prefix_options` WHERE option_name LIKE '%mainwp_%'
$wpdb->query( 
	$wpdb->prepare( 
		"
            DELETE FROM $table_name
            WHERE option_name
            LIKE %s
		",
	    '%mainwp_%'
    )
);
   
// $wpdb->show_errors();
// $wpdb->print_error();
// define( 'DIEONDBERROR', true );
?>