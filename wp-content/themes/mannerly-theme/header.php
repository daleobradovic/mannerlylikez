<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-sitename-com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">

    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title><?php wp_title(''); ?></title>




	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->


	<!--  Mobile Viewport meta tag
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width -->
	<!-- Uncomment to use; use thoughtfully!-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">


	<?php wp_head(); ?>


	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

</head>

<body <?php body_class(); ?>>
	<header id="header_w">
        <div class="container-box">
			<h1>Welcome, testing GIT.</h1>
			<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/></a>
            <nav id="navigation" class="">
                <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
        	</nav>
      	</div>
		<div class="cl"></div>
	</header>
	<div class="cl"></div>
	<div class="container-box">
		<?php echo the_widget('qTranslateXWidget', array('type' => 'both', 'hide-title' => true) ); ?>
	</div>

