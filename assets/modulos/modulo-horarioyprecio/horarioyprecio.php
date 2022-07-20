<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-horarioyprecio/horarioyprecio.css';?>
    
</style>

<!--videoslider-->



        <?php
        $i = 0;
        $e = 0;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 1; // -1 shows all posts
        $args = array(
            'post_type' => 'horarioyprecio',
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 class="titulo"><?php the_field('horarioyprecios'); ?></h3>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-6 mx-auto col-10 card01 text-center precio-entrada-box shadow mt-3">
            <div class="row">
                <div class="col-md-6 text-center">
                    <p><?php the_field('martes-jueves'); ?></p>
                    <p class="texto01"><?php the_field('horario01'); ?></p>
                </div>
                <div class="col-md-6 text-center">
                    <p><?php the_field('sabado-domingos'); ?></p>
                    <p class="texto01"><?php the_field('horario01'); ?></p>
                </div>
   
            </div>
        </div>
        <div class="col-md-4 mx-auto col-10 card02 text-center precio-entrada-box shadow mt-3">
            <p><?php the_field('entrada'); ?></p>
            <p class="texto02"><?php the_field('precio'); ?></p>
        </div>
    </div>
</div>
        


            <?php endwhile; ?>


        <?php else : ?>
            <p class="text-center">Oops!, Lo sentimos, no hay contenido que mostrar</p>
        <?php endif;
        wp_reset_query();
        $wp_query = $temp ?>

        <!--</ol>-->

    </div>
</div>