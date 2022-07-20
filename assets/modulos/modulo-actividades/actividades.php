<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-actividades/actividades.css'; ?>
</style>

<!--Grid-->
<div class="container mb-5">
    
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

                    <div class="block block<?php echo $i; ?>">
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

        <!--</ol>-->