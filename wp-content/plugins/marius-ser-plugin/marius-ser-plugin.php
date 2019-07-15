<?php 
/**
* @package MariusSerPlugin
*/
/*
Plugin Name: Marius Ser Plugin
Plugin URI: http://mariusser.com/plugin
Description: This is my firs attempt on writing a custom Plugin for homework in which I am using gravity forms.
Version: 1.0.0
Author: Marius Serys
Author URI: http://mariusser.com
License: GPLv2 or later
Text Domain: marius-ser-plugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
*/

// if ( ! defined( 'ABSPATH' ) ){
// 	die;
// }

defined( 'ABSPATH' ) or die( 'You can\t access this file!');

// if ( ! function_exists( 'add_action' ) ) {
// 	echo 'You can\t access this file!';
// 	exit;
// }

class MariusSerPlugin
{	
	function __construct(){
		add_action('init', array($this, 'custom_post_type'));
	}

	function register(){
		add_action( 'admin_enqueue_scripts', array($this, 'enqueue'));

	}
	
	protected function create_post_type(){
		add_action( 'init', array( $this, 'custom_post_type'));
	}

	function custom_post_type(){
		register_post_type( 'book', ['public' => true, 'label' => 'Books']);
	}

	static function enqueue(){
		//enque all our scripts
		wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__));
		wp_enqueue_script('mypluginscript', plugins_url('/assets/script.js', __FILE__));
	}

	function activate(){
		require_once plugin_dir_path(__FILE__) . 'include/marius-ser-plugin-activate.php';
		MariusSerPluginActivate::activate();
	}
}


if( class_exists( 'MariusSerPlugin' ) ){
	$mariusSerPlugin = new MariusSerPlugin();
	$mariusSerPlugin->register();
}


//activation

register_activation_hook( __FILE__, array( $mariusSerPlugin, 'activate'));

//deactivation
require_once plugin_dir_path(__FILE__) . 'include/marius-ser-plugin-deactivate.php';
register_deactivation_hook( __FILE__, array( 'MariusSerPluginDeactivate', 'deactivate'));
//uninstall

wp_register_style ( 'mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__) );
wp_enqueue_style('mypluginstyle');