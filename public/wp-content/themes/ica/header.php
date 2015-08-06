<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<meta charset="utf-8">
	<title><?php wp_title(' | ', true, 'right'); ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<!-- Mobile
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<!--
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	-->
	
	<!-- Core Header
	================================================== -->
	<?php wp_head(); ?>
	
	<script>
		jQuery(document).ready(function($) {
	    	$("#menu-mobile-nav").tinyNav({
			  active: 'current_page_item', // String: Set the "active" class
			  header: 'Navigation', // String: Specify text for "header" and show header instead of the active item
			  indent: '- ', // String: Specify text for indenting sub-items
			});
	  	});
	</script>

</head>
<body <?php body_class(); ?>>

	<!-- Header / Nav / Global Etc
	================================================== -->
	<section>
		<header>
			<div id="utility-container" class="big-container">
				<div class="container">
					<div class="twelve columns">
						<ul class="social-menu">
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon_facebook_blue.png" alt="Illinois Cycling Association Facebook Profile" width="10" height="18"></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon_twitter_blue.png" alt="Illinois Cycling Association Twitter Profile" width="21" height="17"></a></li>
						</ul>
						<?php wp_nav_menu( array( 'theme_location' => 'utility-menu' ) ); ?>
					</div>					
				</div>
			</div>
			<div id="main-nav-container" class="big-container">
				<div class="container">
					<div class="twelve columns">
						<nav class="clearfix">
							<a itemprop="url" href="<?php echo home_url();?>" title="Home" class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo_ICA.png" class="scale-with-grid" /></a>
							<?php wp_nav_menu( array( 'theme_location' => 'main-menu-left' ) ); ?>
							<?php wp_nav_menu( array( 'theme_location' => 'main-menu-right' ) ); ?>
							<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'container_id' => 'mobile-menu' ) ); ?>
						</nav>
					</div>
				</div>
			</div>
		</header>
	</section>
	<!-- End Header -->
