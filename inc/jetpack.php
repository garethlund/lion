<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package lionsafety
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function lionsafety_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'lionsafety_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function lionsafety_jetpack_setup
add_action( 'after_setup_theme', 'lionsafety_jetpack_setup' );

function lionsafety_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function lionsafety_infinite_scroll_render