<?php
namespace WPHelper\Utility;

use WPHelper\PluginCore;

/**
 * PluginCoreStaticWrapper trait
 * 
 * Expose PluginCore instance methods as static methods.
 * 
 * @since WPHelper\Utility 0.10
 */
trait PluginCoreStaticWrapper {

	/** @var PluginCore */
	private static $plugin_core;

	/**
	 * @param string|PluginCore $plugin_core
	 */
	private static function set_plugin_core( string|PluginCore $plugin_core ) {

		if ( is_a( $plugin_core, PluginCore::class ) ) {
			self::$plugin_core = $plugin_core;
		} else if ( is_readable( $plugin_core ) ) {
			self::$plugin_core = PluginCore::get_by_file( $plugin_core );
		} else {
			self::$plugin_core = PluginCore::get( $plugin_core );
		}

		// PHP >=8.0
		// self::$plugin_core = match( true ){
		// 	is_a( $plugin_core, PluginCore::class ) => $plugin_core,
		// 	is_readable( $plugin_core ) => PluginCore::get_by_file( $plugin_core ),
		// 	default => PluginCore::get( $plugin_core ),
		// };
	}

	/**
	 * Expose PluginCore methods as our own static methods.
	 */
	public static function __callStatic( $name, $arguments )
	{
		return call_user_func_array( [ self::$plugin_core, $name ], $arguments );
	}

	/**
	 * @return string Plugin title.
	 */
	public static function title()
	{
		return self::$plugin_core->title();
	}

	/**
	 * @param string $extension (optional) Extension string.
	 * 
	 * @return string Plugin slug + optional extension (ie. 'my-slug-extension').
	 */
	public static function slug( $extension = '' )
	{
		return rtrim( self::$plugin_core->slug() . '-' . $extension, '-' );
	}

	/**
	 * @param string $extension (optional) Extension string.
	 * 
	 * @return string Plugin underscored + lowercase token + optional extension (ie. 'my_token_extension').
	 */
	public static function token( $extension = '' )
	{
		return rtrim( self::$plugin_core->token() . '_' . str_replace( '-', '_', $extension ), '_' );
	}

	/**
	 * @param string $path (optional) Path relative to plugin file.
	 * 
	 * @return string Plugin file path (+ optional relative path).
	 */
	public static function path( $path = '' )
	{
		return self::$plugin_core->path( $path );
	}

	/**
	 * @param string $url (optional) Path relative to plugin URL.
	 * 
	 * @return string Plugin URL (+ optional relative path).
	 */
	public static function url( $path = '' )
	{
		return self::$plugin_core->url( $path );
	}

	/**
	 * @return string Plugin version
	 */
	public static function version()
	{
		return self::$plugin_core->version();
	}
	
}