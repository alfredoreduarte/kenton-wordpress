<!-- Banners -->
<div class="container-fluid">
	<?php
	$loop = new WP_Query( array( 'post_type' => 'banner', 'posts_per_page' => 3 ) );
	while ( $loop->have_posts() ) : $loop->the_post();?>
	<?php 
		$image = get_field('image');
	?>
	<div class="col-md-4">
		<a href="<?php echo get_field('link'); ?>" target="_blank" class="thumbnail thumbnail-post">
			<img src="<?php echo $image['url']; ?>" class="img-responsive">
		</a>
	</div>
	<?php endwhile; $loop->wp_reset_query(); ?>
</div>
<!-- Banners -->