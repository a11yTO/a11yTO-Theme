<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package a11yto
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
        
        <?php the_title( '<h2 class="h2">', '</h2>' ); ?>

	</header><!-- .entry-header -->

     <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> 
    
	<div class="entry-content">

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'a11yto' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	

</article><!-- #post-## -->
