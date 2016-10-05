<?php
/**
 * @package my-first-ever-plugin
 * @version 0.0.01
 * Plugin Name: My First Ever Plugin
 * Plugin URI: http://www.shortdark.net/my-first-ever-plugin/
 * Description: My plugin does...
 * Author: My Name
 * Text Domain: my-first-ever-plugin
 * Version: 0.0.01
 * Author URI: http://www.shortdark.net/
 */
 
 /**************************
 ** PREVENT DIRECT ACCESS
 **************************/

defined('ABSPATH') or die('No script kiddies please!');

/**********************
 ** DO SOMETHING
 **********************/
// Add "<p>Hello World!</p>" to the end of each post and page
function mfep_hello_world($content) {
	$content .= "<p>Hello World!</p>";
	return $content;
}

// Hook the function to "the_content"...
add_filter('the_content', 'mfep_hello_world');

/****************************
 ** LOAD PLUGIN TEXT DOMAIN
 ****************************/

function mfep_load_textdomain() {
	load_plugin_textdomain('my-first-ever-plugin', false, dirname(plugin_basename(__FILE__)) . '/languages');
}

add_action('init', 'mfep_load_textdomain');


