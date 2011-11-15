<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>"><!-- utf-8, I would hope -->

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
		More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- custom SEO information -->
	<title><?php
		wp_title( '|', true, 'right' );
		if($post->post_parent) {
			$parent_title = get_the_title($post->post_parent);
			echo $parent_title." &laquo; ";
		}
		bloginfo('name');
	?></title>
	<meta name="description" content="<?php if (is_single()) { the_excerpt(); } else {
		bloginfo('name'); } echo " - "; bloginfo('description'); ?>" />
	<meta name="rating" content="general">
	<meta name="author" content="Theo Pak">

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<!-- CSS: implied media=all -->
	<!-- CSS concatenated and minified via ant build script-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">
	<!-- end CSS-->

	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/modernizr-2.0.6.min.js"></script>

	<?php wp_head(); ?>

</head>
<body>

	<header>
		<h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
		<nav>
			<?php wp_nav_menu( array( 'container' => null, 'depth' => '1', 'theme_location' => 'primary' ) ); ?>
			<!--<ul>
				<li class="current_page_item"	><a class="home" 		href="">Home</a></li>
				<li	class="page_item"			><a class="services" 	href="">Our Services</a></li>
				<li	class="page_item"			><a class="whyus" 		href="">Why Us?</a></li>
				<li	class="page_item"			><a class="about" 		href="">About Us</a></li>
				<li class="right"><a data-reveal-id="loginModal">login/signup</a></li>
			</ul>-->
		</nav>
	</header>

	<div id="main-wrapper">

