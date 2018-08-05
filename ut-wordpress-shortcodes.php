<?php
/*
	Plugin Name: UT WordPress Shortcodes
	Plugin URI: https://github.com/ugenetang/UT-WordPress-Shortcodes
	Description: A collection of different shortcodes.
	Version: 1.0
	Author: Ugene Tang
	Author URI: https://github.com/ugenetang
	
*/

/*
	Current Shortcodes & Functions:
	1]mysite-base-url: returns the site url of your WordPress installation.
*/

// Function to get base URL of site.
function ut-get-base-url() {
	return get_site_url();
}

//Add "mysite-base-url" shortcode.
add_shortcode('mysite-base-url', 'ut-get-base-url');
?>