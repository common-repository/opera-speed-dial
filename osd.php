<?php
/*
Plugin Name: Opera Speed Dial support
Plugin URI: http://www.ramoonus.nl/wordpress/opera-speed-dial/
Description: This plugin adds a an icon for Opera Speed Dial
Version: 1.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

function rw_osd_head() {
	echo '<link rel="icon" type="image/png" href="'.content_url().'/osd-image.png" />'; // Opera Speed Dial
	echo "\n"; 
	//echo '<link rel="apple-touch-icon" type="image/png" href="'.content_url().'/osd-image.png" />'; // Icon with Apple Formatting
	//echo '<link rel="apple-touch-icon-precomposed" type="image/png" href="'.content_url().'/osd-image.png" />'; // Icon without Apple's reflective shine
	echo '<link rel="image_src" type="image/png" href="'.content_url().'/osd-image.png" />'; // Facebook and digg
	echo "\n"; 
	
	// Opera 
	// refresh preview after 3600 seconds (one hour)
	echo '<meta http-equiv="preview-refresh" content="3600">'; 
	echo "\n"; 
}
add_action('wp_head', 'rw_osd_head');
?>