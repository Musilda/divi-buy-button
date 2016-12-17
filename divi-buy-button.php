<?php
/**
 * @package   Divi Buy Button
 * @author    Vladislav Musílek
 * @license   GPL-2.0+
 * @link      
 * @copyright 2016 Toret
 *
 * @wordpress-plugin
 * Plugin Name:       Divi Buy Button
 * Plugin URI:        
 * Description:       Add to cart for Divi product archive
 * Version:           1.0
 * Author:            Vladislav Musílek
 * Author URI:        http://toret.cz
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function toret_add_cart_button () {
    add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action( 'after_setup_theme', 'toret_add_cart_button' );
