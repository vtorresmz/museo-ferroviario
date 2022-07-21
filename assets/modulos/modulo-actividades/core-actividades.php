<?php  /*  slider home */


function actividades_register() {

    $labels = array(
        'name' => _x('Actividades', 'post type general name'),
        'singular_name' => _x('Actividades', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'actividades item'),
        'add_new_item' => __('Agregar nuevo Actividades'),
        'edit_item' => __('Editar Actividades'),
        'new_item' => __('Nuevo Actividades'),
        'view_item' => __('Ver el Actividades'),
        'search_items' => __('Buscar Actividades'),
        'not_found' =>  __('No se encontro actividades'),
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
        'supports' => array('title', 'excerpt', 'thumbnail','editor'),
        'rewrite' => array('slug' => 'actividades', 'with_front' => FALSE)
      ); 

    register_post_type( 'actividades' , $args );
}

add_action('init', 'actividades_register');


/* ACF Actividades */
			if( function_exists('acf_add_local_field_group') ):

                acf_add_local_field_group(array(
                    'key' => 'group_62d60827b28d6',
                    'title' => 'Actividades',
                    'fields' => array(
                        array(
                            'key' => 'field_62d6082ce9803',
                            'label' => 'Fecha Actividad',
                            'name' => 'fecha_actividad',
                            'type' => 'date_picker',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'display_format' => 'd/m/Y',
                            'return_format' => 'd/m/Y',
                            'first_day' => 1,
                        ),
                    ),
                    'location' => array(
                        array(
                            array(
                                'param' => 'post_type',
                                'operator' => '==',
                                'value' => 'actividades',
                            ),
                        ),
                    ),
                    'menu_order' => 0,
                    'position' => 'normal',
                    'style' => 'default',
                    'label_placement' => 'top',
                    'instruction_placement' => 'label',
                    'hide_on_screen' => '',
                    'active' => true,
                    'description' => '',
                    'show_in_rest' => 0,
                ));
                
                endif;		
?>