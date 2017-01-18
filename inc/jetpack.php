<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package 3Q Digital
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function three_q_digital_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'three_q_digital_jetpack_setup' );
