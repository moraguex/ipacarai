  <footer class="main-footer" role="contentinfo">
		<div class="main-footer-top">
	    <div class="container">
				<div class="row footer-logos">
					<div class="col-xs-6 col-sm-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ipacarai-logo.png" class="img-responsive ipacarai-logo" alt="Ipacarai Logo"></div>
          <div class="col-xs-6 col-sm-4 col-sm-push-4"><span class="escud-logo">Escud</span></div>
					<div class="col-xs-12 col-sm-4 col-sm-pull-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pyme-logo.png" class="img-responsive pyme-logo" alt="Pyme Logo"></div>
				</div>
        <div class="row">
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
