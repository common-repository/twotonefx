<?php
/**
 * Common plugin functionality.
 *
 * @package   TwotoneFX
 * @since     1.0.0
 * @copyright Copyright (c) 2015 AudioTheme, LLC
 * @license   GPL-2.0+
 */

/**
 * Abstract plugin class.
 *
 * @package TwotoneFX
 * @since   1.0.0
 */
abstract class TwotoneFX_AbstractPlugin {
	/**
	 * Absolute path to the main plugin directory.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	protected $directory;

	/**
	 * Absolute path to the main plugin file.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	protected $file;

	/**
	 * Plugin identifier.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	protected $slug;

	/**
	 * URL to the main plugin directory.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	protected $url;

	/**
	 * Retrieve the plugin directory.
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public function get_directory() {
		return $this->directory;
	}

	/**
	 * Set the plugin's directory.
	 *
	 * @since 1.0.0
	 *
	 * @param  string $directory Absolute path to the main plugin directory.
	 * @return $this
	 */
	public function set_directory( $directory ) {
		$this->directory = rtrim( $directory, '/' ) . '/';
		return $this;
	}

	/**
	 * Retrieve the path to a file in the plugin.
	 *
	 * @since 1.0.0
	 *
	 * @param  string $path Optional. Path relative to the plugin root.
	 * @return string
	 */
	public function get_path( $path = '' ) {
		return $this->directory . ltrim( $path, '/' );
	}

	/**
	 * Retrieve the absolute path for the main plugin file.
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public function get_file() {
		return $this->file;
	}

	/**
	 * Set the path to the main plugin file.
	 *
	 * @since 1.0.0
	 *
	 * @param  string $file Absolute path to the main plugin file.
	 * @return $this
	 */
	public function set_file( $file ) {
		$this->file = $file;
		return $this;
	}

	/**
	 * Retrieve the plugin indentifier.
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public function get_slug() {
		return $this->directory;
	}

	/**
	 * Set the plugin identifier.
	 *
	 * @since 1.0.0
	 *
	 * @param  string $slug Plugin identifier.
	 * @return $this
	 */
	public function set_slug( $slug ) {
		$this->slug = $slug;
		return $this;
	}

	/**
	 * Retrieve the URL for a file in the plugin.
	 *
	 * @since 1.0.0
	 *
	 * @param  string $path Optional. Path relative to the plugin root.
	 * @return string
	 */
	public function get_url( $path = '' ) {
		return $this->url . ltrim( $path, '/' );
	}

	/**
	 * Set the URL for plugin directory root.
	 *
	 * @since 1.0.0
	 *
	 * @param  string $url URL to the root of the plugin directory.
	 * @return $this
	 */
	public function set_url( $url ) {
		$this->url = rtrim( $url, '/' ) . '/';
		return $this;
	}
}
