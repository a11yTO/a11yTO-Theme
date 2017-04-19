<?php get_header(blue); ?>

<!-- Start of content wrapper -->
<div id="cr3ativconference_contentwrapper">

    <!-- Start of content wrapper -->
    <div class="cr3ativconference_content_wrapper container">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php
        $cr3ativconfmeetingdate = get_post_meta($post->ID, 'cr3ativconfmeetingdate', $single = true); 
        $conflocation = get_post_meta($post->ID, 'cr3ativ_conflocation', $single = true); 
        $confspeakers = get_post_meta($post->ID, 'cr3ativ_confspeaker', $single = true); 
        $confstarttime = get_post_meta($post->ID, 'cr3ativ_confstarttime', $single = true); 
        $confendtime = get_post_meta($post->ID, 'cr3ativ_confendtime', $single = true); 
        $confdisplaystarttime = get_post_meta($post->ID, 'cr3ativ_confdisplaystarttime', $single = true);
        $confdisplayendtime = get_post_meta($post->ID, 'cr3ativ_confdisplayendtime', $single = true);
        ?>

            <!-- Start of blog wrapper -->
            <div class="schedule-single conf">
            <?php 
            if ( has_post_thumbnail() ) {  ?>

            <?php the_post_thumbnail(''); ?>

            <?php } ?>
                <p class="featured">
                 <!-- Start of conference location -->
                <?php if ($conflocation) { ?>
                <?php echo ($conflocation); ?>
                <?php } ?> /
                
                <!-- End of conference location -->   
                
            <!-- Start of conference time -->
                <?php if ($confdisplaystarttime != ('')) { ?>

                <?php if ($confdisplaystarttime != ('')) { echo ($confdisplaystarttime); }
                if ($confdisplayendtime != ('')){ ?> &nbsp;-&nbsp; <?php echo ($confdisplayendtime); } ?>

                <?php } else { ?> 

                <?php if ($confstarttime != ('')){  echo ($confstarttime); }
                if ($confendtime != ('')){ ?> &nbsp;-&nbsp; <?php echo ($confendtime); } ?>

                <?php } ?>
                </p>    
                <!-- End of conference time -->
                
                
                
                <h3 class="h3"><?php the_title (); ?></h3>
                
                
                <!-- Clear Fix --><div class="clearfix"></div>
                
                 <!-- Start of session content -->
                  <?php the_content (); ?><!-- End of session content -->

                <!-- Start of speaker list -->
                <p class="featured">
                <?php
                 $cr3ativ_confspeakers = get_post_meta($post->ID, 'cr3ativ_confspeaker', $single = true); 
                ?>    
                <?php
                if ( $cr3ativ_confspeakers ) { 

                    foreach ( $cr3ativ_confspeakers as $cr3ativ_confspeaker ) :

                        $speaker = get_post($cr3ativ_confspeaker);
                        $speakerlink = get_permalink( $speaker->ID );
                        echo'<p class="featured"><strong>';
                        echo get_the_post_thumbnail($speaker->ID).'<a href="'. $speakerlink .'">'. $speaker->post_title .'</a></strong></p>'; 
                    endforeach; 

                } ?>
                </p><!-- End of speaker list -->
                
                <!-- Clear Fix --><div class="clearfix"></div>
        
                <a class="a11y-button" href="index.php?p=86#schedule">FULL SCHEDULE</a>
                
               

            <?php endwhile; ?> 

            <?php else: ?> 
            <p><?php _e( 'There are no posts to display. Try using the search.', 'cr3at_conf' ); ?></p> 

            <?php endif; ?>

            </div><!-- End of blog wrapper -->

    </div><!-- End of content wrapper -->

    <!-- Clear Fix --><div class="cr3ativconference_clear"></div>

</div><!-- End of content wrapper -->

<?php get_footer(blue); ?>