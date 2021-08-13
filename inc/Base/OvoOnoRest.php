<?php
/**
 * OvoOnoPlugin
 */

namespace OVOONOPLUGIN\Base;

class OvoOnoRest {
    //This function is used for getting instance of class
    public static function get_instance() 
    {
        static $instance = null;

        if ( $instance == null ) {
            $instance = new self();
        }

        return $instance;
    }

    //create new rest endpoints

    // //save camera to table
    // public static function camera_save_to_table() 
    // {    
    //     \register_rest_route('vq/v1', 'camera', [
    //         "methods" => "POST",
    //         "callback" => array(self::get_instance(),'vq_camera_id_save'),
    //         'permission_callback' => '__return_true',
    //     ]);
    // }
 
}