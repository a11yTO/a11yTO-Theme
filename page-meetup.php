<?php
/**
 * Template Name: Meet Page Template
 *
 * @package a11yTO-Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="secondary" class="secondary-content-area">

		<?php
		$args = array(
			'nopaging'       => false,
			'category_name'  => 'meetup',
		);
		$custom_query = new WP_Query($args);
		if ($custom_query->have_posts()) :
			while($custom_query->have_posts()) :
				$custom_query->the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'category-meetup' );
			endwhile; 

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

		endif; 
		wp_reset_postdata(); ?>

	</div><!-- #primary -->

<?php
get_footer();
