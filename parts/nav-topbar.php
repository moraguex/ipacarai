<nav class="navbar ipacarai-navbar">
    <div class="container">
       <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
        <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ipacarai-navbar-collapse" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

          
          	<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
        </div>
       
	    <?php ipacarai_top_nav(); ?>

    </div>        
</nav>