<?php
/**
 * Debugging tools
 *
 * @author   Informatyk Kraków
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Pretty printing debugging tool
 */
function pr( $var ) {
	print '<pre>';
	print_r( $var );
	print '</pre>';
}
