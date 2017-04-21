<?php
// Related Posts Function, matches posts by categoriess - call using ipacarai_related_posts(); )
function ipacarai_related_posts() {
	global $post;
	$cat_arr = '';
	$cats = wp_get_post_categories( $post->ID );
	if($cats) {
		foreach( $cats as $cat ) {
			$cat_arr .= $cat->slug . ',';
		}
		$args = array(
			'cat' => $cat_arr,
			'numberposts' => 4, /* you can change this to show more */
			'post__not_in' => array($post->ID)
		);
		$related_posts = get_posts( $args );
		if($related_posts) {
		echo '<aside class="related-products">';
			echo '<div class="container">';
				echo __( '<h4>Related Products</h4>', 'ipacaraiwp' );
				echo '<ul class="row products-listing">';
					foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
						<li class="product-listing col-xs-6 col-md-3" id="post-<?php the_ID(); ?>">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="product">
								<?php if (has_post_thumbnail()): ?>
									    
								    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
									    
								<?php endif; ?>
								
								<h3><?php the_title(); ?></h3>
							</a>
						</li>
					<?php endforeach; }
					}
				wp_reset_postdata();
				echo '</ul>';
} /* end ipacarai related posts function */