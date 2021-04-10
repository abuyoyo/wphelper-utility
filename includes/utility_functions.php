<?php

/**
 * General utility functions used throughout abuyoyo plugins
 */


if ( ! function_exists( 'get_http_response_code' ) ):
/**
 * Get HTTP Response Code
 * 
 * @param string $url URL to test
 * @return int HTTP code 
 */
function get_http_response_code($url){

	if ( function_exists( 'wp_remote_get' ) ){
		$response = wp_remote_get( $url );
		return wp_remote_retrieve_response_code( $response );
	}
	
	$handle = curl_init($url);
	curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
	curl_exec($handle);
	$http_code = curl_getinfo($handle, CURLINFO_RESPONSE_CODE);
	curl_close($handle);
	
	return $http_code;
	
}
endif;


if ( ! function_exists( 'pre_print' ) ):
/**
 * Print array or object in pre-formatted HTML. Also accepts scalars.
 * 
 * @param mixed $output
 * @param boolean $echo If true echoes the output. Otherwise returns pre-formatted html string
 * 
 * @return void|string
 */
function pre_print( $output, $echo = true ){
	if ( is_array( $output ) || is_object( $output ) ){
		$output = sprintf(
			'<pre>%s</pre>',
			htmlspecialchars( print_r( $output, true ) )
		);
	}

	if ( $echo ){
		echo $output;
	} else {
		return $output;
	}
}
endif;