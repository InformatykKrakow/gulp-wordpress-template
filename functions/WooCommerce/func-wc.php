<?php
/**
 * WooCommerce functions
 *
 * @author   Informatyk Kraków
 * @version  1.0.0
 * @package  <Package>
 */

function setup_woocommerce_support()
{
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'setup_woocommerce_support');