<?php
/**
 * Plugin Name: WAX disable woocommerce admin notices
 * Plugin URI: https://www.webaxones.com
 * Description: Disable WooCommerce Admin Notices for connecting store to WooCommerce.com to receive extensions updates and support
 * Author: Webaxones
 * Author URI: https://www.webaxones.com
 * Version: 1.0
 */

// don't load directly.
if ( ! defined( 'ABSPATH' ) ) :
	die( '-1' );
endif;

/**
 * Disable WooCommerce Admin Notices for connecting store to WooCommerce.com to receive extensions updates and support
 */

add_filter( 'woocommerce_helper_suppress_admin_notices', '__return_true' );
