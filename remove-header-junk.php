<?php

/* ======================================================================

	Plugin Name: Remove Header Junk
	Plugin URI: http://cferdinandi.github.io/remove-header-junk/
	Description: Removes the unneccessary junk WordPress adds to the header.
	Version: 1.0
	Author: Chris Ferdinandi
	Author URI: http://gomakethings.com
	License: MIT

	Forked from ThemeLab.
	http://www.themelab.com/2010/07/11/remove-code-wordpress-header/

 * ====================================================================== */

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');

?>