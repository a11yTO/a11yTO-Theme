<?php
/**
 * a11yto Theme Customizer
 *
 * @package a11yto
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function a11yto_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

}
add_action( 'customize_register', 'a11yto_customize_register' );

function a11yto_theme_customize_register( $wp_customize ) {
    
    $wp_customize->remove_section( 'colors');
    $wp_customize->remove_section( 'background_image');
    
    /* Adding Panels */
    
    /* Camp Panel */
	$wp_customize->add_panel( 'panel_camp', array(
		'priority' => 10,
		'title'    => __( 'Camp Page', 'a11yto' )
	) );
    
    /* Schedule Panel */
	$wp_customize->add_panel( 'panel_schedule', array(
		'priority' => 10,
		'title'    => __( 'Schedule Page', 'a11yto' )
	) );
    
    /* MeetUp Panel */
	$wp_customize->add_panel( 'panel_meetup', array(
		'priority' => 10,
		'title'    => __( 'Meet Up Page', 'a11yto' )
	) );
    
    
    
    /* Adding Sections */
    
    
    
    /* Camp Sections */
    
    /* Section About */
	$wp_customize->add_section( 'frontpage_about_section', array(
		'title'    => __( 'Section About', 'a11yto' ),
        'panel'    => 'panel_camp'
	) );
    
    /* Section About First Link Name */
    $wp_customize->add_setting( 'frontpage_about_section_first_link_setting', array(
        'default'        => 'camp'
    ) );
    
    $wp_customize->add_control( 'frontpage_about_section_first_link_control', array(
        'label'      => __( 'First Link Name', 'a11yto' ),
        'section'    => 'frontpage_about_section',
        'type'       => 'text',
        'settings'   => 'frontpage_about_section_first_link_setting'
    ) );
    
    /* Section About First Link Url */
    $wp_customize->add_setting( 'frontpage_about_section_first_link_url_setting', array(
        'default'        => '#camp'
    ) );
    
    $wp_customize->add_control( 'frontpage_about_section_first_link_url_control', array(
        'label'      => __( 'First Link URL', 'a11yto' ),
        'section'    => 'frontpage_about_section',
        'type'       => 'url',
        'settings'   => 'frontpage_about_section_first_link_url_setting'
    ) );
    
    
    /* Section About Second Link */
    $wp_customize->add_setting( 'frontpage_about_section_second_link_setting', array(
        'default'        => 'speak'
    ) );
    
    $wp_customize->add_control( 'frontpage_about_section_second_link_control', array(
        'label'      => __( 'Second Link Name', 'a11yto' ),
        'section'    => 'frontpage_about_section',
        'type'       => 'text',
        'settings'   => 'frontpage_about_section_second_link_setting'
    ) );
    
    /* Section About Second Link Url */
    $wp_customize->add_setting( 'frontpage_about_section_second_link_url_setting', array(
        'default'        => '#speak'
    ) );
    
    $wp_customize->add_control( 'frontpage_about_section_second_link_url_control', array(
        'label'      => __( 'Second Link URL', 'a11yto' ),
        'section'    => 'frontpage_about_section',
        'type'       => 'url',
        'settings'   => 'frontpage_about_section_second_link_url_setting'
    ) );
    
    /* Section About Third Link */
    $wp_customize->add_setting( 'frontpage_about_section_third_link_setting', array(
        'default'        => 'faq'
    ) );
    
    $wp_customize->add_control( 'frontpage_about_section_third_link_control', array(
        'label'      => __( 'Third Link Name', 'a11yto' ),
        'section'    => 'frontpage_about_section',
        'type'       => 'text',
        'settings'   => 'frontpage_about_section_third_link_setting'
    ) );
    
    /* Section About Third Link Url */
    $wp_customize->add_setting( 'frontpage_about_section_third_link_url_setting', array(
        'default'        => '#faq'
    ) );
    
    $wp_customize->add_control( 'frontpage_about_section_third_link_url_control', array(
        'label'      => __( 'Third Link URL', 'a11yto' ),
        'section'    => 'frontpage_about_section',
        'type'       => 'url',
        'settings'   => 'frontpage_about_section_third_link_url_setting'
    ) );
    
    /* Section About Button */
    $wp_customize->add_setting( 'frontpage_about_section_button_setting', array(
        'default'        => 'REGISTER NOW'
    ) );
    
    $wp_customize->add_control( 'frontpage_about_section_button_control', array(
        'label'      => __( 'Button Label', 'a11yto' ),
        'section'    => 'frontpage_about_section',
        'type'       => 'text',
        'settings'   => 'frontpage_about_section_button_setting'
    ) );
    
    /* Section About Button Url */
    $wp_customize->add_setting( 'frontpage_about_section_button_url_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'frontpage_about_section_button_url_control', array(
        'label'      => __( 'Button URL', 'a11yto' ),
        'section'    => 'frontpage_about_section',
        'type'       => 'url',
        'settings'   => 'frontpage_about_section_button_url_setting'
    ) );
    
    
    
    
    /* Section Camp */
	$wp_customize->add_section( 'frontpage_camp_section', array(
		'title'    => __( 'Section Camp', 'a11yto' ),
        'panel'    => 'panel_camp'
	) );
    
    /* Section Camp Small Title */
    $wp_customize->add_setting( 'frontpage_camp_section_small_title_setting', array(
        'default'        => 'ABOUT ACCESIBILITY CAMP'
    ) );
    
    $wp_customize->add_control( 'frontpage_camp_section_small_title_control', array(
        'label'      => __( 'Small Title', 'a11yto' ),
        'section'    => 'frontpage_camp_section',
        'type'       => 'text',
        'settings'   => 'frontpage_camp_section_small_title_setting'
    ) );
    
      /* Section Camp Small Title Link Title */
    $wp_customize->add_setting( 'frontpage_camp_section_small_title_link_title_setting', array(
        'default'        => '#a11yTo'
    ) );
    
    $wp_customize->add_control( 'frontpage_camp_section_small_title_link_title_control', array(
        'label'      => __( 'Link Title', 'a11yto' ),
        'section'    => 'frontpage_camp_section',
        'type'       => 'text',
        'settings'   => 'frontpage_camp_section_small_title_link_title_setting'
    ) );
    
      /* Section Camp Small Title Link */
    $wp_customize->add_setting( 'frontpage_camp_section_small_title_link_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'frontpage_camp_section_small_title_link_control', array(
        'label'      => __( 'Link', 'a11yto' ),
        'section'    => 'frontpage_camp_section',
        'type'       => 'text',
        'settings'   => 'frontpage_camp_section_small_title_link_setting'
    ) );
    
      /* Section Camp Title */
    $wp_customize->add_setting( 'frontpage_camp_section_title_setting', array(
        'default'        => 'What’s camp?'
    ) );
    
    $wp_customize->add_control( 'frontpage_camp_section_title_control', array(
        'label'      => __( 'Title', 'a11yto' ),
        'section'    => 'frontpage_camp_section',
        'type'       => 'text',
        'settings'   => 'frontpage_camp_section_title_setting'
    ) );
    
      /* Section Camp Text */
    $wp_customize->add_setting( 'frontpage_camp_section_text_setting', array(
        'default'        => 'If you are interested in digital accessibility & inclusive design #a11yto is your home. We are is a meetup group that is about bringing together our accessibility community, sharing experiences, ideas & solutions. <br><br>All to help each get better.'
    ) );
    
    $wp_customize->add_control( 'frontpage_camp_section_text_control', array(
        'label'      => __( 'Text', 'a11yto' ),
        'section'    => 'frontpage_camp_section',
        'type'       => 'textarea',
        'settings'   => 'frontpage_camp_section_text_setting'
    ) );
    
      /* Section Camp Button */
    $wp_customize->add_setting( 'frontpage_camp_section_button_setting', array(
        'default'        => 'LEARN MORE'
    ) );
    
    $wp_customize->add_control( 'frontpage_camp_section_button_control', array(
        'label'      => __( 'Button Label', 'a11yto' ),
        'section'    => 'frontpage_camp_section',
        'type'       => 'text',
        'settings'   => 'frontpage_camp_section_button_setting'
    ) );
    
   /* Section Camp Button Link */
    $wp_customize->add_setting( 'frontpage_camp_section_button_link_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'frontpage_camp_section_button_link_control', array(
        'label'      => __( 'Button Link', 'a11yto' ),
        'section'    => 'frontpage_camp_section',
        'type'       => 'url',
        'settings'   => 'frontpage_camp_section_button_link_setting'
    ) );
    
    /* Section Camp Background Image */
    $wp_customize->add_setting( 'frontpage_camp_section_image_setting', array(
        'default'        => get_template_directory_uri() . '/images/camp_img.jpg'
    ) );
    
    $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'image',
           array(
               'label'      => __( 'Section Background Image', 'a11yto' ),
               'section'    => 'frontpage_camp_section',
               'settings'   => 'frontpage_camp_section_image_setting',
               'context'    => '' 
           )
       )
   );
    
    
    
    
     /* Section Speak */
	$wp_customize->add_section( 'frontpage_speak_section', array(
		'title'    => __( 'Section Speak', 'a11yto' ),
        'panel'    => 'panel_camp'
	) );
    
    /* Section Speak Title */
    $wp_customize->add_setting( 'frontpage_speak_section_title_setting', array(
        'default'        => 'speak'
    ) );
    
    $wp_customize->add_control( 'frontpage_speak_section_title_control', array(
        'label'      => __( 'Title', 'a11yto' ),
        'section'    => 'frontpage_speak_section',
        'type'       => 'text',
        'settings'   => 'frontpage_speak_section_title_setting'
    ) );
    
    /* Section Speak Text */
    $wp_customize->add_setting( 'frontpage_speak_section_text_setting', array(
        'default'        => '<span>Become a speaker:</span> If you’d like to speak (and get promoted on the website in advance), email us your name, the session title, the session description, and (optionally) a bio and photo.'
    ) );
    
    $wp_customize->add_control( 'frontpage_speak_section_text_control', array(
        'label'      => __( 'Text', 'a11yto' ),
        'section'    => 'frontpage_speak_section',
        'type'       => 'textarea',
        'settings'   => 'frontpage_speak_section_text_setting'
    ) );
    
      /* Section Speak Button */
    $wp_customize->add_setting( 'frontpage_speak_section_button_setting', array(
        'default'        => 'GET IN TOUCH'
    ) );
    
    $wp_customize->add_control( 'frontpage_speak_section_button_control', array(
        'label'      => __( 'Button Label', 'a11yto' ),
        'section'    => 'frontpage_speak_section',
        'type'       => 'text',
        'settings'   => 'frontpage_speak_section_button_setting'
    ) );
    
    /* Section Speak Button Link */
    $wp_customize->add_setting( 'frontpage_speak_section_button_link_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'frontpage_speak_section_button_link_control', array(
        'label'      => __( 'Button Link', 'a11yto' ),
        'section'    => 'frontpage_speak_section',
        'type'       => 'url',
        'settings'   => 'frontpage_speak_section_button_link_setting'
    ) );
    
    /* Section Speak Background Image */
    $wp_customize->add_setting( 'frontpage_speak_section_image_setting', array(
        'default'        => get_template_directory_uri() . '/images/speak-bgrnd.jpg'
    ) );
    
    $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'logo',
           array(
               'label'      => __( 'Section Background Image', 'a11yto' ),
               'section'    => 'frontpage_speak_section',
               'settings'   => 'frontpage_speak_section_image_setting',
               'context'    => '' 
           )
       )
   );
    
    
    
    
    /* Schedule Sections */
    
    /* Section About */
	$wp_customize->add_section( 'schedule_about_section', array(
		'title'    => __( 'Section About - Schedule', 'a11yto' ),
        'panel'    => 'panel_schedule'
	) );
    
    /* Section About First Link Name */
    $wp_customize->add_setting( 'schedule_about_section_first_link_setting', array(
        'default'        => 'register'
    ) );
    
    $wp_customize->add_control( 'schedule_about_section_first_link_control', array(
        'label'      => __( 'First Link Name', 'a11yto' ),
        'section'    => 'schedule_about_section',
        'type'       => 'text',
        'settings'   => 'schedule_about_section_first_link_setting'
    ) );
    
    /* Section About First Link Url */
    $wp_customize->add_setting( 'schedule_about_section_first_link_url_setting', array(
        'default'        => '#register'
    ) );
    
    $wp_customize->add_control( 'schedule_about_section_first_link_url_control', array(
        'label'      => __( 'First Link URL', 'a11yto' ),
        'section'    => 'schedule_about_section',
        'type'       => 'url',
        'settings'   => 'schedule_about_section_first_link_url_setting'
    ) );
    
    
    /* Section About Second Link */
    $wp_customize->add_setting( 'schedule_about_section_second_link_setting', array(
        'default'        => 'schedule'
    ) );
    
    $wp_customize->add_control( 'schedule_about_section_second_link_control', array(
        'label'      => __( 'Second Link Name', 'a11yto' ),
        'section'    => 'schedule_about_section',
        'type'       => 'text',
        'settings'   => 'schedule_about_section_second_link_setting'
    ) );
    
    /* Section About Second Link Url */
    $wp_customize->add_setting( 'schedule_about_section_second_link_url_setting', array(
        'default'        => '#schedule'
    ) );
    
    $wp_customize->add_control( 'schedule_about_section_second_link_url_control', array(
        'label'      => __( 'Second Link URL', 'a11yto' ),
        'section'    => 'schedule_about_section',
        'type'       => 'url',
        'settings'   => 'schedule_about_section_second_link_url_setting'
    ) );
    
    /* Section About Third Link */
    $wp_customize->add_setting( 'schedule_about_section_third_link_setting', array(
        'default'        => 'faq'
    ) );
    
    $wp_customize->add_control( 'schedule_about_section_third_link_control', array(
        'label'      => __( 'Third Link Name', 'a11yto' ),
        'section'    => 'schedule_about_section',
        'type'       => 'text',
        'settings'   => 'schedule_about_section_third_link_setting'
    ) );
    
    /* Section About Third Link Url */
    $wp_customize->add_setting( 'schedule_about_section_third_link_url_setting', array(
        'default'        => '#faq'
    ) );
    
    $wp_customize->add_control( 'schedule_about_section_third_link_url_control', array(
        'label'      => __( 'Third Link URL', 'a11yto' ),
        'section'    => 'schedule_about_section',
        'type'       => 'url',
        'settings'   => 'schedule_about_section_third_link_url_setting'
    ) );
    
    /* Section About Button */
    $wp_customize->add_setting( 'schedule_about_section_button_setting', array(
        'default'        => 'REGISTER NOW'
    ) );
    
    $wp_customize->add_control( 'schedule_about_section_button_control', array(
        'label'      => __( 'Button Label', 'a11yto' ),
        'section'    => 'schedule_about_section',
        'type'       => 'text',
        'settings'   => 'schedule_about_section_button_setting'
    ) );
    
    /* Section About Button Url */
    $wp_customize->add_setting( 'schedule_about_section_button_url_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'schedule_about_section_button_url_control', array(
        'label'      => __( 'Button URL', 'a11yto' ),
        'section'    => 'schedule_about_section',
        'type'       => 'url',
        'settings'   => 'schedule_about_section_button_url_setting'
    ) );
    
    
    
    
    
    /* Meet Up Sections */
    
    /* Section About */
	$wp_customize->add_section( 'meetup_about_section', array(
		'title'    => __( 'Section About', 'a11yto' ),
        'panel'    => 'panel_meetup'
	) );
    
    /* Section About First Link Name */
    $wp_customize->add_setting( 'meetup_about_section_first_link_setting', array(
        'default'        => 'meet'
    ) );
    
    $wp_customize->add_control( 'meetup_about_section_first_link_control', array(
        'label'      => __( 'First Link Name', 'a11yto' ),
        'section'    => 'meetup_about_section',
        'type'       => 'text',
        'settings'   => 'meetup_about_section_first_link_setting'
    ) );
    
    /* Section About First Link Url */
    $wp_customize->add_setting( 'meetup_about_section_first_link_url_setting', array(
        'default'        => '#meet'
    ) );
    
    $wp_customize->add_control( 'meetup_about_section_first_link_url_control', array(
        'label'      => __( 'First Link URL', 'a11yto' ),
        'section'    => 'meetup_about_section',
        'type'       => 'url',
        'settings'   => 'meetup_about_section_first_link_url_setting'
    ) );
    
    
    /* Section About Second Link */
    $wp_customize->add_setting( 'meetup_about_section_second_link_setting', array(
        'default'        => 'share'
    ) );
    
    $wp_customize->add_control( 'meetup_about_section_second_link_control', array(
        'label'      => __( 'Second Link Name', 'a11yto' ),
        'section'    => 'meetup_about_section',
        'type'       => 'text',
        'settings'   => 'meetup_about_section_second_link_setting'
    ) );
    
    /* Section About Second Link Url */
    $wp_customize->add_setting( 'meetup_about_section_second_link_url_setting', array(
        'default'        => '#share'
    ) );
    
    $wp_customize->add_control( 'meetup_about_section_second_link_url_control', array(
        'label'      => __( 'Second Link URL', 'a11yto' ),
        'section'    => 'meetup_about_section',
        'type'       => 'url',
        'settings'   => 'meetup_about_section_second_link_url_setting'
    ) );
    
    /* Section About Third Link */
    $wp_customize->add_setting( 'meetup_about_section_third_link_setting', array(
        'default'        => 'faq'
    ) );
    
    $wp_customize->add_control( 'meetup_about_section_third_link_control', array(
        'label'      => __( 'Third Link Name', 'a11yto' ),
        'section'    => 'meetup_about_section',
        'type'       => 'text',
        'settings'   => 'meetup_about_section_third_link_setting'
    ) );
    
    /* Section About Third Link Url */
    $wp_customize->add_setting( 'meetup_about_section_third_link_url_setting', array(
        'default'        => '#faq'
    ) );
    
    $wp_customize->add_control( 'meetup_about_section_third_link_url_control', array(
        'label'      => __( 'Third Link URL', 'a11yto' ),
        'section'    => 'meetup_about_section',
        'type'       => 'url',
        'settings'   => 'meetup_about_section_third_link_url_setting'
    ) );
    
    /* Section About Button */
    $wp_customize->add_setting( 'meetup_about_section_button_setting', array(
        'default'        => 'JOIN US'
    ) );
    
    $wp_customize->add_control( 'meetup_about_section_button_control', array(
        'label'      => __( 'Button Label', 'a11yto' ),
        'section'    => 'meetup_about_section',
        'type'       => 'text',
        'settings'   => 'meetup_about_section_button_setting'
    ) );
    
    /* Section About Button Url */
    $wp_customize->add_setting( 'meetup_about_section_button_url_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'meetup_about_section_button_url_control', array(
        'label'      => __( 'Button URL', 'a11yto' ),
        'section'    => 'meetup_about_section',
        'type'       => 'url',
        'settings'   => 'meetup_about_section_button_url_setting'
    ) );
    
    
    
    
    /* Section Camp */
	$wp_customize->add_section( 'meetup_camp_section', array(
		'title'    => __( 'Section Camp', 'a11yto' ),
        'panel'    => 'panel_meetup'
	) );
    
    /* Section Camp Small Title */
    $wp_customize->add_setting( 'meetup_camp_section_small_title_setting', array(
        'default'        => 'ABOUT OUR GROUP'
    ) );
    
    $wp_customize->add_control( 'meetup_camp_section_small_title_control', array(
        'label'      => __( 'Small Title', 'a11yto' ),
        'section'    => 'meetup_camp_section',
        'type'       => 'text',
        'settings'   => 'meetup_camp_section_small_title_setting'
    ) );
    
      /* Section Camp Small Title Link Title */
    $wp_customize->add_setting( 'meetup_camp_section_small_title_link_title_setting', array(
        'default'        => '#a11yTo'
    ) );
    
    $wp_customize->add_control( 'meetup_camp_section_small_title_link_title_control', array(
        'label'      => __( 'Link Title', 'a11yto' ),
        'section'    => 'meetup_camp_section',
        'type'       => 'text',
        'settings'   => 'meetup_camp_section_small_title_link_title_setting'
    ) );
    
      /* Section Camp Small Title Link */
    $wp_customize->add_setting( 'meetup_camp_section_small_title_link_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'meetup_camp_section_small_title_link_control', array(
        'label'      => __( 'Link', 'a11yto' ),
        'section'    => 'meetup_camp_section',
        'type'       => 'text',
        'settings'   => 'meetup_camp_section_small_title_link_setting'
    ) );
    
      /* Section Camp Title */
    $wp_customize->add_setting( 'meetup_camp_section_title_setting', array(
        'default'        => 'Why Go?'
    ) );
    
    $wp_customize->add_control( 'meetup_camp_section_title_control', array(
        'label'      => __( 'Title', 'a11yto' ),
        'section'    => 'meetup_camp_section',
        'type'       => 'text',
        'settings'   => 'meetup_camp_section_title_setting'
    ) );
    
      /* Section Camp Text */
    $wp_customize->add_setting( 'meetup_camp_section_text_setting', array(
        'default'        => 'If you are interested in digital accessibility & inclusive design #a11yto is your home. We are is a meetup group that is about bringing together our accessibility community, sharing experiences, ideas & solutions. <br><br>All to help each get better.'
    ) );
    
    $wp_customize->add_control( 'meetup_camp_section_text_control', array(
        'label'      => __( 'Text', 'a11yto' ),
        'section'    => 'meetup_camp_section',
        'type'       => 'textarea',
        'settings'   => 'meetup_camp_section_text_setting'
    ) );
    
      /* Section Camp Button */
    $wp_customize->add_setting( 'meetup_camp_section_button_setting', array(
        'default'        => 'LEARN MORE'
    ) );
    
    $wp_customize->add_control( 'meetup_camp_section_button_control', array(
        'label'      => __( 'Button Label', 'a11yto' ),
        'section'    => 'meetup_camp_section',
        'type'       => 'text',
        'settings'   => 'meetup_camp_section_button_setting'
    ) );
    
   /* Section Camp Button Link */
    $wp_customize->add_setting( 'meetup_camp_section_button_link_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'meetup_camp_section_button_link_control', array(
        'label'      => __( 'Button Link', 'a11yto' ),
        'section'    => 'meetup_camp_section',
        'type'       => 'url',
        'settings'   => 'meetup_camp_section_button_link_setting'
    ) );
    
    /* Section Camp Background Image */
    $wp_customize->add_setting( 'meetup_camp_section_image_setting', array(
        'default'        => get_template_directory_uri() . '/images/meetup1.jpg'
    ) );
    
    $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'image',
           array(
               'label'      => __( 'Section Background Image', 'a11yto' ),
               'section'    => 'meetup_camp_section',
               'settings'   => 'meetup_camp_section_image_setting',
               'context'    => '' 
           )
       )
   );
    
    
    
    /* Section Meetup1 */
	$wp_customize->add_section( 'meetup_meetup1_section', array(
		'title'    => __( 'Section Meetup 1', 'a11yto' ),
        'panel'    => 'panel_meetup'
	) );
    
    /* Section Meetup1 Small Title */
    $wp_customize->add_setting( 'meetup_meetup1_section_small_title_setting', array(
        'default'        => 'PAST MEETUP'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup1_section_small_title_control', array(
        'label'      => __( 'Small Title', 'a11yto' ),
        'section'    => 'meetup_meetup1_section',
        'type'       => 'text',
        'settings'   => 'meetup_meetup1_section_small_title_setting'
    ) );
    
      /* Section meetup1 Small Title Link Title */
    $wp_customize->add_setting( 'meetup_meetup1_section_small_title_link_title_setting', array(
        'default'        => 'AUGUST 21'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup1_section_small_title_link_title_control', array(
        'label'      => __( 'Link Title', 'a11yto' ),
        'section'    => 'meetup_meetup1_section',
        'type'       => 'text',
        'settings'   => 'meetup_meetup1_section_small_title_link_title_setting'
    ) );
    
      /* Section meetup1 Small Title Link */
    $wp_customize->add_setting( 'meetup_meetup1_section_small_title_link_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup1_section_small_title_link_control', array(
        'label'      => __( 'Link', 'a11yto' ),
        'section'    => 'meetup_meetup1_section',
        'type'       => 'text',
        'settings'   => 'meetup_meetup1_section_small_title_link_setting'
    ) );
    
      /* Section meetup1 Title */
    $wp_customize->add_setting( 'meetup_meetup1_section_title_setting', array(
        'default'        => 'VR and lived experience'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup1_section_title_control', array(
        'label'      => __( 'Title', 'a11yto' ),
        'section'    => 'meetup_meetup1_section',
        'type'       => 'text',
        'settings'   => 'meetup_meetup1_section_title_setting'
    ) );
    
      /* Section meetup1 Text */
    $wp_customize->add_setting( 'meetup_meetup1_section_text_setting', array(
        'default'        => 'Terrence Ho & team at The Lived Experience are on a mission - to disrupt the accessibility training industry.'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup1_section_text_control', array(
        'label'      => __( 'Text', 'a11yto' ),
        'section'    => 'meetup_meetup1_section',
        'type'       => 'textarea',
        'settings'   => 'meetup_meetup1_section_text_setting'
    ) );
    
      /* Section meetup1 More Info */
    $wp_customize->add_setting( 'meetup_meetup1_section_button_setting', array(
        'default'        => 'more information +'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup1_section_button_control', array(
        'label'      => __( 'More Info Link Label', 'a11yto' ),
        'section'    => 'meetup_meetup1_section',
        'type'       => 'text',
        'settings'   => 'meetup_meetup1_section_button_setting'
    ) );
    
   /* Section meetup1 More Info Link */
    $wp_customize->add_setting( 'meetup_meetup1_section_button_link_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup1_section_button_link_control', array(
        'label'      => __( 'More Info Link', 'a11yto' ),
        'section'    => 'meetup_meetup1_section',
        'type'       => 'url',
        'settings'   => 'meetup_meetup1_section_button_link_setting'
    ) );
    
    
    
    /* Section Meetup2 */
	$wp_customize->add_section( 'meetup_meetup2_section', array(
		'title'    => __( 'Section Meetup 2', 'a11yto' ),
        'panel'    => 'panel_meetup'
	) );
    
    /* Section meetup2 Small Title */
    $wp_customize->add_setting( 'meetup_meetup2_section_small_title_setting', array(
        'default'        => 'PAST MEETUP'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup2_section_small_title_control', array(
        'label'      => __( 'Small Title', 'a11yto' ),
        'section'    => 'meetup_meetup2_section',
        'type'       => 'text',
        'settings'   => 'meetup_meetup2_section_small_title_setting'
    ) );
    
      /* Section meetup2 Small Title Link Title */
    $wp_customize->add_setting( 'meetup_meetup2_section_small_title_link_title_setting', array(
        'default'        => 'MAY 18'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup2_section_small_title_link_title_control', array(
        'label'      => __( 'Link Title', 'a11yto' ),
        'section'    => 'meetup_meetup2_section',
        'type'       => 'text',
        'settings'   => 'meetup_meetup2_section_small_title_link_title_setting'
    ) );
    
      /* Section meetup2 Small Title Link */
    $wp_customize->add_setting( 'meetup_meetup2_section_small_title_link_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup2_section_small_title_link_control', array(
        'label'      => __( 'Link', 'a11yto' ),
        'section'    => 'meetup_meetup2_section',
        'type'       => 'text',
        'settings'   => 'meetup_meetup2_section_small_title_link_setting'
    ) );
    
      /* Section meetup2 Title */
    $wp_customize->add_setting( 'meetup_meetup2_section_title_setting', array(
        'default'        => 'A11y success stories'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup2_section_title_control', array(
        'label'      => __( 'Title', 'a11yto' ),
        'section'    => 'meetup_meetup2_section',
        'type'       => 'text',
        'settings'   => 'meetup_meetup2_section_title_setting'
    ) );
    
      /* Section meetup2 Text */
    $wp_customize->add_setting( 'meetup_meetup2_section_text_setting', array(
        'default'        => 'Please join a global community in celebrating the 5th Global Accessibility Awareness Day (GAAD) ...'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup2_section_text_control', array(
        'label'      => __( 'Text', 'a11yto' ),
        'section'    => 'meetup_meetup2_section',
        'type'       => 'textarea',
        'settings'   => 'meetup_meetup2_section_text_setting'
    ) );
    
      /* Section meetup2 More Info */
    $wp_customize->add_setting( 'meetup_meetup2_section_moreinfo_setting', array(
        'default'        => 'more information +'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup2_section_moreinfo_control', array(
        'label'      => __( 'More Info Link Label', 'a11yto' ),
        'section'    => 'meetup_meetup2_section',
        'type'       => 'text',
        'settings'   => 'meetup_meetup2_section_moreinfo_setting'
    ) );
    
   /* Section meetup2 More Info Link */
    $wp_customize->add_setting( 'meetup_meetup2_section_moreinfo_link_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup2_section_moreinfo_link_control', array(
        'label'      => __( 'More Info Link', 'a11yto' ),
        'section'    => 'meetup_meetup2_section',
        'type'       => 'url',
        'settings'   => 'meetup_meetup2_section_moreinfo_link_setting'
    ) );
    
    /* Section meetup2 Button */
    $wp_customize->add_setting( 'meetup_meetup2_section_button_setting', array(
        'default'        => 'SEE ALL PAST MEETUPS'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup2_section_button_control', array(
        'label'      => __( 'Button Label', 'a11yto' ),
        'section'    => 'meetup_meetup2_section',
        'type'       => 'text',
        'settings'   => 'meetup_meetup2_section_button_setting'
    ) );
    
   /* Section meetup2 Button Link */
    $wp_customize->add_setting( 'meetup_meetup2_section_button_link_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'meetup_meetup2_section_button_link_control', array(
        'label'      => __( 'Button Link', 'a11yto' ),
        'section'    => 'meetup_meetup2_section',
        'type'       => 'url',
        'settings'   => 'meetup_meetup2_section_button_link_setting'
    ) );
    
    
    
    
     /* Section Share */
	$wp_customize->add_section( 'meetup_share_section', array(
		'title'    => __( 'Section share', 'a11yto' ),
        'panel'    => 'panel_meetup'
	) );
    
    /* Section share Title */
    $wp_customize->add_setting( 'meetup_share_section_title_setting', array(
        'default'        => 'share'
    ) );
    
    $wp_customize->add_control( 'meetup_share_section_title_control', array(
        'label'      => __( 'Title', 'a11yto' ),
        'section'    => 'meetup_share_section',
        'type'       => 'text',
        'settings'   => 'meetup_share_section_title_setting'
    ) );
    
    /* Section share Text */
    $wp_customize->add_setting( 'meetup_share_section_text_setting', array(
        'default'        => 'Have a great idea for a talk or have something you want to share. We are always looking for people to give talks and get involved.'
    ) );
    
    $wp_customize->add_control( 'meetup_share_section_text_control', array(
        'label'      => __( 'Text', 'a11yto' ),
        'section'    => 'meetup_share_section',
        'type'       => 'textarea',
        'settings'   => 'meetup_share_section_text_setting'
    ) );
    
      /* Section share Button */
    $wp_customize->add_setting( 'meetup_share_section_button_setting', array(
        'default'        => 'GET IN TOUCH'
    ) );
    
    $wp_customize->add_control( 'meetup_share_section_button_control', array(
        'label'      => __( 'Button Label', 'a11yto' ),
        'section'    => 'meetup_share_section',
        'type'       => 'text',
        'settings'   => 'meetup_share_section_button_setting'
    ) );
    
    /* Section share Button Link */
    $wp_customize->add_setting( 'meetup_share_section_button_link_setting', array(
        'default'        => '#'
    ) );
    
    $wp_customize->add_control( 'meetup_share_section_button_link_control', array(
        'label'      => __( 'Button Link', 'a11yto' ),
        'section'    => 'meetup_share_section',
        'type'       => 'url',
        'settings'   => 'meetup_share_section_button_link_setting'
    ) );
    
    
    
    
    
    

}

add_action( 'customize_register', 'a11yto_theme_customize_register' );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function a11yto_customize_preview_js() {
	wp_enqueue_script( 'a11yto_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'a11yto_customize_preview_js' );
