  <footer class="main-footer" role="contentinfo">
		<div class="main-footer-top">
	    <div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ipacarai-logo.png" class="img-responsive ipacarai" alt="Ipacarai Logo"></div>
          <div class="col-xs-6 col-sm-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/escud-logo.png" class="img-responsive escud" alt="Escud Logo"></div>
					<div class="col-xs-12 col-sm-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pyme-logo.png" class="img-responsive pyme" alt="Pyme Logo"></div>
					<div class="col-xs-12">
						<?php ipacarai_footer_links(); ?>
					</div>
				</div>
      </div>
    </div>
    <div class="main-footer-bottom">
    	<div class="container">
      		<div class="row">
        		<div class="col-xs-12">
          			<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
        		</div>
      		</div>
    	</div>
  	</div>
	</footer>

  <?php wp_footer(); ?>

</body>
</html>
