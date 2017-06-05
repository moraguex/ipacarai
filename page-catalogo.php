<?php get_header(); ?>

<div id="primary" class="content-area content">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3">
					<?php get_template_part( 'parts/content', 'categories-sidebar' ); ?>
				</div>
				<div class="col-xs-12 col-md-9">

					<div class="featured-banners-container">
						<?php get_template_part( 'parts/content', 'featured-product-banner' ); ?>
					</div>

					<div class="button-group sort-by-button-group">
						<strong>Organizar por:</strong>
						<button class="btn btn-primary is-checked" data-sort-value="name">Nombre</button>
						<button class="btn btn-primary" data-sort-value="category">Categor&iacute;a</button>
					</div>

					<div class="catalog-container">
				    <?php get_template_part( 'parts/content', 'products-listing' ); ?>
			  	</div>
				</div>
			</div>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
