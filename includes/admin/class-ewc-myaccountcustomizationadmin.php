<?php
/**
 * File for handling the admin site functionality.
 *
 * @package ewcmc-admin
 */
/**
 * EWC_MyaccountCustomizationAdmin
 */
class EWC_MyaccountCustomizationAdmin {

	/**
	 * __construct
	 * adding the admin side menu
	 *
	 * @return void
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'ewcmc_settings_page_init' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'ewcmc_admin_script_and_css' ) );
	}

	/**
	 * Ewcmc_settings_page_init
	 *  callback functios for admin_menu hooks to add the setting page
	 *
	 * @return void
	 */
	public function ewcmc_settings_page_init() {
		add_submenu_page( 'woocommerce', 'Easy My Account', 'Easy My Account', 'manage_options', 'ewcmc-page', array( $this, 'ewcmc_setting_page_cb' ) );
	}

	/**
	 * Ewcmc_admin_script_and_css
	 *
	 * @return void
	 */
	public function ewcmc_admin_script_and_css() {
		// new admin css and js.
		wp_register_style( 'ewcmc-admin-css', EWCMC_PLUGIN_URL . 'assets/admin/css/ewcmc-admin.css' );
		wp_register_script( 'ewcmc-admin-js', EWCMC_PLUGIN_URL . 'assets/admin/js/ewcmc-admin.js', array( 'jquery' ) );
	}

	/**
	 * Ewcmc_setting_page_cb
	 * adding the setting for woocommerce my account page customization
	 *
	 * @return void
	 */
	public function ewcmc_setting_page_cb() {
		include 'page/ewcmc-page.php';
	}


}
$ewcmc_admin = new EWC_MyaccountCustomizationAdmin();
