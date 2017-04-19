<?php
/**
 * Template Name: Meet Up Home Template
 *
 * @package a11yto
 */

get_header(red);


get_template_part('/sections/meetup/single-page',about);

get_template_part('/sections/meetup/single-page',camp);

get_template_part('/sections/meetup/single-page',meetup1);

get_template_part('/sections/meetup/single-page',meetup2);

get_template_part('/sections/meetup/single-page',share);

get_template_part('/sections/meetup/single-page',faq);

get_template_part('/sections/meetup/single-page',sponsors);


?>
<div id="meetup-footer">
<?php get_footer(); ?>
</div>    