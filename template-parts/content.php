<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aleph
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
	<header class="entry-header">
		<section class="container">
			<div class="row">
				<div class="col-md-6 offset-md-1">
				<!-- call artwork -->
				<!-- end call artwork -->
			</div> <!-- end artwork div -->
	<!-- start section for title and author -->
	<section class="col-md-10">
		<?php
		if ( is_singular() ) :
			the_title( '<p><span class="entry-title single-post">', '</p>' );
		else :
			echo '<p><span class="entry-title"><a href="' . esc_url( get_permalink() ) . '" >';
			echo mb_strimwidth(get_the_title(), 0, 125, '...');
			echo '</a></p>';
			/* the_title( '<p><span class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); */
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			</section>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php aleph_post_thumbnail(); ?>

	<div class="entry-content row">
	<div class="col-md-10 offset-md-1">
		<article class="workBody">
	<?php
	the_content( sprintf(
		wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'aleph' ),
			array(
				'span' => array(
					'class' => array(),
				),
			)
		),
		get_the_title()
	) );

	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aleph' ),
		'after'  => '</div>',
	) );
	?>
		</article>
	</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php aleph_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
