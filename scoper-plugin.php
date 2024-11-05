<?php

defined('ABSPATH') || exit;

/**
 * Plugin Name: MyPluginNamespace
 * Description: This plugin will helps to generate phpcs and scoper related boilerplate 
 * Plugin URI: #
 * Author: Emran
 * Version: 1.0.0
 * Author URI: #
 *
 * Text Domain: phpcs-scoper-boilerplate
 * Domain Path: /languages
 *
 */

final class MyPluginNamespace
{
	public static function version()
	{
		return '1.0.0';
	}

	public function __construct()
	{
		/**
		 * Make sure to update autoload file path after each scoper build at vendor/scoper-autoload.php file
		 * $loader = require_once __DIR__.'/build/vendor/src/autoload.php';
		 */
		require_once self::pluginDir() . 'vendor-prefixed/scoper-autoload.php';
		add_action('plugins_loaded', [$this, 'initiate']);
		register_activation_hook(__FILE__, [$this, 'activatePlugin']);
		register_deactivation_hook(__FILE__, [$this, 'deactivatePlugin']);
	}

	public static function pluginDir()
	{
		return trailingslashit(plugin_dir_path(__FILE__));
	}

	public static function pluginUrl()
	{
		return trailingslashit(plugin_dir_url(__FILE__));
	}
	public function activatePlugin() {}
	public function deactivatePlugin() {}
	public function initiate()
	{
		echo '<br>';
		var_dump(class_exists('MyPluginNamespace\Tests\Test'));
		var_dump(class_exists('MyVendorPrefix\Dbout\WpOrm\Models\Article'));

		die();
	}
}

new  MyPluginNamespace();
