<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-noticias/noticias.css'; ?>
</style>

<!--Slider-->

<div id="carrusel-reconocimiento" class="row d-flex justify-content-evenly">
  <h2 class="text-center">Noticias</h2>

        <?php 
        $i = 0;
        $e = 0;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 3; // -1 shows all posts
        $args = array(
            'post_type' => 'noticias',
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

   <div class="card body-card" style="width: 18rem;">
  
  <figure class="card-img-top">
  <?php $img_carta = get_field( 'img_carta' ); ?>
<?php if ( $img_carta ) : ?>
	<img src="<?php echo esc_url( $img_carta['url'] ); ?>" alt="<?php echo esc_attr( $img_carta['alt'] ); ?>" />
<?php endif; ?>
  </figure>
   
  <div class="card-body  ">
    <h5 class="card-title"><?php the_field( 'titulo_carta' ); ?></h5>
    <p class="card-text"> <?php echo get_the_excerpt(); ?> </p>
   <button class="btn b-btn "><a href="#" class="">Ver más</a></button> 
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