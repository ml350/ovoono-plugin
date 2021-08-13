<?php
/**
 * OvoOno Plugin
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

    // function for debugging purpose, log.txt location - 'ovoono-plugin/inc/Base' 
    public static function log_value($value){
        file_put_contents(__DIR__.'/log.txt', print_r($value, true),FILE_APPEND);
        return;
    }  
}