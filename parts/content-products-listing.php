<ul class="row products-listing">
<?php

    // Define the query
    $args = array(
        'post_type' => 'producto'

    );

    $query = new WP_Query( $args );

    // Start the Loop
    while ( $query->have_posts() ) : $query->the_post(); 

    $category_detail = get_the_category($post->ID);//$post->ID
    $categories = '';
	
	foreach($category_detail as $cd){
		$categories .= ' '.$cd->slug;
	}

?>
    <li class="product-listing col-xs-6 col-md-4<?php echo $categories; ?>" id="post-<?php the_ID(); ?>">
		
		<a href="<?php the_permalink(); ?>" class="product-preview">	
			<?php if (has_post_thumbnail()): ?>
			    
		    	<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
			    
			<?php endif; ?>
			<h3><?php the_title(); ?></h3>
		</a>	
		
	</li>

	<?php
      endwhile;
	       // use reset postdata to restore orginal query
	        wp_reset_postdata();
	    ?>
</ul>