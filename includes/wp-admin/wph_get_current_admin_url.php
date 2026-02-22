<?php
if ( ! function_exists( 'wph_get_current_admin_url' ) ):
	/**
	 * Get current admin page URL.
	 *
	 * Returns an empty string if it cannot generate a URL.
	 * Based on WooCommerce wc_get_current_admin_url()
	 * @link https://github.com/woocommerce/woocommerce/blob/master/includes/admin/wc-admin-functions.php#L506
	 * 
	 * @package WPHelper\Utility
	 * 
	 * @return string
	 */
	function wph_get_current_admin_url() {
		$uri = isset( $_SERVER['REQUEST_URI'] ) ? esc_url_raw( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '';
		$uri = preg_replace( '|^.*/wp-admin/|i', '', $uri );
	
		if ( ! $uri ) {
			return '';
		}
	
		return remove_query_arg( array( '_wpnonce' ), admin_url( $uri ) );
	}
endif;