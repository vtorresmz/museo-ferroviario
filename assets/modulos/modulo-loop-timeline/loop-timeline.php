<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-loop-timeline/loop-timeline.css'; ?>
</style>

<!--Slider-->

<div id="carrusel-reconocimiento" class="container">
    <div class="carusel-destacados slider-fluid row">

        <?php
        $i = 0;
        $e = 0;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 8; // -1 shows all posts
        $args = array(
            'post_type' => 'loop_timeline',
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            
                <div class="tarjetas-hotel slidel col-3">
                <a class="" href="#">
                    <figure class="background-white">
                        <div class="bg-fondo-img shadow rounded" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo get_the_excerpt(); ?>');">
                    <div class="blackbox rounded"><p class="v-mas">Ver más</p></div></div>
                        
                        <div class="linea-tiempo"></div>
                        <figcaption class="p-3">
                            <div class="rounded-circle"></div>
                            <h4><?php the_field('linea_ano'); ?></h4>
                            <h5><?php echo get_the_title(); ?></h5>
                            <p class="bajada"><?php echo get_the_excerpt(); ?></p>
                           
                        </caption>
                    </figure>
                    </a>
                </div>

            <?php endwhile; ?>



        <?php else : ?>
            <p class="text-center">Oops!, Lo sentimos, no hay contenido  que mostrar</p>
        <?php endif;
        wp_reset_query();
        $wp_query = $temp ?>

        <!--</ol>-->

    </div>
</div>