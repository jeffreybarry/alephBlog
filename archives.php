<?php
/**
* Template Name: Archives
*/
?>
<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php





			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

$categories = get_categories();
foreach($categories as $category) {
	/* test getting field from ACF */
	$term = get_queried_object();
	$issueDate = get_field('issue_date', $category);
	$coverArt = get_field('cover_art', $category);
	$imageURL = get_field('artwork-image',24);
	echo '<p>'. $category->name  .'<br>';
  echo  $issueDate .'</p>';
	echo '<img src="'.$imageURL .'">';
	/* test with known post id of 24*/
  /*echo '<img src="'.the_field('artwork-image',24) .'">';*/
}




				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
