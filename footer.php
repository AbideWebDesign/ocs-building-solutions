<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ocs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div id="wrapper-footer" class="wrapper-sm bg-light">

	<div class="container">
		
		<div class="row justify-content-center justify-content-md-between">
			
			<div class="col-12 col-md-3 text-center text-md-left align-self-center">
				
				<div class="mb-3">
					
					<a id="wrapper-logo" href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image( get_field('logo', 'options'), 'Full', false, array('class'=>'img-fluid') ); ?></a>
					
				</div>
				
				<p class="text-sm mb-0"><?php the_field('address', 'options'); ?><br><?php the_field('address_2', 'options'); ?></p>
				
			</div>
			
			<div class="col-12 col-md-8 align-self-center mt-4 mt-md-0 ml-auto">
				
				<div class="row">
					
					<div class="col-6 col-md-6 col-lg-4 order-1 order-md-1">
						
						<a href="<?php echo home_url('/schedule'); ?>" class="btn btn-secondary btn-block"><i class="fa fa-calendar mr-1 d-none d-md-inline-block"></i> Schedule</a>
						
					</div>
					
					<div class="col-6 col-md-6 col-lg-4 d-none d-md-block order-md-2">
						
						<a href="<?php echo home_url('/quote'); ?>" class="btn btn-primary btn-block">Get a Quote</a>
						
					</div>
											
					<div class="col-6 col-md-12 col-lg-4 text-right align-self-center order-0 order-md-0 mb-md-3 mb-0 mb-xl-0">
						
						<p class="text-lg text-primary mb-0"><strong><a href="tel:<?php the_field('phone', 'options'); ?>"><?php the_field('phone', 'options'); ?></a></strong></p>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</div><!-- wrapper end -->

<div id="wrapper-footer-bottom" class="bg-dark py-4 text-center">
	
	<div class="text-xs text-white">Copyright <?php echo date('Y'); ?> All Rights Reserved. <a class="text-white" href="https://abidewebdesign.com" target="_blank">Website Design and Maintenance by Abide Web Design</a></div>
	
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

