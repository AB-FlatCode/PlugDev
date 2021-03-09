<?php

/**
 * Plugin Name:       AbDev Plugin
 * Plugin URI:        https://alenbarac.com
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0.
 * Author:            Alen Barac
 * Author URI:        https://alenbarac.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       abdev-plugin
 * Domain Path:       /languages
 */

use Inc\Base\Activate;
use Inc\Base\Deactivate;

defined( 'ABSPATH' ) or die( 'You are not allowed to be here you silly human!' );

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
  require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


// Constants
define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN', plugin_basename( __FILE__ ) );

function activate_abdev_plugin() {
  Activate::activate();
}

function deactivate_abdev_plugin() {
  Deactivate::deactivate();
}

register_activation_hook( __FILE__, 'activate_abdev_plugin' );
register_deactivation_hook( __FILE__, 'activate_abdev_plugin' );


if ( class_exists( 'Inc\\Init' ) ) {
  Inc\Init::register_services();
}

