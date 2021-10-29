<?php
function ewcmc_is_woocommerce_active() {
	$active         = true;
	$active_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );
	if ( ! in_array( 'woocommerce/woocommerce.php', $active_plugins ) ) {
		$active = false;
	}
	echo "active = $active";
	return $active;
}


