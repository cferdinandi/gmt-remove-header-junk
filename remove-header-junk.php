<?php

/**
 * Plugin Name: GMT Remove Header Junk
 * Plugin URI: https://github.com/cferdinandi/gmt-remove-header-junk/
 * GitHub Plugin URI: https://github.com/cferdinandi/gmt-remove-header-junk/
 * Description: Removes the unneccessary junk WordPress adds to the header.
 * Version: 1.1.1
 * Author: Chris Ferdinandi
 * Author UI: http://gomakethings.com
 * License: MIT
 *
 * Forked from Scotch.io.
 * http://scotch.io/quick-tips/cms/wordpress/removing-wordpress-header-junk
 */

	remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
	remove_action('wp_head', 'wp_generator'); // remove wordpress version
	remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
	remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
	remove_action('wp_head', 'index_rel_link'); // remove link to index page
	remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
	remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
	remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 ); // remove shortlink
	remove_action('wp_head', 'rel_canonical', 10, 0 ); // remove canonical link