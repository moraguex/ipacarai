<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<header class="page-head">
								<h1 class="page-title">404</h1>
							</header><!-- .page-header -->
							<div class="page-content">
								<h2><?php _e( 'P&aacute;gina no encontrada', 'ipacaraiwp' ); ?></h2>
								<p><?php _e( 'Lo sentimos! La p&aacute;gina solicita puede haber sido eliminada o cambio de nombre.', 'ipacaraiwp' ); ?></p>

								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-lg btn-secondary"><?php _e( 'Regresar al inicio', 'ipacaraiwp' ); ?></a>

							</div><!-- .page-content -->
						</div>
					</div>
				</div>
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
