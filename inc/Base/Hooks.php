<?php
/**
* OvoOno Plugin
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
 
    }
}