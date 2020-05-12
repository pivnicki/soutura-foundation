<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Soutoura_Foundation
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4">
					<?php if ( !function_exists('dynamic_sidebar') ||
			 			!dynamic_sidebar('Footer Widget 1') ) : ?>
					<?php endif; ?>
				</div>
				<div class="col-sm-12 col-md-4">
					<?php if ( !function_exists('dynamic_sidebar') ||
			 			!dynamic_sidebar('Footer Widget 2') ) : ?>
					<?php endif; ?>
				</div>
				<div class="col-sm-12 col-md-4">
					<?php if ( !function_exists('dynamic_sidebar') ||
			 			!dynamic_sidebar('Footer Widget 3') ) : ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="site-info"> 
			
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'soutoura-foundation' ), 'soutoura-foundation', '<a href="http://easyit.rs/">EasyIT</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
