<?php
/**
 * The Header for our theme.
 *
 * WARNING: This template file is a core part of the
 * Theme Blvd WordPress Framework. It is advised
 * that any edits to the way this file displays its
 * content be done with via hooks, filters, and
 * template parts.
 *
 * @author		Jason Bobich
 * @copyright	Copyright (c) Jason Bobich

 * @package 	Theme Blvd WordPress Framework
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-68203995-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-68203995-1');
		</script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/framework/assets/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
if (has_post_thumbnail()) {
?>
<meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />	
<?php
} else {
?>
<meta property="og:image" content="http://centennial.provo.edu/wp-content/uploads/2015/09/cms-welcome-slide.jpg" />
<?php
}
?>
<?php wp_head(); ?>
<link rel="shortcut icon" href="http://centennial.provo.edu/wp-content/uploads/2015/09/cms-favicon.png" />
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Exo+2:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
</head>
<body <?php body_class(); ?>>
<?php themeblvd_before(); ?>
<div id="wrapper">
	<div id="container">

		<?php themeblvd_header_before(); ?>

		<!-- HEADER (start) -->

		<div id="top">
			<header id="branding" role="banner">
				<div class="content">
					<?php
					/**
					 * Display header elements.
					 */
					themeblvd_header_top();
					themeblvd_header_above();
					themeblvd_header_content();
					themeblvd_header_menu();
					?>
				</div><!-- .content (end) -->
			</header><!-- #branding (end) -->
		</div><!-- #top (end) -->
<p class="contactinfo">305 East 2320 North Provo, Utah 84604 <span><strong>Phone:</strong> (801) 370-4621 <strong>Fax:</strong> (801) 370-4626</span></p>
		<!-- HEADER (end) -->

		<?php
		// After header
		themeblvd_header_after();

		// Featured area (above)
		if ( themeblvd_config( 'featured' ) ) {
			themeblvd_featured_start();
			themeblvd_featured();
			themeblvd_featured_end();
		}

		// Start main area
		themeblvd_main_start();
		themeblvd_main_top();

		// Breadcrumbs
		themeblvd_breadcrumbs();

		// Before sidebar+content layout
		themeblvd_before_layout();