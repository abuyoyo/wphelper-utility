<?php
/**
 * General custom functions used for debugging by abuyoyo
 */

if ( ! function_exists( 'wp_die_arr' ) ):
/**
 * WP_DIE_ARR
 * 
 * Use wp_die to display preformatted PHP arrays and objects
 */
function wp_die_arr( $item, $title = '' ){

	$item = pre_print( $item, false );

	if ( ! empty( $title ) ){
		$item = '<h1>' . $title . '</h1>' . PHP_EOL . $item;
	}

	wp_die( $item, $title );
}
endif;



if ( ! function_exists( 'wp_dump' ) ):
/**
 * WP_DIE_ARR
 * 
 * Use wp_die to display preformatted var_dump
 */
function wp_dump( $item, $title = ''  ){
	ob_start();
	var_dump( $item );
	$dump = ob_get_clean();

	wp_die( "<pre>$dump</pre>", $title );
}
endif;



if ( ! function_exists( 'qm_debug' ) ):
/**
 * QM::debug wrapper function
 * 
 * @param string $message
 * @param array<string, mixed> $context
 * @return void
 */
function qm_debug( $message, $context = [] ){

	// Validate Query Monitor activated
	if ( ! class_exists('QM') )
		return;

	QM::debug( $message, $context );
}
endif;



if ( ! function_exists( 'br' ) ):
/**
 * BR
 * 
 * shorthand for adding <br> tags and PHP_EOL to debug messages
 */
function br(){

	if ( defined('BR') && BR == 'PHP' )
		echo PHP_EOL; // ( BR == 'PHP' )
	else
		echo '<br>' . PHP_EOL; // ( BR == 'HTML' )
}
endif;