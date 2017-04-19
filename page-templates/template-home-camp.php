<?php
/**
 * Template Name: Camp Home Template
 *
 * @package a11yto
 */

get_header();


get_template_part('/sections/camp/single-page',about);

get_template_part('/sections/camp/single-page',camp);

get_template_part('/sections/camp/single-page',speak);

get_template_part('/sections/camp/single-page',faq);

get_template_part('/sections/camp/single-page',sponsors);



get_footer();