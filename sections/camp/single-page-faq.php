<section id="faq" style="background:url('<?php echo get_template_directory_uri() . '/images/faq-bgrnd.jpg'?>') no-repeat center center / cover">
    <div class="clearfix"></div>
	<div class="container">
                <h1 class="h1"><?php $recent = new WP_Query("page_id=15"); 
                 while($recent->have_posts()) : $recent->the_post();?>
                <?php the_title(); ?>
                <?php endwhile; ?></h1>
      
        	<?php $recent = new WP_Query("page_id=15"); while($recent->have_posts()) : $recent->the_post();?>
            <?php the_content(); ?>
            <?php endwhile; ?>
    </div>
    <div class="clearfix"></div>
</section>
            