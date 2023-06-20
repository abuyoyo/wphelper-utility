<?php
/**
 * General functions that PHP should provide but doesn't
 * 
 * Polyfill-y-ish functions
 */

if ( ! function_exists( 'natksort' ) ):
/**
 * natksort
 * 
 * natsort for keys
 * 
 * @package WPHelper\Utility
 */
function natksort(&$array){
	$flipped = array_flip($array);
	natsort($flipped);
	$array = array_flip($flipped);
}
endif;


if ( ! function_exists( 'wph_is_json' ) ):
/**
 * WPH is_json
 * Test if string is valid JSON
 * 
 * @link https://subinsb.com/php-check-if-string-is-json/
 * 
 * @package WPHelper\Utility
 */
function wph_is_json( $string ){
	return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
}
endif;