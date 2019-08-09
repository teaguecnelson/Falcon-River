<?php
/**
 * Genesis Sample.
 *
 * A template to...
 *
 * Template Name: Sell
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Move Entry Header to a Full-width Hook 
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
add_action( 'genesis_after_header', 'genesis_entry_header_markup_open', 5 );
add_action( 'genesis_after_header', 'genesis_do_post_title' );
add_action( 'genesis_after_header', 'genesis_post_info' );
add_action( 'genesis_after_header', 'genesis_entry_header_markup_close', 15 );
// Add custom opening div for page title
add_action( 'genesis_after_header', 'sk_do_page_title_before', 7 );
function sk_do_page_title_before() {
	echo '<div class="alignfull"><div class="site-inner"><div class="content-sidebar-wrap"><div class="content"><div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><div class="wp-block-media-text__content my-entry-title">';
}

// Add custom closing div for page title
add_action( 'genesis_after_header', 'sk_do_page_title_after' );
function sk_do_page_title_after() {
	echo 'Learn About Selling Your Business.

	</div></div></div></div></div></div>';
}

// Runs the Genesis loop.
genesis();
