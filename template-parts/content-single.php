<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package museo-ferroviario
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('paginas-interior-museo'); ?>>
<header class="entry-header d-flex justify-content-center align-items-center flex-column" style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');">

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 

<div class="entry-meta">
				<?php
				museo_ferroviario_posted_on();
				museo_ferroviario_posted_by();
				?>
			</div><!-- .entry-meta -->
</header><!-- .entry-header -->

	

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'museo-ferroviario' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'museo-ferroviario' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php museo_ferroviario_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
