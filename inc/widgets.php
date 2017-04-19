<?php
/**
 * Declaring widgets
 *
 *
 * @package a11yto
 */
function a11yto_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'a11yto' ),
		'id'            => 'sidebar-1',
		'description'   => 'Sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

        register_sidebar( array(
        'name'          => __( 'Footer Full', 'a11yto' ),
        'id'            => 'footerfull',
        'description'   => 'Widget area below main content and above footer',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'a11yto_widgets_init' );