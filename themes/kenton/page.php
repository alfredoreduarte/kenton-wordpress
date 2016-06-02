<?php include (TEMPLATEPATH . '/head.php'); ?>
<body>
	<?php include (TEMPLATEPATH . '/jumbotron-small.php'); ?>

	<!-- content -->
	<div class="container-fluid">
		<div class="col-md-12">
			<?php if ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endif; ?>
		</div>
	</div>
	<!-- content -->

	<!-- Banners -->
	<div class="container-fluid">
		<div class="col-md-4">
			<div class="thumbnail thumbnail-post">
				<img src="<?php bloginfo('template_url'); ?>/images/banner1.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail thumbnail-post">
				<img src="<?php bloginfo('template_url'); ?>/images/banner2.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail thumbnail-post">
				<img src="<?php bloginfo('template_url'); ?>/images/banner3.png" class="img-responsive">
			</div>
		</div>
	</div>
	<!-- Banners -->
	
	<?php get_footer(); ?>

	<!--  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- <script src="/js/app.bundle.js"></script> -->
	<?php include (TEMPLATEPATH . '/scripts.php'); ?>
</body>
</html>