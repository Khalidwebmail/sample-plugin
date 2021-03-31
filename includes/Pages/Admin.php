<?php

namespace Alecad\Pages;

use Alecad\Base\BaseController;

class Admin extends BaseController {
    public function register() {
        add_action( 'admin_menu', [ $this, 'add_alecad_admin_menu' ] );
    }

    public function add_alecad_admin_menu() {
        add_menu_page( 'Alecad Plugin', 'Alecad', 'manage_options', 'alecad-plugin', [ $this, 'admin_index' ], 'dashicons-store', 110 );
    }

    public function admin_index() {
        $this->view('admin');
    }
}