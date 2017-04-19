<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package a11yto
 */
 $the_theme = wp_get_theme();
?>

<?php get_sidebar('footerfull'); ?>

<footer class="blue">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p class="featured">2016 ACCESSIBILTY CAMP TORONTO / <a href="index.php?p=67">GET IN TOUCH</a></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="half_topmenu">
                <div id="topmenu" class="topmenu-right">
                    <ul>
                        <li><a href="http://www.facebook.com/A11yTo" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.twitter.com/A11yTo"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="last" href="mailto:a11ycampto@gmail.com"><i class="fa fa-envelope"></i></a></li>

                    </ul>
                </div>
            </div> 
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
