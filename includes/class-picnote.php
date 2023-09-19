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

    function enqueue_admin_scripts()
    {
        wp_enqueue_media();
        wp_enqueue_script($this->plugin_name . 'admin-scripts', plugin_dir_path(dirname(__FILE__)) . 'js/picnote-admin.js', array('jquery', 'thickbox', 'media-upload'), $this->version, false);
    }

    function picnote_admin_page_html()
    {
        require_once plugin_dir_path(dirname(__FILE__)) . 'views/admin-picnote.php';
    }

    private function define_admin_hooks()
    {
        add_action('admin_menu', array($this, 'picnote_admin_page'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));
    }
}
