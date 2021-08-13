<?php
/**
 * @package  OvoOnoPlugin
 */
namespace OVOONOPLUGIN\Base;

class Deactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}