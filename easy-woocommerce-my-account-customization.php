<?php
/**
 * Plugin Name: Easy WooCommerce My Account Customization
 * Plugin URI: #
 * Description: manage the woocommerce my account dashboard tabs.
 * Author: vividwebsolutions
 * Author URI: https://vividwebsolutions.in/
 * Version: 1.0
 * *
 * Copyright 2019 WooCommerce
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     Easy WooCommerce My Account Customization
 * @author      vividwebsolutions.
 * @since       1.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'EWCMC_PLUGIN_DIR', dirname( __FILE__ ) . '/' );
define( 'EWCMC_PLUGIN_INC_DIR', dirname( __FILE__ ) . '/custom/inc/' );
define( 'EWCMC_PLUGIN_URL', plugins_url( '', __FILE__ ) . '/' );
define( 'EWCMC_TEMPLATE_DIR', plugin_dir_path( __FILE__ ) . 'custom/templates/' );

/**
 * Required functions
 */
if ( ! function_exists( 'ewcmc_is_woocommerce_active' ) ) {
	require_once dirname( __FILE__ ) . '/includes/ewcmc-functions.php';
}
/**
 * Check if WooCommerce is active and at the required minimum version, and if it isn't, disable Subscriptions.
 *
 * @since 1.0
 */
if ( ! ewcmc_is_woocommerce_active() ) {
	add_action( 'admin_notices', 'EWC_MyaccountCustomization::woocommerce_inactive_notice' );
	return;
}


/**
 * EWC_MyaccountCustomization
 */
class EWC_MyaccountCustomization {

	public static function setup() {
		add_action( 'init', 'EWC_MyaccountCustomization::ewcmc_custom_setup', -1 );
		if ( is_admin() ) {
			require_once 'includes/admin/class-ewc-myaccountcustomizationadmin.php';
		}
	}
	/**
	 * Ewcmc_custom_setup
	 *
	 * @return void
	 */
	public function ewcmc_custom_setup() {

	}

	/**
	 * Woocommerce_inactive_notice
	 *
	 * @return void
	 */
	public static function woocommerce_inactive_notice() {
		$install_url          = wp_nonce_url(
			add_query_arg(
				array(
					'action' => 'install-plugin',
					'plugin' => 'woocommerce',
				),
				admin_url( 'update.php' )
			),
			'install-plugin_woocommerce'
		);
		$admin_notice_content = sprintf( esc_html__( 'Easy WooCommerce My Account Customizarions is inactive. The WooCommerce plugin must be active for Easy WooCommerce My Account Customization to work. Please install & activate WooCommerce &raquo;', 'ewcmc-account' ), '<strong>', '</strong>', '<a href="http://wordpress.org/extend/plugins/woocommerce/">', '</a>', '<a href="' . esc_url( $install_url ) . '">', '</a>' );
		$class                = 'notice notice-error';

		printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $admin_notice_content ) );
	}
}

// new EWC_MyaccountCustomization();



function easy_wc_my_account_loaded_cb() {
	if ( ewcmc_is_woocommerce_active() ) {
		EWC_MyaccountCustomization::setup();
	} else {
		deactivate_plugins( 'easy-woocommerce-my-account-customization/easy-woocommerce-my-account-customization.php' );
	}
}


/**
 * Initialise the plugin
 */
add_action( 'plugins_loaded', 'easy_wc_my_account_loaded_cb' );


