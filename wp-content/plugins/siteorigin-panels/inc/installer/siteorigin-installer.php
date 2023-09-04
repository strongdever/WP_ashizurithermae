<?php
/*
Plugin Name: SiteOrigin Installer
Plugin URI: https://siteorigin.com/installer/
Description: This plugin installs all the SiteOrigin themes and plugins you need to get started with your new site.
Author: SiteOrigin
Author URI: https://siteorigin.com
Version: 1.0.0
License: GNU General Public License v3.0
License URI: http://www.opensource.org/licenses/gpl-license.php
*/

if ( ! defined( 'SITEORIGIN_INSTALLER_VERSION' ) ) {
	define( 'SITEORIGIN_INSTALLER_VERSION', '1.0.0' );
	define( 'SITEORIGIN_INSTALLER_DIR', plugin_dir_path( __FILE__ ) );
	define( 'SITEORIGIN_INSTALLER_URL', plugin_dir_url( __FILE__ ) );

	// Setup the Github updater
	require_once SITEORIGIN_INSTALLER_DIR . '/inc/github-plugin-updater.php';
	new SiteOrigin_Installer_GitHub_Updater( __FILE__ );
}

if ( ! class_exists( 'SiteOrigin_Installer' ) ) {
	class SiteOrigin_Installer {
		public function __construct() {
			add_filter( 'siteorigin_premium_affiliate_id', array( $this, 'affiliate_id' ) );

			if ( apply_filters( 'siteorigin_add_installer', true ) && is_admin() ) {
				require_once __DIR__ . '/inc/admin.php';
			}
		}

		public static function single() {
			static $single;

			return empty( $single ) ? $single = new self() : $single;
		}

		/**
		 * Get the Affiliate ID from the database.
		 *
		 * @return mixed|void
		 */
		public function affiliate_id( $id ) {
			if ( get_option( 'siteorigin_premium_affiliate_id' ) ) {
				$id = get_option( 'siteorigin_premium_affiliate_id' );
			}

			return $id;
		}
	}
}
SiteOrigin_Installer::single();
