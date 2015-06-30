<?php
/*
Plugin Name: WooCommerce POS Test Plugin
*/

// auto login
if ( ! function_exists( 'is_user_logged_in' ) ) {
  function is_user_logged_in() {
    $user = get_option('woocommerce_pos_test_logged_in_user');
    if($user){
      return true;
    } else {
      return false;
    }
  }
}