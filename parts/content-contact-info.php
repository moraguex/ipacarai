<div class="contact-info">
	<h3><?php the_field('contact-information-title'); ?></h3>
	<address><span class="fa fa-map-marker" aria-hidden="true"></span> <span><?php the_field('contact-address'); ?></span></address>
	<address><span class="fa fa-phone" aria-hidden="true"></span> <span><?php echo __('Tel&eacute;fono: ', 'ipacaraiwp'); the_field('phone-number'); ?>. <?php echo __('Fax: ', 'ipacaraiwp'); the_field('fax'); ?>.</span></address>
	<address><span class="fa fa-envelope email" aria-hidden="true"></span> <a href="mailto:ipacarai@racsa.co.cr"><?php the_field('email'); ?></a></address>
</div>
