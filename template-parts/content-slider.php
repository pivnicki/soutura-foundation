<?php
/**
 * Template part for displaying slider in page-home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Soutoura_Foundation
 */
?>

<?php
$args = array(
	'post_type' => 'post',
	'category_name' => 'slideshow'
);
$the_query = new WP_Query ( $args ); 
?>

<div id="ExampleCarouselID" class="carousel slide" data-ride="carousel" data-interval="17000">
	<ol class="carousel-indicators">
		<!-- Start Carousel Indicator Loop -->
		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li data-target="#ExampleCarouselID" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>"></li>
		<?php endwhile; endif; ?>
	</ol>
<?php rewind_posts(); ?>

<div class="carousel-inner"> 
	    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	          $thumbnail_id   = get_post_thumbnail_id();
	          $thumbnail_url  = wp_get_attachment_image_src( $thumbnail_id, 'homepage-thumb ', true );
	          $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attatchment_image_alt',array('class' => 'slider'), true );
	    ?>
 <div class="carousel-item <?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>">
            <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <?php the_post_thumbnail('full',array('class' => 'slider')); ?>
            </a>
            <?php endif; ?>

            <div class="container">
              <div class="carousel-caption text-left">
                <h1><?php the_title(); ?></h1>
                <p class="d-none d-sm-block"><?php custom_excerpt_length(20); ?></p>
              </div>
            </div>
    	   </div><!-- /.carousel-item -->
        <!-- end second loop -->
	<?php endwhile;	endif; ?>
    </div><!-- /.carousel-inner -->
</div><!-- /.carousel-slide -->        