<?php

/*
Plugin Name:  cai
Version: 1.0
Description: Incrémentation automatique de l'année pour le copyright.
Author: Alexandre Alves
Author URI: http://alexandrealves.fr
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: cai
*/

add_shortcode( 'current_year', 'cai_year' );
function cai_init(){
 function cai_year() {
 return getdate()['year'];
 }
}
add_action('init', 'cai_init');

?>