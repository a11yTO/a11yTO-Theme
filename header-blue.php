<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package a11yto
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    
    <!-- ******************* The Navbar Area ******************* -->
    <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
	
        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'a11yto' ); ?></a>

        <nav class="navbar navbar-dark bg-inverse blue site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                            

               


                            <div class="navbar-header">

                                <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->

                                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
    					&#9776;
  				</button>

                                 <!-- Your site title as branding in the menu -->
	                                
		                                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php echo  get_template_directory_uri() . '/images/logo-white.png'?>" alt=""/>
		                                </a>
                                
                                
                                
                                
	                                <!-- end custom logo -->

                            </div>

                            <!-- The WordPress Menu goes here -->
                            <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'container_class' => 'collapse navbar-toggleable-lg exCollapsingNavbar',
                                        'menu_class' => 'nav navbar-nav',
                                        'fallback_cb' => '',
                                        'menu_id' => 'main-menu',
                                        'walker' => new wp_bootstrap_navwalker()
                                    )
                            ); ?>

                
            
        </nav><!-- .site-navigation -->
        
    </div><!-- .wrapper-navbar end -->






