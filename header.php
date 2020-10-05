<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ocs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site" id="page">
	
	<div id="wrapper-navbar-top" class="bg-primary py-2">
		
		<div class="container">
			
			<div class="row justify-content-center justify-content-md-end">
				
				<div class="col-12 text-center text-md-right">
					
					<ul class="list-inline mb-0">
						
						<li class="list-inline-item mr-0"><a href="mailto: info@ocsbuildingsolutions.com">info@ocsbuildingsolutions.com</a></li>
						
						<li class="list-inline-item d-none d-md-inline-block ml-4 pl-4 border-left"><a href="<?php echo home_url('/quote'); ?>">Contact Us</a></li>
						
					</ul>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="wrapper-navbar" class="py-4 py-xl-3">

		<div class="container">
			
			<div class="row justify-content-center justify-content-md-between">
				
				<div class="col-12 col-md-3 text-center text-md-left align-self-center">
					
					<a id="wrapper-logo" href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image( get_field('logo', 'options'), 'Full', false, array('class'=>'img-fluid') ); ?></a>
					
				</div>
				
				<div class="col-12 col-md-8 align-self-center mt-4 mt-md-0 ml-auto">
					
					<div class="row justify-content-center">
						
						<div class="col-8 col-md-6 col-lg-4 order-1 order-md-1 d-none d-md-block">
							
							<a href="<?php echo home_url('/schedule'); ?>" class="btn btn-secondary btn-block"><i class="fa fa-calendar mr-1"></i> Schedule</a>
							
						</div>
						
						<div class="col-md-6 col-lg-4 d-none d-md-block order-md-2">
							
							<a href="<?php echo home_url('/quote'); ?>" class="btn btn-primary btn-block">Get a Quote</a>
							
						</div>
												
						<div class="col-md-12 col-lg-4 text-center text-md-right align-self-center order-0 order-md-0 mb-md-3 mb-0 mb-xl-0 d-none d-md-block ">
							
							<p class="text-lg text-primary mb-0"><strong><a href="tel:<?php the_field('phone', 'options'); ?>"><?php the_field('phone', 'options'); ?></a></strong></p>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>

	</div><!-- #wrapper-navbar end -->
