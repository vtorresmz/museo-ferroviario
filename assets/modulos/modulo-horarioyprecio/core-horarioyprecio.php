<?php  /*  slider home */


function horarioyprecio_register() {

    $labels = array(
        'name' => _x('horarioyprecio', 'post type general name'),
        'singular_name' => _x('horarioyprecio', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'horarioyprecio item'),
        'add_new_item' => __('Agregar nuevo horarioyprecio'),
        'edit_item' => __('Editar horarioyprecio'),
        'new_item' => __('Nuevo horarioyprecio'),
        'view_item' => __('Ver el horarioyprecio'),
        'search_items' => __('Buscar Slider'),
        'not_found' =>  __('No se encontro horarioyprecio'),
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
        'menu_icon'  => 'dashicons-leftright',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'extract'),
        'rewrite' => array('slug' => 'horarioyprecio', 'with_front' => FALSE)
      ); 

    register_post_type( 'horarioyprecio' , $args );
}

add_action('init', 'horarioyprecio_register');