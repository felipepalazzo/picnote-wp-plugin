<?php

class Picnote_Plugin
{
    protected $version;

    protected $plugin_name;

    function __construct()
    {

        $this->version = PICNOTE_VERSION;
        $this->plugin_name = 'picnote';
        $this->define_admin_hooks();
    }

    public static function activate()
    {
    }

    public static function deactivate()
    {
    }

    function picnote_admin_page()
    {
        add_menu_page('Picnote Settings', 'Picnote', 'manage_options', $this->plugin_name, array($this, 'picnote_admin_page_html'), 'dashicons-cover-image');
    }

    function picnote_admin_page_html()
    {
        require_once plugin_dir_path(dirname(__FILE__)) . 'views/admin-picnote.php';
    }

    private function define_admin_hooks()
    {
        add_action('admin_menu', array($this, 'picnote_admin_page'));
    }
}
