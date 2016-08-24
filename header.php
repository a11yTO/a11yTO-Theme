<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package a11yTO-Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> 

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'a11yto' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding clear">

				<img class="inject-me logo" src="<?php echo get_template_directory_uri(); ?>/graphics/a11yto-logo.svg" alt="Logo: An illustration of a silhouette of the Toronto skyline centred in a blue and red border." />

				<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $description; /* WPCS: xss ok. */ ?></a></p>
				<?php
				endif; ?>

			</a>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'a11yto' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<section class="event">

			<p class="counter">Next meetup / 3 Days: 30 Hours: 3 Mins</p>

			<?php $query = new WP_Query( array( 'category_name' => 'meetup,camp', 'posts_per_page' => 1 ) ); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

			<div class="post">
				<h2 class="event-title"><?php the_title(); ?></h2>
				<div class="entry">
					<?php the_content(); ?>
				</div><!-- .entry -->
			</div><!-- .post -->
			<p><button class="more">Join us</button></p>

			<?php endwhile; 
			wp_reset_postdata();
			else : ?>

			<div class="post">
				<h2 class="event-title">Send Help</h2>
				<div class="entry">
					<p>Something is wrong.
				</div><!-- .entry -->
			</div><!-- .post -->
			<?php endif; ?>

		</section><!-- .event -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
