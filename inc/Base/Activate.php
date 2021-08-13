<?php
/**
 * @package  OvoOnoPlugin
 */
namespace OVOONOPLUGIN\Base;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}