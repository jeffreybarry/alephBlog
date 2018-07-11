<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aleph
 */

?>

	</div><!-- #content -->
	<section class="container join-mailing-list">
	<div class="row">
	  <div class="col-md-10">
	    <h2 class="separator text-center" id="subscribe">Subscribe to our Newsletter</h2>
	</div>
	</div>
	<form  class="form row">
	  <div class="col-md-5 offset-md-2">
	    <input type="email" class="form-control" id="inputEmail" placeholder="Email Address">
	</div>
	<button type="submit" class="btn-subscribe">SUBSCRIBE</button>

	</form>



	</section>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
<p> ... </p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page ends Bootstrap container-->

<?php wp_footer(); ?>

</body>
</html>
