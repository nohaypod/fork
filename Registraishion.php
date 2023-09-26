<?php
/*
Plugin Name: Registraishon
Plugin URL: htttps//edgardo.arquitecturainteligente.com
Description: Super plugin de registro locoshon
Version: 0.0.1
*/

function Activarr(){
    global $wpdb;
    $tabla_uno = $wpdb->prefix . 
    'mi_table';

    $sql ="CREATE TABLE IF NOT EXISTS 
        $tabla_uno(
        `id` INT NOT NULL , `dato2` VARCHAR(10) NOT NULL, PRIMARY KEY (id)
        ); ";
    
    $wpdb->query($sql);

}


function Desactivarr(){
    flush_rewrite_rules();
}


register_activation_hook(__FILE__,'Activarr');
register_deactivation_hook(__FILE__,'Desactivarr');
add_action('admin_menu', 'CrearMenu1');

function CrearMenu1(){
    add_menu_page(
        'So what??', // Título página
        'Nave de huevo', // Título menu
        'manage_options', // Capability
        plugin_dir_path(__FILE__).'admin/lista_encuestas.php', // slug
        null, // Funcion de contenido
        plugin_dir_url(__FILE__).'admin/img/icon.png',
        '6'
    );
   //add_submenu_page(
   //    "sp_menu", // parent slug
   //    "Ajustes", // Título Pagina
   //    "Ajustes", // Titulo manu
   //    "manage_options",
   //    "sp_menu_ajustes",
   //    "Submenu1"

   //);
}

function MostrarContenido1(){
    echo "<h1>Contenido Locoshon</h1>";
}
