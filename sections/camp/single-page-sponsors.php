<section id="sponsors">
    <div class="clearfix"></div>
	<div class="container">
                <h1 class="h1"><?php $recent = new WP_Query("page_id=32"); 
                 while($recent->have_posts()) : $recent->the_post();?>
                <?php the_title(); ?>
                <?php endwhile; ?></h1>
      
        	<?php $recent = new WP_Query("page_id=32"); while($recent->have_posts()) : $recent->the_post();?>
            <?php the_content(); ?>
            <?php endwhile; ?>
    </div> 
</section>
            