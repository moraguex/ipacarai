<ul class="row listing">
    <?php

  	    // Define the query
  	    $args = array(
  	        'post_type' => 'product',
  	      	'posts_per_page' => '6',
  	      	'meta_key'   => 'featured-home',
			'meta_value' => 1,
  	    );

  	    $query = new WP_Query( $args );

        // Start the Loop
        while ( $query->have_posts() ) : $query->the_post(); 

    ?>

    <li class="featured-listing col-xs-6 col-md-4" id="post-<?php the_ID(); ?>">
		<div class="featured-product">
			<a href="<?php the_permalink(); ?>">
				<h3><?php the_title(); ?></h3>
				<?php if (has_post_thumbnail()): ?>
				    
			    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
				    
				<?php endif; ?>
			</a>
		  	
			

		 	<p><?php echo the_field('brand') .' '; the_title(); ?></p>
		 	
		</div>
	</li>

	<?php
	  
      	endwhile;
		// use reset postdata to restore orginal query
		wp_reset_postdata();
	?>
</ul>