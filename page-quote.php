<?php
/**
 * Template Name: Quote
 *
 * @package ocs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('simple');

?>

<div id="page-wrapper">

	<div class="bg-dark wrapper">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col"><div class="text-sm mb-3 text-white"><strong>Free Cleaning Quote</strong></div></div>
				
			</div>
			
			<div class="row justify-content-between">
				
				<div class="col-md-6">
										
					<h2 class="text-white">Request a free commercial cleaning quote</h2>
					
				</div>
				
				<div class="col-md-3 align-self-center">
					
					<a href="<?php echo home_url('/schedule'); ?>" class="btn btn-primary btn-lg btn-block text-left">
						
						<div class="d-flex">
							
							<div class="align-self-center mr-3">
								
								<i class="fa fa-2x fa-calendar"></i>
								
							</div>
							
							<div>Schedule your cleaning service</div>
						
						</div>	
					
					</a>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper-sm">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-lg-8">
					
					<div class="bg-light p-5">
						
						<p class="text-lg mb-4"><strong>Fill out the form below to request more information.</strong></p>
						
						<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true" tabindex="49"]' ); ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div><!-- #page-wrapper -->

<?php get_footer();
