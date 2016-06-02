<?php include (TEMPLATEPATH . '/head.php'); ?>
<body>
	<div class="jumbotron jumbotron-small">
		<?php include (TEMPLATEPATH . '/navbar.php'); ?>
		<div class="container jumbotron-small-content">
			<div class="col-sm-12">
				<h2 class="h1 jumbotron-small-title">Motos</h2>
			</div>
		</div>
	</div>

	<!-- content -->
	<div class="container">
		<div class="col-sm-6">
			<?php if ( have_posts() ) : the_post(); ?>
				<h1 class="title-underlined-semi text-uppercase h3" style="margin-bottom: 26px">
					<b><?php the_title();?></b>
				</h1>
				<?php the_content(); ?>
				<hr/>
				<h5 class="text-uppercase"><b><u>Precio</u></b></h5>
				<p><?php echo get_field('price'); ?></p>
			<?php endif; ?>
			<?php
			if( have_rows('features') ): ?>
				<hr/>
				<h5 class="text-uppercase"><b><u>Características</u></b></h5>
				<dl class="dl-horizontal">
				<?php while ( have_rows('features') ) : the_row();
					if( get_row_layout() == 'feature' ): ?>
						<dt><?php the_sub_field('name'); ?></dt>
						<dd><?php the_sub_field('value'); ?></dd>
					<?php endif;
				endwhile;?>
				</dl>
			<?php endif;?>
		</div>
		<div class="col-sm-6">
			<?php 
			$images = get_field('images');
			if( $images ): ?>
				<div class="product-slider-main">
					<?php foreach( $images as $image ): ?>
						<div>
							<a href="javascript:void(0)">
								 <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
							</a>
							<p><?php echo $image['caption']; ?></p>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="product-slider-nav">
					<?php foreach( $images as $image ): ?>
						<div>
							<a href="javascript:void(0)">
								 <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
							</a>
							<p><?php echo $image['caption']; ?></p>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
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