<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear w-100" role="banner">
				<div class="container">
					<div class="d-flex align-items-center w-100">
						<div class="mr-auto">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo-bookmark.svg" class="bookmark-logo" alt="Bookmark">
							</a>
						</div>

						<div class="ml-auto text-right">
							<div class="header-menu__desktop d-lg-block d-none">
								<div>
									<?php wp_nav_menu(array('theme_location' => 'footer-menu', 'fallback_cb' => 'false')); ?>
								</div>
								<div>
								<a href="#" class="btn">LOGIN</a>
								</div>
							</div>

							<div class="d-lg-none">
								<div id="nav-lines">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- /header -->
			<div class="burger-content vh-100 w-100 text-center">
				<?php wp_nav_menu(array('theme_location' => 'header-menu', 'fallback_cb' => 'false')); ?>
				<div class="social-menu flex justify-content-center w-100">
					<ul>
						<li>
							<a href="<?php the_field('facebook', $postid); ?>" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?php the_field('twitter', $postid); ?>" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?php the_field('linkedin', $postid); ?>" target="_blank">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?php the_field('instagram', $postid); ?>" target="_blank">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
