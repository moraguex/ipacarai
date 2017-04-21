<?php 

$image = get_field('banner-background');

if( !empty($image) ): ?>
<figure class="product-images">



	<img src="<?php echo $image['url']; ?>" class="img-responsive banner" alt="<?php echo $image['alt']; ?>" />



<?php 

	$image = get_field('banner-product-image');

	if( !empty($image) ): ?>

		<img src="<?php echo $image['url']; ?>" class="img-responsive product-image" alt="<?php echo $image['alt']; ?>" />

	<?php endif; ?>

</figure>
<?php endif; ?>