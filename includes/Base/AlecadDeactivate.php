<?php

/**
 * 
 * @package AlecadPlugin
 */

namespace Alecad\Base;

class AlecadDeactivate {
    public function register() {
        register_deactivation_hook( __FILE__, [ $this, 'alecad_deactivate' ] );
    }

    public function alecad_deactivate() {
        flush_rewrite_rules();
    }
}