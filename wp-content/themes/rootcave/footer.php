<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Root_Cave
 */

?>


<?php wp_footer(); ?>
<section id="get-in-touch">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Get in Touch</h2>
			<p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
		</div>
	</div>
</section><!--/#get-in-touch-->


<section id="contact">
	<div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331"></div>
	<div class="container-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-8">
					<div class="contact-form">
						<h3>Contact Info</h3>

						<address>
							<strong>IT Flavor, LLC.</strong><br>
							<li class="fa fa-map-marker"></li> 6 Selooly St.<br>
							Dokki, Giza , Egypt 12366<br>
							<li class="fa fa-mobile"></li> (+2001) 0053-98098 <br>
							<li class="fa fa-envelope"></li> info@it-flavor.com
						</address>

						<form id="main-contact-form" name="contact-form" method="post" action="#">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Name" required>
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="text" name="subject" class="form-control" placeholder="Subject" required>
							</div>
							<div class="form-group">
								<textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Send Message</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--/#bottom-->

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				&copy; 2015 IT Flavor LLC. Developed by <a target="_blank" href="http://rootcave.com" title="Root Cave">Root Cave</a>
			</div>
			<div class="col-sm-6">
				<ul class="social-icons">
					<li><a href="https:///facebook.com/itflavor"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/itflavor"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					<li><a href="#"><i class="fa fa-behance"></i></a></li>
					<li><a href="#"><i class="fa fa-flickr"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					<li><a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-github"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer><!--/#footer-->
<script src="<?php bloginfo('template_directory');  ?>/assets/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory');  ?>/assets/js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="<?php bloginfo('template_directory');  ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory');  ?>/assets/js/mousescroll.js"></script>
<script src="<?php bloginfo('template_directory');  ?>/assets/js/smoothscroll.js"></script>
<script src="<?php bloginfo('template_directory');  ?>/assets/js/jquery.prettyPhoto.js"></script>
<script src="<?php bloginfo('template_directory');  ?>/assets/js/jquery.isotope.min.js"></script>
<script src="<?php bloginfo('template_directory');  ?>/assets/js/jquery.inview.min.js"></script>
<script src="<?php bloginfo('template_directory');  ?>/assets/js/wow.min.js"></script>
<script src="<?php bloginfo('template_directory');  ?>/assets/js/main.js"></script>


</body>
</html>
