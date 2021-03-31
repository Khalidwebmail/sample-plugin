<?php

/**
 * Plugin Name:       Alecad Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires PHP:      7.0
 * Author:            Khalid Ahmed
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       alecad-plugin
 * Domain Path:       /languages
 */

if( ! defined( 'ABSPATH' ) ) {
    die;
}

if( file_exists( __DIR__.'/vendor/autoload.php' ) ) {
    require_once __DIR__.'/vendor/autoload.php';
}

if( class_exists( 'Alecad\\Init' ) ) {
    Alecad\Init::register_service();
}
