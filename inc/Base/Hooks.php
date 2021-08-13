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
        add_filter( 'woocommerce_get_price_html', array('\OVOONOPLUGIN\Base\OvoOnoActions', 'hide_prices_for_nonusers'), 10,1);
 
    }
}