<?php  /*  slider home */


function noticias_register() {

    $labels = array(
        'name' => _x('noticias', 'post type general name'),
        'singular_name' => _x('noticias', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'noticias item'),
        'add_new_item' => __('Agregar nuevo noticias'),
        'edit_item' => __('Editar noticias'),
        'new_item' => __('Nuevo noticias'),
        'view_item' => __('Ver el noticias'),
        'search_items' => __('Buscar noticias'),
        'not_found' =>  __('No se encontro noticias'),
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
        'rewrite' => array('slug' => 'noticias', 'with_front' => FALSE)
      ); 

    register_post_type( 'noticias' , $args );
}

add_action('init', 'noticias_register');