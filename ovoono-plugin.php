<?php
/**
 * @package  OvoOnoPlugin
 */
/*
Plugin Name: OvoOnoPlugin
Description: This plugins is heart and mind of OvoOno Shop
Version: 1.0.0
Author: Emel Rizvanovic
Author URI: https://devemel.pro
License: GPLv2 or later
Text Domain: OvoOno Plugin
*/


// If this file is called firectly, abort!!!
defined( 'ABSPATH' ) or die( 'Error' );

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
function activate_ovoono_plugin() {
	OVOONOPLUGIN\Base\Activate::activate();
	OVOONOPLUGIN\Base\Database::createDatabase();
}
register_activation_hook( __FILE__, 'activate_ovoono_plugin' );

/**
 * The code that runs during plugin deactivation
 */
function deactivate_ovoono_plugin() {
	OVOONOPLUGIN\Base\Deactivate::deactivate();
	//OVOONOPLUGIN\Base\Database::deleteTable();
}
register_deactivation_hook( __FILE__, 'deactivate_ovoono_plugin' );

/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists( 'OVOONOPLUGIN\\Init' ) ) {
	OVOONOPLUGIN\Init::register_services();
}

add_action( 'init', array( 'OVOONOPLUGIN\Base\Hooks', 'registerHooks' ) );


