<?php
/*
	Plugin Name: Custom Post Types
	Plugin URI: http://vtldesign.com
	Description: Registers all the custom post types for this site.
	Version: 2.0.1
	Author: Vital
	Author URI: http://vtldesign.com
	License: GPLv2

	Uses PostTypes PHP class for creating post types by Joe Grainger
	https://github.com/jjgrainger/PostTypes
*/

defined('ABSPATH') or die('Do not access this file directly.');

require plugin_dir_path(__FILE__) . 'inc/class-columns.php';
require plugin_dir_path(__FILE__) . 'inc/class-posttype.php';
require plugin_dir_path(__FILE__) . 'inc/class-taxonomy.php';
require plugin_dir_path(__FILE__) . 'inc/class-taxfilter.php';

/**
 * Plugin activation tasks
 */
function vtl_cpt_activate() {
	flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'vtl_cpt_activate');

// Include post type(s)
// @TODO: Add options page in wp-admin so each post type can
//        be activated/deactivated easily

// require plugin_dir_path(__FILE__) . 'post-types/your-post-type.php';
