<?php  /*  slider home */


function botanico_register() {

    $labels = array(
        'name' => _x('Botanico', 'post type general name'),
        'singular_name' => _x('Botanico', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'Botanico item'),
        'add_new_item' => __('Agregar nuevo Botanico'),
        'edit_item' => __('Editar Botanico'),
        'new_item' => __('Nuevo Botanico'),
        'view_item' => __('Ver el Botanico'),
        'search_items' => __('Buscar Botanico'),
        'not_found' =>  __('No se encontro Botanico'),
        'not_found_in_trash' => __('No se encontro en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-games',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'botanico', 'with_front' => FALSE)
      ); 

    register_post_type( 'botanico' , $args );
}

add_action('init', 'botanico_register');