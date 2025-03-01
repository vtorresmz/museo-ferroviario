<?php
/**
 * Template Name: home muse ferroviario
 * 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package museo-ferroviario
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php include get_template_directory() . '/assets/modulos/modulo-video-slider/video-slider.php';?>
		<?php include get_template_directory() . '/assets/modulos/modulo-horarioyprecio/horarioyprecio.php';?>

	<div class="container"><?php include get_template_directory() . '/assets/modulos/modulo-noticias/custom-loop-noticias.php';?></div>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
