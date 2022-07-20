<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-actividades/actividades.css'; ?>
</style>
<?php $field = get_fields(); ?>  
<!--Grid-->

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
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <div class="div<?php echo $i; ?>">
                    <div class="inside" style="background-image:url('<?php echo get_the_thumbnail(); ?>')">
                        <p class="fecha"><?php echo $field[ 'fecha_actividad']; ?></p>
                        <h2 class="titulo"><?php echo get_the_title_(); ?></h2>
                        <a href="<?php echo get_the_permalink(); ?>">Ver más</a>
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

        <!--</ol>-->