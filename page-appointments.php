<?php
/**
 * Template Name: Appointments
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
			
			<div class="row justify-content-between">
				
				<div class="col-md-6">
										
					<h2 class="text-white">Appointments</h2>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-lg-12">
					
					<div class="">
												
						<?php echo do_shortcode( '[ga_provider_appointments]' ); ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div><!-- #page-wrapper -->

<?php get_footer();
