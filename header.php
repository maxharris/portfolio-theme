<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name');  echo ' ';  bloginfo('description'); ?></title>
	
	<meta name="description" content='<?php bloginfo('description'); ?>'>
  <meta name="keywords" content="...">
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/manifest.json">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header">
	<div class="container-fluid">
		<div class="logo-wrap">
			<a href="<?php echo esc_url( site_url( '/' ) ); ?>">
				<img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/max-harris-logo.svg">
			</a>
		</div>
		<div class="title-wrap">
			<?php 
				if ( (is_page() && ! is_front_page()) || is_single()) {
					echo '<h2>' . get_the_title() . '</h2>';
				}
				elseif (is_archive()) {
					echo '<h2>' . single_term_title( ' ', $title) . ' Projects</h2>';
				}
			?>
		</div>
		<div class="js-expand menu-wrap">
			<?php wp_nav_menu( array('container' => 'menu') ); ?>
			<button class="js-toggle menu-toggle">
				<span></span>
				<span></span>
				<span></span>
				<span class="sr-only">Toggle navigation</span>
			</button>
		</div>
	</div>
</header>
