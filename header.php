<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aleph
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- start Bootstrap container -->
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aleph' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<section class="topbanner" id="typelogo-container">
			<div class="row">
				<div class="col-md-3">
					<span id="typelogo"><a href="http://interlitq.org">Interlitq</a></span>
				</div>
				<nav class="nav nav-pills mx-auto my-3 mr-md-3  my-md-3 d-flex flex-column flex-sm-row nav-justified" >
					<a class="nav-item nav-link btn-ilqmenu" href="http://interlitq.org/past_issues.php">Archives</a>
					<a class="nav-item nav-link  btn-ilqmenu" href="masthead.html">Masthead</a>
					<a class="nav-item nav-link btn-ilqmenu active" href="<?php echo home_url(); ?>">Blog</a>
					<a class="nav-item nav-link btn-ilqmenu" href="http://interlitq.org/contact_us.php">Submit</a>
					<a class="nav-item nav-link btn-ilqmenu-donate" href="http://interlitq.org/suport_us.php">Donate</a>
				</nav>
			</div>
		</section>
		</div><!-- .site-branding -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
