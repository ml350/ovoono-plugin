<?php
/**
* OvoOnoPlugin
*/

namespace OVOONOPLUGIN\Base;

class Hooks {
    //This function is used for getting instance of class
    public static function get_instance() {
        static $instance = null;

        if ( $instance == null ) {
            $instance = new self();
        }

        return $instance;
    }

    //This function is for registering all Hooks
    public static function registerHooks() {
        // example how to use hook
        //add_action( 'name_of_hook' ,array('\OVOONOPLUGIN\Base\filename', 'funciton_name'), 10,1 );
        
        // hide prices for guests in single product pace
        add_filter( 'woocommerce_get_price_html', array('\OVOONOPLUGIN\Base\OvoOnoActions', 'hide_prices_for_nonusers'), 10,1); 
        
        // change behave of add to cart button for guest users in single product page
        add_filter( 'woocommerce_product_single_add_to_cart_text', array( '\OVOONOPLUGIN\Base\OvoOnoActions', 'change_add_to_cart_button'), 10, 1); 

        // change behave of add to cart button for guest users in single product page
        add_filter( 'woocommerce_product_add_to_cart_text', array( '\OVOONOPLUGIN\Base\OvoOnoActions', 'change_add_to_cart_button'), 10, 1); 
 
    }
}