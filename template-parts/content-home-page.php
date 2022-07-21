<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package museo-ferroviario
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('paginas-interior-museo'); ?>>
<header class="entry-header" style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');">

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 


</header><!-- .entry-header -->



<div class="entry-content container">
<?php
the_content();

wp_link_pages(
	array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'museo' ),
		'after'  => '</div>',
	)
);
?>
</div><!-- .entry-content -->

<?php if ( get_edit_post_link() ) : ?>
<footer class="entry-footer">
	<?php
	edit_post_link(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Edit <span class="screen-reader-text">%s</span>', 'museo' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			wp_kses_post( get_the_title() )
		),
		'<span class="edit-link">',
		'</span>'
	);
	?>
</footer><!-- .entry-footer -->
<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
