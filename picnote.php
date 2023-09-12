<?php

/**
 * Plugin Name
 *
 * @package           PicNote
 * @author            Felipe Palazzo
 * @package           PicNote
 * @link              https://picnote.pro
 *
 * @wordpress-plugin
 * Plugin Name:       PicNote
 * Plugin URI:        https://picnote.pro
 * Description:       Create custom notes for your pictures
 * Version:           1.0.0
 * Author:            Felipe Palazzo
 * Author URI:        https://palazzo.dev
 * Text Domain:       picnote
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 */
define('PICNOTE_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-picnote-activator.php
 */
function activate_picnote_plugin()
{
    Picnote_Plugin::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-picnote-deactivator.php
 */
function deactivate_picnote_plugin()
{
    Picnote_Plugin::deactivate();
}

register_activation_hook(__FILE__, 'activate_picnote_plugin');
register_deactivation_hook(__FILE__, 'deactivate_picnote_plugin');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-picnote.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */

$plugin = new Picnote_Plugin();
