<?php

namespace Alecad\Base;
use Alecad\Base\BaseController;

class SettingsLink extends BaseController {
    public function register() {
        add_filter( "plugin_action_links_$this->plugin_basename", [ $this, 'alecadSettingsLink' ] );
    }

    public function alecadSettingsLink( $link ) {
        $settings_links = '<a href="admin.php?page=alecad-plugin">Settings</a>';

        array_push( $link, $settings_links);
        return $link;
    }
}