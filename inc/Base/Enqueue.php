<?php 
/**
 * @package  OvoOnoPlugin
 */
namespace OVOONOPLUGIN\Base;

use \OVOONOPLUGIN\Base\BaseController;

/**
* 
*/
class Enqueue extends BaseController
{
	public function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
	}
	
	function enqueue() {
		// enqueue all our scripts
		wp_enqueue_style( 'ovoonoplugincss', $this->plugin_url . 'assets/ovoonoplugincss.css' );
		wp_enqueue_script( 'ovoonopluginjs', $this->plugin_url . 'assets/ovoonopluginjs.js' );
	}
}