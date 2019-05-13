<?php
/**
 * Plugin Name: My First Plugin
 * Plugin URI:  https://thehiveresistance.com/myfirstplugin
 * Description: This is my first plugin. It does not do much.
 * Version:     0.1
 * Author:      Johan Nordström
 * Author URI:  https://thehiveresistance.com
 * License:     WTFPL
 * License URI: http://www.wtfpl.net/
 * Text Domain: myfirstplugin
 * Domain Path: /languages
 */

function mfp_myfirstshortcode() {
	return "LOOK MOMMY! NO HANDS!";
}

function mfp_init() {
	add_shortcode('myfirstshortcode', 'mfp_myfirstshortcode');

	add_shortcode('mysecondshortcode', function() {
		return "LOOK DADDY NO FEET!";
	});
}
add_action('init', 'mfp_init');
