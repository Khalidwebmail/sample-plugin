<?php

/**
 * Trigger this file on plugin unsinatall
 * 
 * @package AlecadPlugin
 */

if( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

global $wpdb;

$wpdb->query( "DELETE * FROM {$wpdb->prefix}posts WHERE post_type = 'book'");

$wpdb->query( "DELETE * FROM {$wpdb->prefix}post_meta WHERE post_id NOT IN ( SELECT id FROM {$wpdb->prefix}posts )" );

$wpdb->query( "DELETE * FROM {$wpdb->prefix}term_relationships WHERE object_id NOT IN ( SELECT id FROM {$wpdb->prefix}posts )" );