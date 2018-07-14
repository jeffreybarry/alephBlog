<?php
/**
 * The template for displaying listing of posts in a category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Aleph
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<h2 class="category-heading">Category: <?php single_cat_title(); ?></h2>
		<?php

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );




		endwhile; // End of the loop.
		the_posts_navigation();

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
