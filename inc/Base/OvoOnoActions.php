<?php
/**
 * OvoOnoPlugin
 */

namespace OVOONOPLUGIN\Base;

class OvoOnoActions {
    //This function is used for getting instance of class
    public static function get_instance() {
        static $instance = null;

        if ( $instance == null ) {
            $instance = new self();
        }

        return $instance;
    } 

    // Hide prices for non logged users
    public static function hide_prices_for_nonusers($wc_price){
        if ( is_admin() || is_user_logged_in() == true ) return $wc_price; 
            return "Login za prikaz cijene";
    }

    // switch 'add to cart' to 'login' button
    public static function change_add_to_cart_button(){
        if ( is_admin() || is_user_logged_in() !== true ) return __( 'Login', 'text-domain' ); 
    }

    // function for debugging purpose, log.txt location - 'ovoono-plugin/inc/Base' 
    public static function log_value($value){
        file_put_contents(__DIR__.'../../log.txt', print_r($value, true),FILE_APPEND);
        return;
    }  
}