<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stech
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<div id="preloader">
		<div id="ctn-preloader" class="ctn-preloader">
			<div class="animation-preloader">
				<div class="spinner"></div>
				<div class="txt-loading">
					<span data-text-preloader="S" class="letters-loading">S</span>
						
					<span data-text-preloader="T" class="letters-loading">T</span>
						
					<span data-text-preloader="E" class="letters-loading">E</span>
						
					<span data-text-preloader="C" class="letters-loading">C</span>
						
					<span data-text-preloader="H" class="letters-loading">H</span>
				</div>
			</div>	
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
</div>


<body <?php body_class(); ?>>

<?php global $stech_opt; ?>

<!-- MAIN WRAPPER START -->
<div class="wrapper">
	<?php if (!empty($stech_opt['stech_header_display_none_hide']) && $stech_opt['stech_header_display_none_hide']==true): ?>	
	<div class="em40_header_area_main hdisplay_none">
	<?php else: ?>
		<div class="em40_header_area_main">
	<?php endif; ?>

<!-- HEADER TOP AREA -->
 <?php  $stech_header_topa = get_post_meta( get_the_ID(),'_stech_stech_header_topa', true );  ?>
 <?php if($stech_header_topa==1){?> 

		<div class="stech-header-top">
			<div class="<?php if(!empty($stech_opt['stech_box_layout']) && $stech_opt['stech_box_layout']=="htopt_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
									
				<!-- STYLE 1 LEFT ADDRESS RIGHT ICON  -->
				 <?php if(!empty($stech_opt['stech_top_right_layout']) && $stech_opt['stech_top_right_layout']=="header_top_1"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-8 col-sm-12">
							<div class="top-address">
								<p>							
									<?php if (!empty($stech_opt['stech_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','stech')?><?php echo esc_html($stech_opt['stech_header_top_email']); ?>"><i aria-hidden="true" class="flaticon flaticon-email"></i></i><?php echo esc_html($stech_opt['stech_header_top_email']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($stech_opt['stech_header_top_road'])): ?>
										<span><i aria-hidden="true" class="flaticon flaticon-pin-1"></i><?php echo esc_html($stech_opt['stech_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($stech_opt['stech_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','stech')?><?php echo esc_html($stech_opt['stech_header_top_mobile']); ?>"><i aria-hidden="true" class="flaticon flaticon-call"></i></i><?php echo esc_html($stech_opt['stech_header_top_mobile']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-4 col-sm-12">
							<div class="top-right-menu">
								<ul class="social-icons text-right">
									<?php 
										foreach($stech_opt['stech_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul> 
							</div>						
						</div>	
					</div>	
				<!-- STYLE 2 lEFT ICON RIGHT MENU  -->
				 <?php }elseif(!empty($stech_opt['stech_top_right_layout']) && $stech_opt['stech_top_right_layout']=="header_top_2"){?>					
					<div class="row top-both-p0">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-sm-3 col-md-3">
							<div class="top-right-menu">
									<ul class="social-icons text-left">
										<?php 
											foreach($stech_opt['stech_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>								
									</ul>									 									 				 
							</div>
						</div>					
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-9 col-sm-9">
							<div class="top-address text-right">
								<p>							
									<?php if (!empty($stech_opt['stech_header_top_road'])): ?>
										<span><i class="fa fa-map-marker"></i><?php echo esc_html($stech_opt['stech_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($stech_opt['stech_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','stech')?><?php echo esc_html($stech_opt['stech_header_top_mobile']); ?>"><i class="fa fa-phone"></i><?php echo esc_html($stech_opt['stech_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($stech_opt['stech_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','stech')?><?php echo esc_html($stech_opt['stech_header_top_email']); ?>"><i class="fa fa-envelope-o"></i><?php echo esc_html($stech_opt['stech_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
					</div>	
				<!-- STYLE 3 LEFT OPENING HOUR RIGHT ICON  -->			
				 <?php }elseif(!empty($stech_opt['stech_top_right_layout']) && $stech_opt['stech_top_right_layout']=="header_top_3"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-4 col-sm-8">
							<div class="top-address menu_18">
								<p>							
									<?php if (!empty($stech_opt['stech_header_top_opening'])): ?>
										<span><?php echo esc_html($stech_opt['stech_header_top_opening']); ?></span>										
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP MIDDLE -->
						<div class="col-xs-12 col-md-4 col-sm-4">
							<div class="top-right-menu ">
								<ul class="social-icons text-left menu_18">
									<?php 
										foreach($stech_opt['stech_social_icons'] as $key=>$value ) { 
											if($value != ''){						
											 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 									 				 
							</div>
						</div>					
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-4 col-sm-12">
							<div class="top-address em-login text-right menu_18">
								<p>							
									<?php stech_login();?>
								</p>
							</div>
						</div>	
					</div>
				<!-- STYLE 4 LEFT ADDRESS RIGHT ICON & SEARCH  -->
				 <?php }elseif(!empty($stech_opt['stech_top_right_layout']) && $stech_opt['stech_top_right_layout']=="header_top_4"){?>			
					<div class="row">
						<!-- TOP LEFT // top search menu -->
						<div class="col-xs-12 col-md-9 col-sm-8">
							<div class="top-address">
								<p>							
									<?php if (!empty($stech_opt['stech_header_top_road'])): ?>
										<span><i class="fa fa-map-marker"></i><?php echo esc_html($stech_opt['stech_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($stech_opt['stech_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','stech')?><?php echo esc_html($stech_opt['stech_header_top_mobile']); ?>"><i class="fa fa-phone"></i><?php echo esc_html($stech_opt['stech_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($stech_opt['stech_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','stech')?><?php echo esc_html($stech_opt['stech_header_top_email']); ?>"><i class="fa fa-envelope-o"></i><?php echo esc_html($stech_opt['stech_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-3 col-sm-4">
							<div class="top-right-menu litop">
								<ul class="social-icons text-right">
									<?php 
										foreach($stech_opt['stech_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>								
							</div>
							<div class="top-address em-quearys-top text-right ritop">
								<div class="em-top-quearys-area">
								   <ul class="em-header-quearys">
										<li class="em-quearys-menu">
											<i class="fa fa-search t-quearys"></i>
											 <i class="fa fa-close  t-close em-s-hidden "></i>
										</li>
									</ul>
										<!--Search Form-->
										<div class="em-quearys-inner">
											<div class="em-quearys-form">
												<form class="top-form-control" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
													<input type="text" placeholder="<?php echo esc_attr_e( 'Type Your Keyword', 'stech' ) ?>" name="s" value="<?php the_search_query(); ?>" />
													<button class="top-quearys-style" type="submit">
														<i class="fa fa-long-arrow-right"></i>
													</button>
												</form>                                
											</div>
										</div>
										<!--End of Search Form-->									
								</div>
							</div>							
						</div>	
					</div>	
		
				<?php } ?>				
			</div>
		</div>
		
 
 <?php }elseif($stech_header_topa==2){
 }else{
 if (!empty($stech_opt['stech_header_top_hide']) && $stech_opt['stech_header_top_hide']==true){ ?>	
	<!-- HEADER TOP AREA -->
		<div class="stech-header-top">
					
			<div class="<?php if(!empty($stech_opt['stech_box_layout']) && $stech_opt['stech_box_layout']=="htopt_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
									
				<!-- STYLE 1 RIGHT ICON  -->
				 <?php if(!empty($stech_opt['stech_top_right_layout']) && $stech_opt['stech_top_right_layout']=="header_top_1"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-8 col-sm-9">
							<div class="top-address">
								<p>							
									<?php if (!empty($stech_opt['stech_header_top_road'])): ?>
										<span><i class="fa fa-map-marker"></i><?php echo esc_html($stech_opt['stech_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($stech_opt['stech_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','stech')?><?php echo esc_html($stech_opt['stech_header_top_mobile']); ?>"><i class="fa fa-phone"></i><?php echo esc_html($stech_opt['stech_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($stech_opt['stech_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','stech')?><?php echo esc_html($stech_opt['stech_header_top_email']); ?>"><i class="fa fa-envelope-o"></i><?php echo esc_html($stech_opt['stech_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-4 col-sm-3">
							<div class="top-right-menu">
								<ul class="social-icons text-right">
									<?php 
										foreach($stech_opt['stech_social_icons'] as $key=>$value ) { 
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 									 				
							</div>
						</div>	
					</div>	
				<!-- STYLE 2 LEFT ICON RIGHT ADDRESS -->
				 <?php }elseif(!empty($stech_opt['stech_top_right_layout']) && $stech_opt['stech_top_right_layout']=="header_top_2"){?>					
					<div class="row top-both-p0">
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-sm-3 col-md-3">
							<div class="top-right-menu">
								<ul class="social-icons text-left">
									<?php 
										foreach($stech_opt['stech_social_icons'] as $key=>$value ) { 
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 										 
							</div>
						</div>					
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-9 col-sm-9">
							<div class="top-address text-right">
								<p>							
									<?php if (!empty($stech_opt['stech_header_top_road'])): ?>
										<span><i class="fa fa-map-marker"></i><?php echo esc_html($stech_opt['stech_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($stech_opt['stech_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','stech')?><?php echo esc_html($stech_opt['stech_header_top_mobile']); ?>"><i class="fa fa-phone"></i><?php echo esc_html($stech_opt['stech_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($stech_opt['stech_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','stech')?><?php echo esc_html($stech_opt['stech_header_top_email']); ?>"><i class="fa fa-envelope-o"></i><?php echo esc_html($stech_opt['stech_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
					</div>	
				<!-- OPENING ICON AND LOGIN  -->			
				 <?php }elseif(!empty($stech_opt['stech_top_right_layout']) && $stech_opt['stech_top_right_layout']=="header_top_3"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-4 col-sm-8">
							<div class="top-address menu_18">
								<p>							
									<?php if (!empty($stech_opt['stech_header_top_opening'])): ?>
										<span><?php echo esc_html($stech_opt['stech_header_top_opening']); ?></span>										
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP MIDDLE -->
						<div class="col-xs-12 col-md-4 col-sm-4">
							<div class="top-right-menu ">
								<ul class="social-icons text-left menu_18">
									<?php 
										foreach($stech_opt['stech_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>									 									 				 
							</div>
						</div>					
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-4 col-sm-12">
							<div class="top-address em-login text-right menu_18">
								<p>							
									<?php stech_login();?>
								</p>
							</div>
						</div>	
					</div>
				 <?php }elseif(!empty($stech_opt['stech_top_right_layout']) && $stech_opt['stech_top_right_layout']=="header_top_4"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-9 col-sm-8">
							<div class="top-address">
								<p>							
									<?php if (!empty($stech_opt['stech_header_top_road'])): ?>
										<span><i class="fa fa-map-marker"></i><?php echo esc_html($stech_opt['stech_header_top_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($stech_opt['stech_header_top_mobile'])): ?>
										<a href="<?php esc_attr_e('tel:','stech')?><?php echo esc_html($stech_opt['stech_header_top_mobile']); ?>"><i class="fa fa-phone"></i><?php echo esc_html($stech_opt['stech_header_top_mobile']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($stech_opt['stech_header_top_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','stech')?><?php echo esc_html($stech_opt['stech_header_top_email']); ?>"><i class="fa fa-envelope-o"></i><?php echo esc_html($stech_opt['stech_header_top_email']); ?></a>
									<?php endif; ?>	
								</p>
							</div>
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-3 col-sm-4">
							<div class="top-right-menu litop">
								<ul class="social-icons text-right">
									<?php 
										foreach($stech_opt['stech_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>								
							</div>
							<div class="top-address em-quearys-top text-right ritop">
								<div class="em-top-quearys-area">
								   <ul class="em-header-quearys">
										<li class="em-quearys-menu">
											<i class="fa fa-search t-quearys"></i>
											 <i class="fa fa-close  t-close em-s-hidden "></i>
										</li>
									</ul>
										<!--Search Form-->
										<div class="em-quearys-inner">
											<div class="em-quearys-form">
												<form class="top-form-control" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
													<input type="text" placeholder="<?php echo esc_attr_e( 'Type Your Keyword', 'stech' ) ?>" name="s" value="<?php the_search_query(); ?>" />
													<button class="top-quearys-style" type="submit">
														<i class="fa fa-long-arrow-right"></i>
													</button>
												</form>                                
											</div>
										</div>
										<!--End of Search Form-->									
								</div>
							</div>							
						</div>	
					</div>	
				<?php } ?>				
			</div>
		</div>
    <!-- END HEADER TOP AREA -->
 <?php }else{}
	
	
}?>
 
<div class="mobile_logo_area d-sm-block d-md-block d-lg-none">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php stech_mobile_top_logo(); ?>
			</div>
		</div>
	</div>
</div>

  <!-- START HEADER MAIN MENU AREA -->
  <?php  $stech_header_style = get_post_meta( get_the_ID(),'_stech_stech_header_style', true ); ?>
  <?php  $stech_logo_menu_style = get_post_meta( get_the_ID(),'_stech_stech_logo_menu_style', true ); ?>
  
	<!-- HEADER Main MENU -->
   <?php if($stech_header_style==1){?>
   <div class="stech-main-menu d-md-none d-lg-block d-sm-none d-none default-menu">
		<div class="header-sticky">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu main-search-menu">						
							<?php stech_main_menu(); ?>
							<?php stech_search_code(); ?>	
							<div class="sidebar">
								<div class="nav-btn navSidebar-button">
									<span class="line1"></span> 
									<span class="line2"></span> 
									<span class="line3"></span> 
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>	
		</div>				
	</div>	
	
   <!-- ONE PAGE MANU -->
  <?php }elseif($stech_header_style==2){?>
   <!-- HEADER MANU AREA -->
 <div class="stech-main-menu transprent-menu heading_style_4 d-md-none d-lg-block d-sm-none d-none">
		<div class="trp_nav_area">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
				   <?php if($stech_logo_menu_style==1){?>	
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu">						
							<?php stech_main_menu(); ?>
						</nav>
					</div>
				</div>
				 <?php } ?>
			</div>
		</div>				
	</div>	
	
	
	<!-- TRANSPARENT WITH STYKY MENU -->
   <?php }elseif($stech_header_style==3){?>
 	<div class="stech-main-menu d-md-none d-lg-block d-sm-none d-none">
		<div class="stech_nav_area scroll_fixed bdbar">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">	
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu">						
							<?php stech_main_menu(); ?>
						</nav>				
					</div>
				</div> 
			</div>
		</div>			
	</div>	

   <!-- ONE PAGE MANU -->
  <?php }elseif($stech_header_style==4){?>
   <!-- HEADER MANU AREA -->
 	<div class="stech-main-menu d-md-none d-lg-block d-sm-none d-none">
		<div class="stech_nav_area scroll_fixed">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">			
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_onepage_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu">						
							<?php stech_one_page_menu(); ?>
						</nav>				
					</div>
				</div>
			</div>	
		</div>				
	</div>	
	
	<!-- HEADER ONEPAGE TRANSPARENT MENU -->
    <?php }
    
    elseif($stech_header_style==5){?>
 	<div class="stech-main-menu d-md-none d-lg-block d-sm-none d-none one_page transprent-menu">
		<div class="trp_nav_area">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">	
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu">						
							<?php stech_one_page_menu(); ?>
						</nav>				
					</div>
				</div>
			
			</div>	
		</div>				
	</div>	
	
	<!-- ONEPAGE TRANSPRENT WITH STYKY MENU -->
    <?php }	elseif($stech_header_style==6){?>  
 	<div class="stech-main-menu d-md-none d-lg-block d-sm-none d-none transprent-menu">
		<div class="stech_nav_area scroll_fixed bdbar">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">		
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu">						
							<?php stech_one_page_menu(); ?>
						</nav>				
					</div>
				</div>
			</div>
		</div>			
	</div>	

	<!-- HEADER MAIN MENU WITH STICKY -->
    <?php }elseif($stech_header_style==7){?>  
 	<div class="stech-main-menu d-md-none d-lg-block d-sm-none d-none">
		<div class="stech_nav_area trp_nav_area scroll_fixed">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">	
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_main_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu">						
							<?php stech_main_menu(); ?>
						</nav>				
					</div>
				</div>
			</div>
		</div> 			
	</div>	
				
	<!-- HEADER WITH SEARCH -->
    <?php }elseif($stech_header_style==8){?>  
 	<div class="stech-main-menu search-menu one_page d-md-none d-lg-block d-sm-none d-none">
		<div class="stech_nav_area trp_nav_area">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">			
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_main_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu main-search-menu">						
							<?php stech_main_menu(); ?>
							<?php stech_search_code(); ?>					
						</nav>				
					</div>
				</div>
				
			</div>
		</div>				
	</div>	
   
   <!-- HEADER TRANSPARENT WITH SEARCH -->
    <?php }elseif($stech_header_style==9){?>
 	<div class="stech-main-menu d-md-none d-lg-block d-sm-none d-none transprent-menu transparent-menu-sidebar header-cart">
		<div class="header-sticky">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu main-search-menu">						
							<?php stech_main_menu(); ?>
							<?php stech_search_code(); ?>	
							<div class="sidebar">
								<div class="nav-btn navSidebar-button">
									<span class="line1"></span> 
									<span class="line2"></span> 
									<span class="line3"></span> 
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>	
		</div>				
	</div>	
	
	<!-- HEADER MENU WITH BUTTON -->
   <?php }elseif($stech_header_style==10){?>  
 	<div class="stech-main-menu white-menu d-md-none d-lg-block d-sm-none d-none">
		<div class="header-sticky">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">		
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_main_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu main-search-menu">						
							<?php stech_main_menu(); ?>
							<?php if (!empty($stech_opt['stech_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($stech_opt['stech_header_button_url'])){echo esc_url($stech_opt['stech_header_button_url']);}?>"><?php echo esc_html($stech_opt['stech_header_button']); ?></a>	
								</div>	
								<div class="sidebar">
                                    <div class="nav-btn navSidebar-button">
                                        <span class="line1"></span> 
                                        <span class="line2"></span> 
                                        <span class="line3"></span> 
                                    </div>
                                </div>
							<?php endif; ?>		
						</nav>	
					</div>
				</div>
			</div>	
		</div>				
	</div>

	<!-- HEADER MENU WITHOUT LOGO -->	
    <?php }elseif($stech_header_style==14){?>  
 	<div class="stech-main-menu one_page d-md-none d-lg-block d-sm-none d-none">
		<div class="stech_nav_area scroll_fixed">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">		
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_main_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu main-search-menu">						
							<?php stech_one_page_menu(); ?>
							<?php stech_search_code(); ?>																		
						</nav>				
					</div>
				</div>
			</div>
		</div>				
	</div>		
 
 <!-- DEFAULT MANU CONDITION  = 1  -->
 <?php }elseif($stech_header_style==16){?>
 	<div class="stech-main-menu d-md-none d-lg-block d-sm-none d-none transprent-menu">
		<div class="trp_nav_area">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
				<div class="row logo-left  align-items-center">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu main-search-menu">						
							<?php stech_main_menu(); ?>
							<?php if (!empty($stech_opt['stech_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($stech_opt['stech_header_button_url'])){echo esc_url($stech_opt['stech_header_button_url']);}?>"><?php echo esc_html($stech_opt['stech_header_button']); ?></a>	
								</div>	
							<?php endif; ?>	
							
						</nav>
					</div>
				</div>
			</div>	
		</div>  			
	</div>	
   <?php }elseif($stech_header_style==15){?>
 	<div class="stech-main-menu d-md-none d-lg-block d-sm-none d-none tr-btn-search header-cart">
		<div class="header-sticky">
			<div class="container-fluid">
				<div class="row logo-left  align-items-center">				
					<div class="col-md-2 col-sm-3 col-xs-3">
						<?php stech_ts_logo(); ?>
					</div>
					<div class="col-md-7 col-sm-6 col-xs-6">
						<nav class="stech_menu">						
							<?php stech_main_menu(); ?>
						</nav>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">					
						<div class="search_button">
							<?php stech_search_code(); ?>	
							<?php if (!empty($stech_opt['stech_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($stech_opt['stech_header_button_url'])){echo esc_url($stech_opt['stech_header_button_url']);}?>"><?php echo esc_html($stech_opt['stech_header_button']); ?></a>	
								</div>	
							<?php endif; ?>	
							<div class="sidebar">
								<div class="nav-btn navSidebar-button">
									<span class="line1"></span> 
									<span class="line2"></span> 
									<span class="line3"></span> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>  			
	</div>	

   <?php } elseif($stech_header_style==17){?>
 	<div class="stech-main-menu d-md-none d-lg-block d-sm-none d-none one_page menu-18">
		<div class="header-sticky">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">	
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu main-search-menu">						
							<?php stech_one_page_menu(); ?>
							<?php stech_search_code(); ?>
							<div class="sidebar">
								<div class="nav-btn navSidebar-button">
									<span class="line1"></span> 
									<span class="line2"></span> 
									<span class="line3"></span> 
								</div>
							</div>															
						</nav>					
					</div>
				</div>
			</div>
		</div>			
	</div>	
	
    <?php } elseif($stech_header_style==18){?>
 	<div class="stech-main-menu d-md-none d-lg-block d-sm-none d-none one_page menu-18">
		<div class="header-sticky">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">	
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_onepage_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu main-search-menu">						
							<?php stech_one_page_menu(); ?>
							<?php if (!empty($stech_opt['stech_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($stech_opt['stech_header_button_url'])){echo esc_url($stech_opt['stech_header_button_url']);}?>"><?php echo esc_html($stech_opt['stech_header_button']); ?></a>	
								</div>	
								<div class="sidebar">
								<div class="nav-btn navSidebar-button">
									<span class="line1"></span> 
									<span class="line2"></span> 
									<span class="line3"></span> 
								</div>
							</div>
							<?php endif; ?>																			
						</nav>					
					</div>
				</div>
			</div>	
		</div>			
	</div>	
    <?php }else{ ?>
	
	
<!-- ================ REDUX strat ================ -->
	<?php if(!empty($stech_opt['stech_defaulth_menu_layout']) && $stech_opt['stech_defaulth_menu_layout']==2 ){?>	
   <!-- HEADER TRANSPARENT MENU -->
 	<div class="stech-main-menu d-md-none d-lg-block d-sm-none d-none transprent-menu">
		<div class="trp_nav_area scroll_fixed">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu">						
							<?php stech_main_menu(); ?>
						</nav>	
						<?php if (!empty($stech_opt['stech_header_button'])): ?>
							<div class="donate-btn-header">
								<a class="dtbtn" href="<?php if (!empty($stech_opt['stech_header_button_url'])){echo esc_url($stech_opt['stech_header_button_url']);}?>"><?php echo esc_html($stech_opt['stech_header_button']); ?></a>	
							</div>	
						<?php endif; ?>			
					</div>
				</div>
			</div>	
		</div>			
	</div>	
 	<?php }elseif(!empty($stech_opt['stech_defaulth_menu_layout']) && $stech_opt['stech_defaulth_menu_layout']==3 ){?>	
	<!-- TRANSPARENT MANU WITH SKITY -->
 	<div class="stech-main-menu one_page menu4 d-md-none d-lg-block d-sm-none d-none transprent-menu ">
		<div class="stech_nav_area scroll_fixed bdbar">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">		
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu">						
							<?php stech_main_menu(); ?>
						</nav>
						<?php if (!empty($stech_opt['stech_header_button'])): ?>
							<div class="donate-btn-header">
								<a class="dtbtn" href="<?php if (!empty($stech_opt['stech_header_button_url'])){echo esc_url($stech_opt['stech_header_button_url']);}?>"><?php echo esc_html($stech_opt['stech_header_button']); ?></a>	
							</div>	
						<?php endif; ?>		

					</div>
				</div>
			</div>	
		</div>		
	</div>	

	<!-- MAIN HEADER MENU WITH STIKY -->
 	<?php }elseif(!empty($stech_opt['stech_defaulth_menu_layout']) && $stech_opt['stech_defaulth_menu_layout']==1 ){?>	
 	<div class="stech-main-menu one_page d-md-none d-lg-block d-sm-none d-none">
		<div class="stech_nav_area scroll_fixed">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">			
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_main_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu">						
							<?php stech_main_menu(); ?>
						</nav>	

						<?php if (!empty($stech_opt['stech_header_button'])): ?>
							<div class="donate-btn-header">
								<a class="dtbtn" href="<?php if (!empty($stech_opt['stech_header_button_url'])){echo esc_url($stech_opt['stech_header_button_url']);}?>"><?php echo esc_html($stech_opt['stech_header_button']); ?></a>	
							</div>	
						<?php endif; ?>	

					</div>
				</div>
			</div>
		</div>				
	</div>	
 	<?php }else{ ?>
   <!-- HEADER DEFAULT MANU AREA -->
   <div class="stech-main-menu d-md-none d-lg-block d-sm-none d-none default-menu">
		<div class="header-sticky">
			<div class="<?php if(!empty($stech_opt['stech_main_box_layout']) && $stech_opt['stech_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
				<div class="row logo-left  align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php stech_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="stech_menu main-search-menu">						
							<?php stech_main_menu(); ?>
							<?php stech_search_code(); ?>	
							<div class="sidebar">
								<div class="nav-btn navSidebar-button">
									<span class="line1"></span> 
									<span class="line2"></span> 
									<span class="line3"></span> 
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>	
		</div>				
	</div>	
   <?php } ?>
   
   <?php } ?>	 
	<!-- MOBILE MENU AREA -->
	<div class="home-2 mbm d-sm-block d-md-block d-lg-none header_area main-menu-area">
		<div class="menu_area mobile-menu">
			<nav>
				<?php stech_mobile_menu(); ?>
			</nav>
		</div>					
	</div>			
	<!-- END MOBILE MENU AREA  -->
</div>	

	    <!-- Sidebar Cart Item -->
		<div class="xs-sidebar-group info-group">
		<div class="dt-overlay bt-black"></div>
		<div class="dt-sidebar-widget">
			<div class="sidebar-container">
				<div class="widget-top">
					<a href="#" class="close">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="sidebar-content-inner">
							<div class="sidebar-logo">
								<?php stech_main_logo(); ?>
							</div>
							<div class="sidebar-title">
								<h2><?php echo esc_html($stech_opt['stech_sidebar_title']); ?></h2>
							</div>							
							<div class="sidebar-desc">
								<p><?php echo esc_html($stech_opt['stech_sidebar_desc']); ?></p>
							</div>
                            <div class="sidebar-contact-info">
                                <h2><?php echo esc_html($stech_opt['stech_sidebar_contact_title']); ?></h2>
                                 <ul>
                                    <li>
                                       <i aria-hidden="true" class="flaticon flaticon-pin-1"></i>
                                       <?php echo esc_html($stech_opt['stech_sidebar_contact_location']); ?>
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="flaticon flaticon-call"></i>
                                       <?php echo esc_html($stech_opt['stech_sidebar_contact_phone']); ?>
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="flaticon flaticon-email"></i>
                                       <?php echo esc_html($stech_opt['stech_sidebar_contact_mail']); ?>
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="flaticon flaticon-time-3"></i>
                                       <?php echo esc_html($stech_opt['stech_sidebar_contact_openhour']); ?>
                                    </li>
                                 </ul>
                            </div>

							
                           <!-- Social Box -->
						   <div class="sidebar-social-icon">
								<ul>
									<?php 
										foreach($stech_opt['stech_sidebar_social_icons'] as $key=>$value ) { 
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
