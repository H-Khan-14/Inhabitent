<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="contact-info">
					<h4>CONTACT INFO</h4>
					<h5><i class="fa fa-envelope"></i>info@inhabitent.com</h5>
					<h5><i class="fa fa-phone"></i>778-456-7891</h5>
					<i class="fa fa-facebook-square"></i>
					<i class="fa fa-twitter-square"></i>
					<i class="fa fa-google-plus-square"></i>
				</div><!-- .contact-info -->
				<div id="footer-sidebar1"><!--.business-hours -->
					<?php
					if(is_active_sidebar('footer-sidebar-1')){
					dynamic_sidebar('footer-sidebar-1');
					}
					?>
				</div>
				<!-- <div class="business-hours">
					<h4>BUSINESS HOURS</h4>
					<h5><span>Monday-Friday:</span> 9am-5pm</h5>
					<h5><span>Saturday:</span> 10am-2pm</h5>
					<h5><span>Sunday:</span> Closed</h5>
				</div>.business-hours -->
				<div class="upper-right-footer">
					<a href="<?php echo home_url('/'); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg"/>
				  </a>
				</div>
				<div class="end-copyright">
					<h5>COPYRIGHT<i class="fa fa-copyright"></i>2019 INHABITENT</h5>
				</div><!--.end-copyright-->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
