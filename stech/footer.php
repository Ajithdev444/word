<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stech
 */

?>
	<?php global $stech_opt; ?>	
	<?php if (!empty($stech_opt['stech_widget_hide']) && $stech_opt['stech_widget_hide']==true): ?>				
		<!-- FOOTER MIDDLE AREA -->
			<?php $footer_sidebar_count = $stech_opt['stech_widget_column_count']; ?>
				<?php if( 0 != $footer_sidebar_count ) { ?>
					<div class="footer-middle"> 
						<div class="<?php if(!empty($stech_opt['stech_footer_box_layout']) && $stech_opt['stech_footer_box_layout']=="footer_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
							<div class="row">
								<?php // Default Sidebar count to 4
								if( '' == $footer_sidebar_count ) $footer_sidebar_count = 4;
								// Get the sidebar class
								$footer_sidebar_class = floor( 12/$footer_sidebar_count ); ?>
								<?php for( $footer = 1; $footer <= $footer_sidebar_count; $footer++ ) { ?>
									<?php if ( is_active_sidebar( 'stech-footer-' . $footer ) ) { ?>
										<div class="col-sm-12 col-md-6 col-lg-<?php echo esc_attr( $footer_sidebar_class ); ?> <?php if( $footer == $footer_sidebar_count ) echo esc_attr('last'); ?>">
											<?php dynamic_sidebar( 'stech-footer-' . $footer ); ?>
										</div>
										
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } // if 0 != sidebars ?>	
		<?php endif; ?>
	<!-- FOOTER COPPYRIGHT SECTION -->		
	<?php if (!empty($stech_opt['stech_copyright_hide']) && $stech_opt['stech_copyright_hide']==true): ?>				
		<div class="footer-bottom">
			<div class="<?php if(!empty($stech_opt['stech_footer_box_layout']) && $stech_opt['stech_footer_box_layout']=="footer_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
		<div class="row">
		<?php if(!empty($stech_opt['stech_footer_copyright_style']) && $stech_opt['stech_footer_copyright_style']=="copy_s1"){?>
				<div class="col-md-12 footer_style_1">			
					<div class="copy-right-text text-center">
						<!-- FOOTER COPYRIGHT TEXT -->
						<?php if (!empty($stech_opt['stech_copyright_text'])): ?>
							<p>
								<?php						
									echo wp_kses($stech_opt['stech_copyright_text'], array(
										'span' => array(),
										'a' => array(
											'href' => array(),
											'title' => array()										
										),
										'b' => array(),
										'p' => array(),
										'strong' => array(),
										'em' => array(),
										'br' => array(),
									));	
								?>
							</p>
						<?php endif ?>					
					</div>
				</div>
		<!-- FOOTER COPYRIGHT STYLE 2 -->		
		<?php }elseif(!empty($stech_opt['stech_footer_copyright_style']) && $stech_opt['stech_footer_copyright_style']=="copy_s2"){?>
				<div class="col-md-6  col-sm-12">
					<div class="copy-right-text">
						<!-- FOOTER COPYRIGHT TEXT -->
						<?php if (!empty($stech_opt['stech_copyright_text'])): ?>
							<p>
								<?php						
									echo wp_kses($stech_opt['stech_copyright_text'], array(
										'span' => array(),
										'a' => array(
											'href' => array(),
											'title' => array()										
										),
										'b' => array(),
										'p' => array(),
										'strong' => array(),
										'em' => array(),
										'br' => array(),
									));	
								?>
							</p>
						<?php endif ?>	
					</div>
				</div>
				<div class="col-md-6  col-sm-12">				
					<div class="footer-menu">
						<!-- FOOTER COPYRIGHT MENU -->
						 <?php if ( has_nav_menu( 'menu-4' ) ) {
								wp_nav_menu( array(
								'theme_location' => 'menu-4',
								'menu_class' => 'text-right',
								'fallback_cb' => false,
								'container' => '',
								) );
						 } ?> 				
					</div>
				</div>
		<!-- FOOTER COPYRIGHT STYLE 3 -->		
		<?php }elseif(!empty($stech_opt['stech_footer_copyright_style']) && $stech_opt['stech_footer_copyright_style']=="copy_s3"){?>
				<div class="col-md-6  col-sm-12 footer_style_3">
					<div class="footer-menu">
						<!-- FOOTER COPYRIGHT MENU -->				
						 <?php if ( has_nav_menu( 'menu-4' ) ) {
								wp_nav_menu( array(
								'theme_location' => 'menu-4',
								'menu_class' => 'text-left',
								'fallback_cb' => false,
								'container' => '',
								) );
						 } ?> 
					</div>
				</div>		
				<div class="col-md-6  col-sm-12 footer_style_3">
					<div class="copy-right-text text-right">
						<!-- FOOTER COPYRIGHT TEXT -->
						<?php if (!empty($stech_opt['stech_copyright_text'])): ?>
							<p>
								<?php						
									echo wp_kses($stech_opt['stech_copyright_text'], array(
										'span' => array(),
										'a' => array(
											'href' => array(),
											'title' => array()										
										),
										'b' => array(),
										'p' => array(),
										'strong' => array(),
										'em' => array(),
										'br' => array(),
									));	
								?>
							</p>
						<?php endif ?>	
					</div>
				</div>
				
		<!-- FOOTER COPYRIGHT STYLE 4 -->		
		<?php }elseif(!empty($stech_opt['stech_footer_copyright_style']) && $stech_opt['stech_footer_copyright_style']=="copy_s4"){?>
				<div class="col-md-6 col-sm-12">
					<div class="copy-right-text">
						<!-- FOOTER COPYRIGHT TEXT -->
						<?php if (!empty($stech_opt['stech_copyright_text'])): ?>
							<p>
								<?php						
									echo wp_kses($stech_opt['stech_copyright_text'], array(
										'span' => array(),
										'a' => array(
											'href' => array(),
											'title' => array()										
										),
										'b' => array(),
										'p' => array(),
										'strong' => array(),
										'em' => array(),
										'br' => array(),
									));	
								?>
							</p>
						<?php endif ?>	
					</div>
				</div>
				<div class="col-md-6 col-sm-12">				
					<div class="footer-menu">
						<!-- FOOTER COPYRIGHT SOCIAL MENU -->
						<ul class="text-right">
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
			<?php } ?>			
		</div>	
	</div>
	</div>
	<!-- DEFAULT STYLE IF NOT ACTIVE THEME OPTION  -->
	<?php else: ?>
	<?php $footer_sidebar_count =4; ?>
		<?php if( 0 != $footer_sidebar_count ) { ?>
			<div class="footer-middle wpfd"> 
				<div class="container">
					<div class="row">
						<?php // Default Sidebar count to 4
						if( '' == $footer_sidebar_count ) $footer_sidebar_count = 4;
						// Get the sidebar class
						$footer_sidebar_class = floor( 12/$footer_sidebar_count ); ?>
						<?php for( $footer = 1; $footer <= $footer_sidebar_count; $footer++ ) { ?>
							<?php if ( is_active_sidebar( 'stech-footer-' . $footer ) ) { ?>
								<div class="wpfdp col-sm-12 col-md-<?php echo esc_attr( $footer_sidebar_class ); ?> <?php if( $footer == $footer_sidebar_count ) echo esc_attr('last'); ?>">
									<?php dynamic_sidebar( 'stech-footer-' . $footer ); ?>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>	
		<div class="footer-bottom">
			<div class="<?php if(!empty($stech_opt['stech_footer_box_layout']) && $stech_opt['stech_footer_box_layout']=="footer_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
				<div class="row">			
					<div class="col-md-12">
						<div class="copy-right-text text-center">
							<!-- FOOTER COPYRIGHT TEXT -->
								<p>
									<?php						
										echo esc_html_e("Copyright &copy; stech 2021 all right reserved.","stech"); 
									?>
								</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
<?php wp_footer(); ?>
</body>
</html>
