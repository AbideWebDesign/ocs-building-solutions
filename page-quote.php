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

	<div class="bg-dark wrapper-sm">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col"><div class="text-sm mb-3 text-white"><strong>Free Quote</strong></div></div>
				
			</div>
			
			<div class="row justify-content-between">
				
				<div class="col-md-7 col-xl-6">
										
					<h2 class="text-white"><?php the_field('quote_page_title'); ?></h2>
					
				</div>
				
				<div class="col-md-5 col-xl-3 align-self-center mt-4 mt-md-0">
					
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
			
			<div class="row justify-content-between">
				
				<div class="col-lg-7 col-xl-6">
					
					<h3 class="mb-3"><?php the_field('quote_form_title'); ?></h3>
					
					<p class="text-sm mb-4"></p><?php the_field('quote_form_text'); ?></p>
					
					<div class="bg-light p-3 p-md-4">
												
						<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true" tabindex="49"]' ); ?>
						
						<div class="d-flex mt-3 px-md-5 text-xs">
							
							<div class="mr-4 align-self-center"><i class="fa fa-lock fa-2x text-primary"></i> </div>
							
							<div><strong>Your privacy is important to us. We won't share or sell your information.</strong></div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-lg-5 col-xl-5 mt-5 mt-lg-0">
					
					<h4 class="mb-4"><?php the_field('quote_sidebar_title'); ?></h4>
					
					<ul class="fa-ul">
						
						<?php while( have_rows('quote_bullet_list') ): the_row(); ?>
						
							<li class="mb-3"><span class="fa-li text-primary"><i class="fa fa-check-square"></i></span> <?php the_sub_field('list_item'); ?></li>
							
						<?php endwhile; ?>
						
					</ul>
					
					<div class="d-flex mt-5 justify-content-center justify-content-lg-between">
						
						<div class="col-6 col-md-4 col-lg-6"><?php echo wp_get_attachment_image( get_field('quote_sidebar_img_1'), 'Full', false, array('class'=>'img-fluid') ); ?></div>
						
						<div class="col-6 col-md-4 col-lg-6"><?php echo wp_get_attachment_image( get_field('quote_sidebar_img_2'), 'Full', false, array('class'=>'img-fluid') ); ?></div>
						
					</ul>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div><!-- #page-wrapper -->

<?php get_footer();
