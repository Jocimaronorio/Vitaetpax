<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package vitaetpax
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function vitaetpax_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'vitaetpax_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function vitaetpax_jetpack_setup
add_action( 'after_setup_theme', 'vitaetpax_jetpack_setup' );

function vitaetpax_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function vitaetpax_infinite_scroll_render