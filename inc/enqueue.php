<?php
/**
 * a11yto enqueue scripts
 *
 * @package a11yto
 */

function a11yto_scripts() {
    /*wp_enqueue_style( 'a11yto-styles', get_template_directory_uri() . '/style.css', array(), '0.4.7');*/
    wp_enqueue_style( 'a11yto-styles', get_stylesheet_directory_uri() . '/css/theme.css', array(), '0.4.7');
    
    wp_enqueue_style( 'a11yto_font_all', '//fonts.googleapis.com/css?family=Montserrat:400,700');
    
    wp_enqueue_script('jquery'); 
    wp_enqueue_script( 'a11yto-scripts', get_template_directory_uri() . '/js/theme.js', array(), '0.4.7', true );
    wp_enqueue_script( 'appear-scripts', get_template_directory_uri() . '/js/appear.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery-easing-scripts', get_template_directory_uri() . '/js/jquery.easing.js', array(), '1.3.0', true );
    wp_enqueue_script( 'a11yto-custom-scripts', get_template_directory_uri() . '/js/a11yto.js', array(), '1.0.0', true );
    

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'a11yto_scripts' );

/** 
*Loading slider script conditionally
**/



