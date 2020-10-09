<?php
/**
 * Template Name: Home
 *
 * @package ocs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div id="wrapper-page">

	<div id="wrapper-hero" class="bg-light">
		
		<div class="container">
			
			<div class="row justify-content-between">
				
				<div class="col-lg-7 col-xl-6 align-self-center">
				
					<div class="py-5 py-xl-0">
						
						<h1 class="text-center text-lg-left"><?php the_field('hero_title'); ?></h1>
						
						<p class="mt-3 mb-5 text-center text-lg-left"><?php the_field('hero_sub_text'); ?></p>
						
						<div class="row justify-content-center justify-content-lg-between mb-3 pb-3">
							
							<div class="col-12 col-md-4 col-lg-5 align-self-center mb-4 mb-md-0">
								
								<p class="text-lg text-center text-md-left mb-0"><strong><?php the_field('hero_cta_text_1'); ?></strong></p>
								
							</div>
							
							<div class="col-9 col-md-5 col-lg-6 align-self-center">
							
								<a href="<?php echo home_url('/quote'); ?>" class="btn btn-primary btn-block"><?php the_field('quote_button_label'); ?></a>
								
							</div>
							
							<div class="col-9 col-lg-12">
								
								<div class="border-bottom py-3"></div>
								
							</div>
							
						</div>
													
						<div class="row justify-content-center justify-content-lg-between mt-3">
							
							<div class="col-12 col-md-4 col-lg-5 align-self-center mb-4 mb-md-0">
								
								<p class="text-lg text-center text-md-left mb-0"><strong><?php the_field('hero_cta_text_2'); ?></strong></p>
								
							</div>
							
							<div class="col-9 col-md-5 col-lg-6 align-self-center">
							
								<a href="<?php echo home_url('/schedule'); ?>" class="btn btn-secondary btn-block"><i class="fa fa-calendar mr-2"></i> <?php the_field('schedule_button_label'); ?></a>
								
							</div>
							
						</div>		
						
					</div>			
					
				</div>
				
				<div class="col-lg-5 col-xl-6 align-self-stretch">
					
					<?php $hero_img = wp_get_attachment_image_url( get_field('hero_image'), 'Hero', false ); ?>
					
					<div class="wrapper-hero-img h-100" style="background-image: url( <?php echo $hero_img; ?> );">
						
						<?php echo wp_get_attachment_image( get_field('hero_image'), 'Hero', false, array('class'=>'d-none d-xl-block img-fluid mb-5 mb-md-0') ); ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="wrapper-about" class="wrapper text-center">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-lg-9">
					
					<h2 class="mb-4"><?php the_field('section_2_title'); ?></h2>
					
					<p class="lead"><?php the_field('section_2_text'); ?></p>
					
					<h4 class="mb-5"><?php the_field('section_2_subtitle'); ?></h4>
					
				</div>
				
			</div>
			
			<div class="row justify-content-center">
				
				<?php while( have_rows('section_2_services') ): the_row(); ?>
				
					<div class="col-md-8 col-lg-4 align-self-stretch mb-3 mb-lg-0">
						
						<div class="box h-100">
							
							<div class="box-icon">
								
								<?php echo wp_get_attachment_image( get_sub_field('icon'), 'Icon', false ); ?>
								
							</div>
							
							<div class="box-title">
								
								<?php the_sub_field('service_title'); ?>
								
							</div>
							
							<div class="box-footer">
								
								<?php the_sub_field('service_companies'); ?>
								
							</div>
							
						</div>
						
					</div>
				
				<?php endwhile; ?>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="wrapper-promo" class="bg-dark">
		
		<div class="container">
			
			<div class="row justify-content-between">
				
				<div class="col-md-7 col-xl-6 align-self-center order-1 order-lg-0">
					
					<div class="py-5">
					
						<h2 class="text-white mb-3"><?php the_field('section_3_title'); ?></h2>
					
						<p class="text-lg text-white mb-5"><?php the_field('section_3_text'); ?></p>
					
						<a href="<?php echo home_url('/quote'); ?>" class="btn btn-primary"><?php the_field('section_3_label'); ?></a>
						
					</div>
					
				</div>
				
				<div class="col-md-5 col-xl-6 align-self-stretch order-0 order-lg-1">
					
					<?php $hero_img = wp_get_attachment_image_url( get_field('section_3_image'), 'Hero', false ); ?>
					
					<div class="wrapper-hero-img h-100" style="background-image: url( <?php echo $hero_img; ?> );">
						
						<?php echo wp_get_attachment_image( get_field('section_3_image'), 'Hero', false, array('class'=>'d-none d-xl-block img-fluid mb-5 mb-md-0') ); ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="wrapper-reviews" class="wrapper">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-lg-10 text-center">
					
					<h2 class="mb-5"><?php the_field('section_4_title'); ?></h2>
										
				</div>
				
				<div class="col-lg-10 mb-5">
					
					<div class="d-flex flex-column flex-md-row">
						
						<div class="mr-md-4 mb-4 mb-md-0 align-self-center">
							
							<div class="text-center reviewer-name mr-md-2 px-5 px-md-0">
								
								<?php echo wp_get_attachment_image( get_field('section_4_review_img_1'), 'Square', false, array('class'=>'rounded-circle img-fluid mb-3') ); ?>
								
								<div class="mb-2">
									
									<h5><?php the_field('section_4_review_name_1'); ?></h5>
									
								</div>
								
								<div class="text-xs">
								
									<?php the_field('section_4_review_title_1'); ?>
									
								</div>
								
							</div>
							
						</div>
						
						<div class="arrow-left align-self-center d-none d-md-block"></div>
						
						<div class="review align-self-center p-4 p-md-5">
							
							<em><?php the_field('section_4_review_1'); ?></em>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-lg-10">
					
					<div class="d-flex flex-column flex-md-row justify-content-center">
						
						<div class="mr-md-4 mb-4 mb-md-0 align-self-center">
							
							<div class="text-center reviewer-name mr-md-2 px-5 px-md-0">
								
								<?php echo wp_get_attachment_image( get_field('section_4_review_img_2'), 'Square', false, array('class'=>'rounded-circle img-fluid mb-3') ); ?>
								
								<div class="mb-2">
									
									<h5><?php the_field('section_4_review_name_2'); ?></h5>
									
								</div>
								
								<div class="text-xs">
								
									<?php the_field('section_4_review_title_2'); ?>
									
								</div>
								
							</div>
							
						</div>
						
						<div class="arrow-left align-self-center d-none d-md-block"></div>
						
						<div class="review align-self-center p-4 p-md-5">
							
							<em><?php the_field('section_4_review_2'); ?></em>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</div><!-- #page-wrapper -->

<?php get_footer();
