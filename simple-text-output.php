<?php
/*
 * Plugin Name:			Simple Text Output
 * Plugin URI:			https://github.com/hrttn/simple_text_ouput
 * Description:			Simple Text Output displays a text on your front-end with the shortcode [simple_text_output]
 * Version:				2017-09-25-00
 * Author:				Hugo Rettien
 * Author URI:			https://www.wpelk.com
 * Text Domain:			simple-text-output-locale
 * License:				GPL-3.0+
 * License URI:			http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path:			/languages
 */
 
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/class-simple-text-output.php';
 
function run_simple_text_output() {
 
	$sto = new Simple_Text_Output();
	$sto->run();
 
}
 
run_simple_text_output();