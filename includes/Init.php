<?php

/**
 * 
 * @package AlecadPlugin
 */

namespace Alecad;

use Alecad\Pages\Admin;
use Alecad\Base\AlecadActivate;
use Alecad\Base\AlecadDeactivate;
use Alecad\Base\EnqueueScripts;
use Alecad\Base\SettingsLink;

final class Init {
    private static function get_services() {
        return [
            EnqueueScripts::class,
            AlecadActivate::class,
            AlecadDeactivate::class,
            Admin::class,
            SettingsLink::class
        ];
    }

    private static function instantiate( $class ) {
        return new $class;
    }
    public static function register_service() {
        foreach( self::get_services() as $class ) {
            if( class_exists( $class ) ) {
                $service = self::instantiate( $class );
                if( method_exists( $service, 'register' ) ) {
                    $service->register();
                }
            }
        }
    }
}