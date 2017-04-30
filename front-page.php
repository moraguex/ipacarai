<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!-- Slider -->
		<section class="slider-section"><?php echo do_shortcode('[smartslider3 slider=2]'); ?></section>

		<section class="featured-products-section">
	      <div class="container">
	      	<?php get_template_part( 'parts/loop', 'featured-products' ); ?>
		  </div>
		</section>


		<section class="about-section" id="about-section">
	      <div class="container">
	        <div class="row">
	          <div class="col-xs-12">
	            <?php get_template_part( 'parts/content', 'about' ); ?>
	          </div>
	        </div>
	      </div>
	    </section>

	    <section class="contact-section" id="contact-section">
	      <div class="container">
	        <div class="row">
	          <div class="col-xs-12">
	            <section class="location">
	              <div class="row">
	                <div class="col-xs-12 col-md-10">
	                  <div class="map-container">
	                    <?php get_template_part( 'parts/content', 'contact-info' ); ?>
	                    
	                    <?php get_template_part( 'parts/content', 'map' ); ?>
	                    
	                  </div>
	                </div>
	              </div>
	            </section>
	          </div>
	          <div class="col-xs-12">
	            <section class="contact-form-container">
	              <?php get_template_part( 'parts/content', 'contact-form' ); ?>
	            </section>
	          </div>
	        </div>
	      </div>
	    </section>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>