 <?php

    $category_detail = get_the_category($post->ID);//$post->ID
    $categories = '';
	
	foreach($category_detail as $cd){
		$categories .= ','.$cd->slug;
	}

	$args = array(
		'post_type' => 'product',
        'category_name' => $categories,
        'posts_per_page' => 4,
        'post__not_in' => array($post->ID)

    );

	$query = new WP_Query( $args );

    if ( $query->have_posts() ) :

?>

<aside class="related-products">
	<div class="container">
		<h2><?php echo __('Related products', 'ipacaraiwp') ?></h2>
		<ul class="row products-listing">
		<?php while ( $query->have_posts() ) : $query->the_post();?>

			<li class="product-listing col-xs-6 col-md-3" id="post-<?php the_ID(); ?>">
						
				<a href="<?php the_permalink(); ?>" class="product-preview">	
					<?php if (has_post_thumbnail()): ?>
					    
				    	<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
					    
					<?php endif; ?>
					<h3><?php the_title(); ?></h3>
				</a>	
				
			</li>
		 <?php endwhile; ?>
		</ul>
	</div>
</aside>

<?php endif; ?>