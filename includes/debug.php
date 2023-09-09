<?php
/**
 * General custom functions used for debugging by abuyoyo
 */

if ( ! function_exists( 'wp_dump' ) ):
/**
 * WP_DIE_ARR
 * 
 * Use wp_die to display preformatted var_dump
 * 
 * @package WPHelper\Utility
 */
function wp_dump( $item, $title = ''  ){
	ob_start();
	var_dump( $item );
	$dump = ob_get_clean();

	$dump = pre_print( $dump, false );

	wp_die( $dump, $title );
}
endif;




if ( ! function_exists( 'br' ) ):
/**
 * BR
 * 
 * shorthand for adding <br> tags and PHP_EOL to debug messages
 * 
 * @package WPHelper\Utility
 */
function br(){

	if ( defined('BR') && BR == 'PHP' )
		echo PHP_EOL; // ( BR == 'PHP' )
	else
		echo '<br>' . PHP_EOL; // ( BR == 'HTML' )
}
endif;

include 'deprecated/wp_die_arr.php';

include 'debug/qm_debug.php';
include 'debug/wph_die.php';
include 'debug/wph_dump.php';
