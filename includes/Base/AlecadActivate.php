<?php

/**
 * 
 * @package AlecadPlugin
 */

namespace Alecad\Base;

class AlecadActivate {
    public function register() {
        register_activation_hook( __FILE__, [ $this, 'alecad_activate' ] );
    }
    
    public function alecad_activate() {
        flush_rewrite_rules();
    }
}