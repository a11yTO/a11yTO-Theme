<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package a11yTO-Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="entry">
		<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'a11yto' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'a11yto' ),
					'after'  => '</div>',
				) );
			?>
			<?php if( get_post_meta($post->ID, 'event-picture', true) ) { ?>
 				<p><img src="<?php echo get_post_meta($post->ID, 'event-picture', true); ?>" alt="<?php echo get_post_meta($post->ID, 'event-picture-alt-text', true); ?>"/>
			<?php } ?>
		</div><!-- .entry-content -->
	</section><!--entry -->
</article><!-- #post-## -->
