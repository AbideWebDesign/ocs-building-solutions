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
						
						<li class="list-inline-item d-none d-md-inline-block ml-4 pl-4 border-left"><a href="<?php echo home_url('/contact'); ?>">Contact Us</a></li>
						
					</ul>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="wrapper-navbar" class="py-4 py-xl-3">

		<div class="container">
			
			<div class="row justify-content-center justify-content-md-between">
				
				<div class="col-12 col-md-3 text-center text-md-left">
					
					<a id="wrapper-logo" href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image( get_field('logo', 'options'), 'Full', false, array('class'=>'img-fluid') ); ?></a>
					
				</div>
				
				<div class="col-12 col-md-auto align-self-center text-center text-md-right mt-3 mt-md-0">
					
					<p class="text-lg text-primary mb-0"><strong><a href="tel:<?php the_field('phone', 'options'); ?>"><?php the_field('phone', 'options'); ?></a></strong></p>
									
				</div>
				
			</div>
			
		</div>

	</div><!-- #wrapper-navbar end -->
