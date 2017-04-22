<aside class="product-categories">
	<ul class="nav">
		<li><a class="active" data-filter="*">Todos</a></li>
	<?php
		$categories = get_categories($args);
			
			foreach ($categories as $cat) {
				echo '<li>'; 
				?>
				<a data-filter=".<?=$cat->slug;?>"><?=$cat->name;?></a>
				<?php
				echo '</li>';
			}
	?>
	</ul>
</aside>