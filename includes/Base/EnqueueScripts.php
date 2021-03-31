<?php

namespace Alecad\Base;

class EnqueueScripts extends BaseController {
    
    public function register() {
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue' ] );
    }

    public function enqueue() {
        wp_enqueue_style( 'mypluginstyle', $this->plugin_url . '/assets/css/mystyle.css' );
        wp_enqueue_script( 'mypluginscript', $this->plugin_url . '/assets/css/myscript.js' );
    }
}