<?php include (TEMPLATEPATH . '/head.php'); ?>
<body>
	<div class="jumbotron jumbotron-small">
		<?php include (TEMPLATEPATH . '/navbar.php'); ?>
		<div class="container-fluid jumbotron-small-content">
			<!-- <h1 class="jumbotron-small-title"><?php the_title();?></h1> -->
		</div>
	</div>

	<!-- content -->
	<div class="container">
		<div class="col-sm-7">
			<?php if ( have_posts() ) : the_post(); ?>
				<h1 class="page-header"><?php the_title();?></h1>
				<?php the_content(); ?>
			<?php endif; ?>
		</div>
		<div class="col-sm-4 col-sm-offset-1">
			<?php
			$loop = new WP_Query( array( 'posts_per_page' => 3 ) );
			while ( $loop->have_posts() ) : $loop->the_post();?>
			<?php 
				$image = get_field('featured_image');
			?>
			<!-- <div class="col-md-4"> -->
				<a href="<?php the_permalink();?>" class="thumbnail thumbnail-post">
					<img src="<?php echo $image['url']; ?>" class="img-responsive">
					<div class="caption">
						<p class="h4"><?php the_title();?></p>
					</div>
				</a>
			<!-- </div> -->
			<?php endwhile; $loop->wp_reset_query(); ?>
		</div>
	</div>
	<!-- content -->
	
	<?php get_footer(); ?>

	<!--  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- <script src="/js/app.bundle.js"></script> -->
	<?php include (TEMPLATEPATH . '/scripts.php'); ?>
</body>
</html>