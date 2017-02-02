<?php
/*
  Plugin Name: Continue Shopping on Re-order for WooCommercce
  Plugin URI: http://gulftobayweb.com
  Description: This plugin adds a "Continue Shopping" button to the cart screen when the customer executes a reorder.
  Version: 1.0.2
  Author: Torsten Dreier / Gulf To Bay Web
  Author URI: http://gulftobayweb.com
  Text Domain: continue-shopping
*/


add_action( 'woocommerce_before_cart_table', 'woo_add_continue_shopping_button_to_cart' );

function woo_add_continue_shopping_button_to_cart() {
 $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
 
 echo '<div class="woocommerce-message">';
 echo 'Would you like to add more products? <a href="'.$shop_page_url.'" class="button" style="color:white">Continue Shopping</a>';
 echo '</div>';
}
?>