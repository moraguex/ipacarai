<?php get_header(); ?>


	<div id="primary" class="content-area content content-product">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post(); ?>
			<article class="product">
		        <section class="product-details">
		          <div class="container">
		            <div class="row">

		              <div class="col-xs-12 col-md-7">

		              	<?php get_template_part( 'parts/content', 'product-banner' ); ?>

		              </div>

		              <div class="col-xs-12 col-md-5">
										<div class="product-description">
											<h2><?php the_title(); ?></h2>

											<h3>Presentaciones del producto:</h3>
											<ul>
												<?php
													$variations = get_field('product-presentations');

													$variations_array = explode(',', $variations);

													$product_name = get_field('brand') .' '. get_the_title();

													foreach ( $variations_array as $i ) {
														echo '<li>'. $product_name .' de <strong>'. $i .'</strong></li>';
													}
												?>
											</ul>

											<h3>Descripci&oacute;n:</h3>
											<?php the_content(); ?>
										</div>
		              </div>
		            </div>
		          </div>
		        </section>


		       	<?php get_template_part( 'parts/content', 'related-products' ); ?>

		    </article>

		    <?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
