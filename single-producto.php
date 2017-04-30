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