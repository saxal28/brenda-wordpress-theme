<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brenda-website
 */

?>

<?php $loop = new WP_Query(array(
	'post_type' => "footer",
	'orderby' => 'post_id',
	'order' => 'ASC')); ?>

<?php while ( $loop -> have_posts() ) : $loop -> the_post(); ?>

	<div class="footer">
		<div class="container">
			<div class="grid-2_sm-1 grid-noGutter">
				<div class="col-2_sm-12_sm-12_sm-0_xs-0">
					<h4 class="footer-category">Quick Links</h4>
					<a class="footer-text" href="/">Home</a>
					<a class="footer-text" href="/gallery">Gallery</a>
					<a class="footer-text" href="/characters">Characters</a>
					<a class="footer-text" href="/pricing">Pricing</a>
					<a class="footer-text" href="/contact">Contact</a>
					<a class="footer-text" href="/book-now">Book Now</a>
				</div><div class="col-2_sm-12_sm-12_sm-0_xs-0">
					<h4 class="footer-category">Contact Info</h4>
					<p class="footer-text">Email: <?php the_field('footer_email')?></p>
					<p class="footer-text">Phone: <?php the_field("footer_phone")?></p>
					<!-- <p class="footer-text">Name: Alan Sax</p> -->
				</div>
				<div class="col-8_sm-12">
					<h4 class="footer-category">Follow Us on Social Media</h4>
					<div class="social-media-row">
						<a href="<?php the_field("footer_facebook_link")?>"><img src="http://i.imgur.com/UmXUdRb.png" alt=""></a>
						<a href="<?php the_field("footer_twitter_link")?>"><img src="http://i.imgur.com/9jWRNcE.png" alt=""></a>
						<a href="<?php the_field("footer_instagram_link")?>"><img src="http://i.imgur.com/gZMSGP0.png" alt=""></a>
					</div>
					<h4 class="footer-watermark">Like the Design? Contact the Developer: Alan Sax</h4>
				</div>
			</div>
		</div>
	</div>

<?php  endwhile; ?>


<?php wp_footer(); ?>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> -->

</body>
</html>
