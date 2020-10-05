<?php
/**
 * Template Name: Schedule
 *
 * @package ocs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('simple');

?>

<div id="page-wrapper">

	<div class="bg-dark wrapper-sm">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col"><div class="text-sm mb-3 text-white"><strong>Schedule</strong></div></div>
				
			</div>
			
			<div class="row justify-content-between">
				
				<div class="col-md-6">
										
					<h2 class="text-white">Schedule your Cleaning Service</h2>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper-sm">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-lg-8">
					
					<div class="bg-light p-5">
						
						<h3 class="mb-5 text-center">Get Your Cleaning Job on Our Calendar</h3>
						
						<?php echo do_shortcode( '[gravityform id="2" title="false" description="false" ajax="true" tabindex="49"]' ); ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div><!-- #page-wrapper -->

<?php get_footer();
