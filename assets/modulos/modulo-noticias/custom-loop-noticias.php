<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-noticias/noticias.css'; ?>
</style>

<!--Custom loop Noticias-->

<div id="carrusel-reconocimiento" class="container">
  <div class="row d-flex justify-content-evenly">
  <h2 class="titulo2">Noticias</h2>

        <?php 
        $i = 0;
        $e = 0;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 3; // -1 shows all posts
        $args = array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
   <div class="card body-card col-12 col-md-3">
  
  <figure class="card-img-top">
  <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
  
  </figure>
   
  <div class="card-body  ">
    <h5 class="card-title"><?php echo get_the_title() ?></h5>
    <p class="card-text"> <?php echo get_the_excerpt(); ?> </p>
   <button class="btn b-btn "><a href="<?php the_permalink(); ?>" class="">Ver más</a></button> 
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
<button class="mt-5 d-block btn-ext col-12 col-md-2 mx-auto"><a class="btn-int" href="/museo/noticias">ver todas las noticias</a></button>
</div>
