<?php
/**
 * Plugin Name: Elementor Widget
 * Description: Adding iframe  in Elementor page builder.
 * Version: 1.0
 * Author: Vladislav Balakshii
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: elementor-widget
 */

use ElementorWidget\Plugin;

defined('ABSPATH') || exit;

function runPlugin()
{

    include_once __DIR__."/src/Plugin.php";
    $plugin = new Plugin();
    $plugin->run();

}

runPlugin();

