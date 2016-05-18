<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kenton</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include (TEMPLATEPATH . '/jumbotron.php'); ?>

	<!-- content -->
	<div class="container-fluid">
		<div class="col-md-12">
			<h2 class="h1 text-uppercase text-center">Categorías</h2>
			<h5 class="text-uppercase text-center text-muted">Nullam Ornare Sit</h5>
			<br>
			<br>
			<br>
			<div>
				<!-- Nav tabs -->
				<?
				$terms = get_terms('bike_type',
					array(
						'hide_empty' => false,
						'orderby'    => 'name',
						'order'      => 'ASC'
					)
				);
				?>
				<ul class="nav nav-tabs nav-justified product-tabs" role="tablist">
					<?php
					$terms_index = 0;
					foreach( $terms as $term ):?>
					<li role="presentation" class="<? echo $terms_index == 0 ? 'active' : null ?>">
						<a href="#tab_<?php echo $term->slug; ?>" aria-controls="tab_<?php echo $term->slug; ?>" role="tab" data-toggle="tab">
							<img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name; ?>">
							<br/><small><?php echo $term->name; ?></small>
						</a>
					</li>
					<?php
						$terms_index++;
						endforeach;
					?>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content tabs-content-main">
					<?php
					$terms_posts_index = 0;
					foreach( $terms as $term ):?>
						<div role="tabpanel" class="tab-pane product-tabs-content <? echo $terms_posts_index == 0 ? 'active' : null ?>" id="tab_<?php echo $term->slug; ?>">
							<div class="col-xs-12 col-md-3">
								<?php
								$loop = new WP_Query( array( 'post_type' => 'moto', 'posts_per_page' => -1, 
									'tax_query' => array(
										array(
											'taxonomy' => 'bike_type',
											'field'    => 'slug',
											'terms'    => $term->slug,
										),
									)
								) );
								while ( $loop->have_posts() ) : $loop->the_post();?>
								<?php 
									$image = get_field('main_photo');
								?>
								<div class="thumbnail thumbnail-product">
									<img src="<?php echo $image['url']; ?>" alt="<?php the_title();?>">
									<div class="caption text-center">
										<h5><b><?php the_title();?></b></h5>
										<h6 class="text-muted">Justo Ultricies</h6>
									</div>
								</div>
								<?php endwhile; $loop->wp_reset_query(); ?>
							</div>
						</div>
					<?php
						$terms_posts_index++;
						endforeach;
					?>
				</div>
			</div>
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
	<hr/>
	<!-- Posts -->
	<div class="container-fluid">
		<div class="col-md-4">
			<div class="thumbnail thumbnail-post">
				<img src="<?php bloginfo('template_url'); ?>/images/post1.png" class="img-responsive">
				<div class="caption">
					<p class="h4">Consejos prácticos para viajar en moto este verano.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail thumbnail-post">
				<img src="<?php bloginfo('template_url'); ?>/images/post2.png" class="img-responsive">
				<div class="caption">
					<p class="h4">Cómo hacer una maleta para viajar en moto.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail thumbnail-post">
				<img src="<?php bloginfo('template_url'); ?>/images/post3.png" class="img-responsive">
				<div class="caption">
					<p class="h4">Equipamiento para el motorista.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Posts -->
	<hr/>

	<!-- Social media -->
	<div class="container-fluid">
		<div class="col-xs-12 col-md-4 col-md-offset-1">
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="...">
					</a>
				</div>
				<div class="media-body">
					<p class="media-heading">El uso del casco es obligatorio y es una necesidad para la seguridad, no del conductor, sino también de otros ocupantes de este vehículo.</p>
					<br/>
					<p class="text-right"><a href="#" class="btn btn-twitter btn-outline">Síguenos en Twitter</a></p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-4 col-md-offset-2">
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="...">
					</a>
				</div>
				<div class="media-body">
					<p class="media-heading">El uso del casco es obligatorio y es una necesidad para la seguridad, no del conductor, sino también de otros ocupantes de este vehículo.</p>
					<br/>
					<p class="text-right"><a href="#" class="btn btn-facebook btn-outline">Síguenos en Facebook</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Social media -->
	<hr/>
	
	<?php get_footer(); ?>

	<!--  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- <script src="/js/app.bundle.js"></script> -->
	<?php include (TEMPLATEPATH . '/scripts.php'); ?>
</body>
</html>