<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Soutoura_Foundation
 */

?>
<div class="container">
	<div class="row">
	<div class="col-sm-12 col-md-8">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header discover-soutura">
		<?php the_title( '<h1 class="entry-title text-center text-white p-5 iza height-500 border-radious-left-8 border-radious-right-8">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php soutoura_foundation_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'soutoura-foundation' ),
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
						__( 'Edit <span class="screen-reader-text">%s</span>', 'soutoura-foundation' ),
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
</div>
<div class="col-sm-12 col-md-4">
<?php
get_sidebar();
?>
</div>	
</div>
</div>