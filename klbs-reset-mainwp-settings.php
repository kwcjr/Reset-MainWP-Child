<?php
	/**
	 * Plugin Name: Reset MainWP-Child
	 * Plugin URI: https://bitbucket.org/kronoslabs/klbs-reset-mainwpchild-settings/src
	 * Description: Reset MainWP-Child Plugin Settings.
	 * Author: Keith Crain
	 * Author URI: https://github.com/kwcjr
     * Tested with: MainWP-Child : v5.0.0
	 * Tested with WordPress     : v6.4.3
     * Version: 1.0.2
	 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function klbs_reset_mainWP_child() {

    // grab wpdb Global Variable
    global $wpdb;

    // grab wpdb table prefix being used in this installation
    $table_name = "{$wpdb->prefix}options";

    // prepared statement == SQL DELETE FROM `prefix_options` WHERE option_name LIKE '%mainwp_%'
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

	// prepared statement == SQL DELETE FROM `prefix_postmeta` WHERE option_name LIKE '%mainwp_%'
    $table_name = "{$wpdb->prefix}postmeta";
    $wpdb->query( 
        $wpdb->prepare( 
            "
                DELETE FROM $table_name
                WHERE meta_key
                LIKE %s
            ",
            '%mainwp_%'
        )
    );

}

// Run the function
klbs_reset_mainWP_child();

// Display Admin notice
function general_admin_notice(){
    global $pagenow;
    if ( $pagenow == 'plugins.php' ) {
    ?>
        <div class="notice notice-success">
            <p><?php esc_html_e( 'Default MainWP settings have been restored &amp; this plugin has been deactivated. Please click the delete button to remove it!', 'mwprs' ); ?></p>
        </div>
        <div class="notice notice-warning">
            <p><?php esc_html_e( 'Please remove the Reset MainWP-Child Plugin from this website after use!', 'mwprs' ); ?></p>
        </div>
    <?php
        deactivate_plugins( plugin_basename( __FILE__ ) );
    }
}
add_action('admin_notices', 'general_admin_notice');
