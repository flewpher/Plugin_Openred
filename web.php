<?php
/*
Plugin Name: Openred_plugin
Description: Plugin para redireccionar a un contenido específico"
*/

function redireccionar(){
    /*$uri = $_SERVER['REQUEST_URI'];*/
    $uri = esc_url_raw(add_query_arg(array()));
    $contenido = plugin_dir_path(__FILE__) . 'index.php';

    if (strpos($uri, '/openred') == true){
        include_once($contenido);
        exit();
    }

}
add_action('init', 'redireccionar');    