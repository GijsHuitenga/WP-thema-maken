
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="author" content="Gijs Huitenga">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<title><?php bloginfo('name'); ?></title>

	</head>

	<body>

		<header class="header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/newYorkSkyline.jpg');">
			<div class="container">
				<nav>
					<?php $argumenten = array('theme_location' => 'hoofdmenu', ); ?>
					<?php wp_nav_menu($argumenten); ?>
				</nav>
				<a href="<?php echo home_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
				<p><?php bloginfo('description'); ?></p>
			</div>
		</header>
