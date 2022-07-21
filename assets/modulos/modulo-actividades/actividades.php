<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-actividades/actividades.css'; ?>
</style>

<!--Grid-->

    
<?php if(is_page('home') || is_front_page()){ ?>
    <div class="container container-actividades-home mb-5">
        <h2 class="actividades-title main-title text-center">Actividades</h2>
        <div class="container container-actividades-home mb-5">
            <div class="parent">
                <?php
                $i = 1;
                $temp = $wp_query;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $post_per_page = 3; // -1 shows all posts
                $args = array(
                    'post_type' => 'actividades',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'paged' => $paged,
                    'posts_per_page' => $post_per_page
                );
                $wp_query = new WP_Query($args);
                if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                $field = get_fields(); 
                ?>  

                        <div class="square square<?php echo $i; ?>">
                            <div class="inside d-flex p-4 justify-content-end flex-column" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')">
                                <div class="fecha">
                                    <p><?php echo $field['fecha_actividad']; ?></p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="titulo"><?php echo get_the_title(); ?></h2>
                                    <a href="<?php echo get_the_permalink(); ?>">Ver más</a>
                                </div>
                            </div>
                        </div>

                    <?php 
                    $i++;
                    endwhile; ?>

                <?php else : ?>
                    <p class="text-center">Lo sentimos, no hay contenido para mostrar</p>
                <?php endif;
                wp_reset_query();
                $wp_query = $temp ?>
            </div>
        </div>
    </div>
    <?php }else if(is_page('actividades')){ ?>
        <section class="destacados">
            <div class="container">
            <h2 class="actividades-title main-title text-center">Destacados</h2>
            <div class="container-actividades"> 
                <div class="parent-actividades">
                    <?php
                    $i = 1;
                    $temp = $wp_query;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $post_per_page = 5; // -1 shows all posts
                    $args = array(
                        'post_type' => 'actividades',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'paged' => $paged,
                        'posts_per_page' => $post_per_page
                    );
                    $wp_query = new WP_Query($args);
                    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                    $field = get_fields(); 
                    ?>  

                            <div class="square square<?php echo $i; ?> <?php if($i > 2){ echo 'bottom-row'; } ?>">
                                <div class="inside d-flex p-4 justify-content-end flex-column" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')">
                                    <div class="fecha">
                                        <p><?php echo $field['fecha_actividad']; ?></p>
                                    </div>
                                    <div class="text-wrapper d-flex <?php if($i < 3){ echo 'justify-content-between';} ?> align-items-center">
                                        <h2 class="titulo"><?php echo get_the_title(); ?></h2>
                                        <a href="<?php echo get_the_permalink(); ?>">Ver más</a>
                                    </div>
                                </div>
                            </div>

                        <?php 
                        $i++;
                        endwhile; ?>

                    <?php else : ?>
                        <p class="text-center">Lo sentimos, no hay contenido para mostrar</p>
                    <?php endif;
                    wp_reset_query();
                    $wp_query = $temp ?>
                </div>
            </div>
        </div>
    </section>
    <section class="archivo">
        <div class="container">
            <h2 class="actividades-title main-title text-center">Anteriores</h2>
            <div class="container-actividades"> 
                <div class="parent-actividades parent-archivo">
                    <?php
                    $i = 1;
                    $temp = $wp_query;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $post_per_page = 8; // -1 shows all posts
                    $args = array(
                        'post_type' => 'actividades',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'paged' => $paged,
                        'posts_per_page' => $post_per_page
                    );
                    $wp_query = new WP_Query($args);
                    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                    $field = get_fields(); 
                    ?>  

                            <div class="square div<?php echo $i; ?> bottom-row">
                                <div class="inside d-flex p-4 justify-content-end flex-column" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')">
                                    <div class="fecha">
                                        <p><?php echo $field['fecha_actividad']; ?></p>
                                    </div>
                                    <div class="text-wrapper d-flex <?php if($i < 3){ echo 'justify-content-between';} ?> align-items-center">
                                        <h2 class="titulo"><?php echo get_the_title(); ?></h2>
                                        <a href="<?php echo get_the_permalink(); ?>">Ver más</a>
                                    </div>
                                </div>
                            </div>

                        <?php 
                        $i++;
                        endwhile; ?>

                    <?php else : ?>
                        <p class="text-center">Lo sentimos, no hay contenido para mostrar</p>
                    <?php endif;
                    wp_reset_query();
                    $wp_query = $temp ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php } ?>




        <!--</ol>-->