<?php
/*
Plugin Name: Formulario reservas 4 postes
Description: Formulario de reservas para hotel de 4 postes
Author: Hazmeweb
Version: 1.0
*/

function f4p_desplegar_formulario(){
  ob_start();
  include( plugin_dir_path( __FILE__ ) . 'f4p_form_reservas.php');
  $output = ob_get_clean();
  return $output;
}

wp_register_script('jqueryUI', plugins_url('js/jquery-ui/jquery-ui.min.js', __FILE__), array('jquery'),null, true);
wp_register_script('jqueryValidation', plugins_url('js/jquery-validation/dist/jquery.validate.min.js', __FILE__), array('jquery'),null,false);
wp_register_style( 'f4pstructure', plugins_url( 'js/jquery-ui/jquery-ui.min.css', __FILE__) );
wp_register_style( 'f4ptheme', plugins_url( 'js/jquery-ui/jquery-ui.theme.min.css', __FILE__) );
wp_enqueue_style('f4pstructure');
wp_enqueue_script('jqueryUI');
wp_enqueue_style('f4ptheme');
wp_enqueue_script('jqueryValidation');
add_shortcode( 'form4postes', 'f4p_desplegar_formulario' );
 ?>
