<?php 
/**
* @package MariusSerPlugin
*/


class MariusSerPluginDeactivate
{
	public static function deactivate(){
		flush_rewrite_rules();
	}
}