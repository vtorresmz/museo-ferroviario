<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-botanico/botanico.css'; ?>
</style>

<!--Patrimonio Botánico-->

<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2><?php the_field('titulo_botanico'); ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="row justify-content-around">
        <?php
        $i = 0;
        $e = 0;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 6; // -1 shows all posts
        $args = array(
            'post_type' => 'botanico',
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                    <div class="col-12 col-md-5 p-1 mb-4 shadow rounded-3">
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <img class="img-fluid m-1" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
                            </div>
                            <div class="col-12 col-md-7 cntr">
                                <h3><?php echo get_the_title(); ?></h3>
                                <p><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </div> <!-- Cierre de row -->
                    </div>
            <?php endwhile; ?>
        <?php else : ?>
        <?php endif;
        wp_reset_query();
        $wp_query = $temp ?>

        <!--</ol>-->
            </div> <!-- Cierre de row -->
        </div>
    </div> <!-- Cierre de row -->
</div> <!-- Cierre de container fluid -->