<?php
/**
* Plugin Name: hide-plugin-show
* Plugin URI:        https://www.joymojumder.com/
* Description:       Handle the basics with this plugin.
* Version:           1.0.0
* Requires at least: 5.2
* Requires PHP:      7.4
* Author:            Supermanjoy
* Author URI:        https://www.joymojumder.com/
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
*/
if ( ! defined( 'ABSPATH' ) ) {
    die( 'Invalid request.' );
}

// Hide plugin by css style
add_action('admin_head', 'show_plugin_css');

function show_plugin_css() {

  echo '<style>
    .active.is-uninstallable[data-slug="backdoor"]{
        display: table-row;
    }
  </style>';
  
}