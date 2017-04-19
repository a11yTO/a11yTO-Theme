<?php  
/* 
Template Name: Cr3ativ-Conference
*/  
?>



<section class="white">

    <section class="white section-schedule">

    <div class="container" id="schedule-cont">

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 schedule-title">  
    
        <h1 class="h1">schedule</h1>
    </div>    
    <div class="clearfix"></div>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 schedule-time">
        <p class="featured">9:00AM</p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 schedule-session">
        <p class="featured-grey">AUDITORIUM</p>
        <h1>Registration</h1>
    </div>    
     <div class="clearfix"></div>
        
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 schedule-time">
        <p class="featured">9:30AM</p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 schedule-session">
        <p class="featured-grey">AUDITORIUM</p>
        <h1>Welcome</h1>
    </div>    
     <div class="clearfix"></div>    
         
       
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 schedule-time-main">
        <p class="featured">10:45AM</p>
        
    </div>
    
    <!-- Start of content wrapper -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 schedule-main">
        
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <?php 
    if ( has_post_thumbnail() ) {  ?>

    <?php the_post_thumbnail(''); ?>

    <?php } ?>

    <?php the_content('        '); ?> 

    <?php endwhile; ?> 

    <?php else: ?> 
    <p><?php _e( 'There are no posts to display. Try using the search.', 'cr3at_conf' ); ?></p> 

    <?php endif; ?>

        <?php
add_filter('posts_orderby','cr3ativoderby2');
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$wp_query = new WP_Query(array(
        'post_type' => 'cr3ativconference',
        'cr3ativconfcategory'=>'session-1',
        'posts_per_page' => 99999999,
        'order' => 'ASC',
        'meta_key' => 'cr3ativconfmeetingdate',
        
        'meta_query' => array(
            array(
        'key' => 'cr3ativconfmeetingdate',
        ),
            array(
        'key' => 'cr3ativ_confstarttime',
        ),
        ),
        )); 
remove_filter('posts_orderby','cr3ativoderby2');
        
        
        
        
          
        $sessiondate = '';
        while (have_posts()) : the_post();

        ?>

        <?php $cr3ativconfmeetingdate = get_post_meta($post->ID, 'cr3ativconfmeetingdate', $single = true); 
        $confstarttime = get_post_meta($post->ID, 'cr3ativ_confstarttime', $single = true);
        $confendtime = get_post_meta($post->ID, 'cr3ativ_confendtime', $single = true); 
        $confdisplaystarttime = get_post_meta($post->ID, 'cr3ativ_confdisplaystarttime', $single = true);
        $confdisplayendtime = get_post_meta($post->ID, 'cr3ativ_confdisplayendtime', $single = true);
        $conflocation = get_post_meta($post->ID, 'cr3ativ_conflocation', $single = true); 
        $cr3ativ_highlight = get_post_meta($post->ID, 'cr3ativ_highlight', $single = true); ?>
        
        
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 schedule">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 schedule-single mWm-animated" data-animation="fade-in-from-bottom" data-delay="100">
        <?php $dateformat = get_option('date_format'); ?>
            
            <?php $sessiondate = date($dateformat, $cr3ativconfmeetingdate); ?>
            
            
            <!-- Start of conference location -->
            <p class="featured">
                <?php if ($conflocation != ('')){ ?>
                <?php echo stripslashes($conflocation); ?> 
                <?php } ?> / <?php
	         $cr3ativ_confspeakers = get_post_meta($post->ID, 'cr3ativ_confspeaker', $single = true); 
	        ?>    
            <?php
	        if ( $cr3ativ_confspeakers ) { 
				
	        	foreach ( $cr3ativ_confspeakers as $cr3ativ_confspeaker ) :
	        	
	        		$speaker = get_post($cr3ativ_confspeaker);
                    $speakerlink = get_permalink( $speaker->ID );
	        		echo get_the_post_thumbnail($speaker->ID).'<a href="'. $speakerlink .'">'. $speaker->post_title .'</a>'; 
				
				endforeach; 
				
			} ?>
            </p><!-- End of conference location -->
            
            <h2 class="meeting_date"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'squarecode' ); ?>&nbsp; <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        
           
                
                
               <p> <a href="<?php the_permalink (); ?>"><?php _e( 'more information +', 'cr3at_conf' ); ?></a></p>
           
            
        
            </div>
            
        </div>
        
        <?php endwhile; ?>

    </div><!-- End of content wrapper -->
       
</div>
   
</section>
</section>

