<?php

    // Define the query
    $args = array(
        'post_type' => 'productos',
      	'meta_key'   => 'featured-catalog',
	'meta_value' => 1,
    );

    $query = new WP_Query( $args );

    $count = 0;
    $array = array();

	// Start the Loop
	while ( $query->have_posts() ) : $query->the_post(); 

	$category_detail = get_the_category($post->ID);//$post->ID
	$categories = '';

	foreach($category_detail as $cd){
		if (in_array($cd->cat_name, $array)) {
			continue;
		}

		array_push($array, $cd->cat_name);

		$categories .= ' '.$cd->cat_name;
		
	}



	$categories = strtolower($categories);



	if ($count === 0) {
		$categories .= ' first';	
	}

	$count ++;
?>

	<div class="featured-product-banner<?php echo $categories; ?>">
		<?php $image = get_field('banner-background'); ?>
	  	<img src="<?php echo $image['url']; ?>" class="img-responsive banner" alt="<?php echo $image['alt']; ?>" />
	  
	  	<?php $image = get_field('banner-product-image'); ?>

		<img src="<?php echo $image['url']; ?>" class="img-responsive featured-product-image" alt="<?php echo $image['alt']; ?>" />
	  
		<div class="product-info">
			<h3><?php the_title(); ?></h3>  

			<a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-lg">Ver m&aacute;s</a>
		</div>
	</div>


<?php
    endwhile;
    // use reset postdata to restore orginal query
    wp_reset_postdata();
?>