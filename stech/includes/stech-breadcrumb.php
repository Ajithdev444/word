<?php

if(!function_exists('stech_blog_breadcrumb')){
	function stech_blog_breadcrumb(){?>
		<!-- BLOG BREADCUMB START -->
		<div class="breadcumb-area">
			<div class="container">				
				<div class="row">
					<div class="col-md-12">						
						<div class="breadcumb-inner">
							<h2><?php esc_html_e('Blog Standerd','stech'); ?></h2>
							<?php stech_breadcrumbs(); ?>								
						</div>	
					</div>
				</div>
			</div>
		</div>		
	<?php }	
}
 
if(!function_exists('stech_signle_blog_breadcrumb')){
	function stech_signle_blog_breadcrumb(){?>
		<!-- BLOG BREADCUMB START -->
		<div class="breadcumb-area">
			<div class="container">				
				<div class="row">
					<div class="col-md-12">						
						<div class="breadcumb-inner">
							<h2><?php esc_html_e('Blog Details','stech'); ?></h2>
							<?php stech_breadcrumbs(); ?>							
						</div>	
					</div>
				</div>
			</div>
		</div>		
	<?php }	
}

if(!function_exists('stech_signle_product_breadcrumb')){
	function stech_signle_product_breadcrumb(){?>
		<!-- BLOG BREADCUMB START -->
		<div class="breadcumb-area">
			<div class="container">				
				<div class="row">
					<div class="col-md-12">						
						<div class="breadcumb-inner">
							<h2><?php esc_html_e('Product Details','stech'); ?></h2>
							<?php stech_breadcrumbs(); ?>							
						</div>	
					</div>
				</div>
			</div>
		</div>		
	<?php }	
}


if(!function_exists('stech_signle_case_breadcrumb')){
	function stech_signle_case_breadcrumb(){?>
		<!-- BLOG BREADCUMB START -->
		<div class="breadcumb-area">
			<div class="container">				
				<div class="row">
					<div class="col-md-12">						
						<div class="breadcumb-inner">
							<h2><?php esc_html_e('Project Details','stech'); ?></h2>
							<?php stech_breadcrumbs(); ?>							
						</div>	
					</div>
				</div>
			</div>
		</div>		
	<?php }	
}


// stech breadcrumb
if(!function_exists('stech_breadcrumbs')){
	function stech_breadcrumbs() {
		echo '<ul>';
		//if (!is_home()) {
					echo '<li><a href="';
					echo esc_url( home_url( '/' ) );
					echo '">';
					echo 'Home';	
					echo esc_html__('','stech');
					echo "</a></li>";		
					echo "<li>/</li>";		

			if (is_category()) {	
					echo "<li>";
					echo single_cat_title( '', false );
					echo '</li>';
			}
			elseif( is_archive() ) {
				the_archive_title( '<li>', '</li>' );
			}			
			elseif (is_page()) {			
					echo '<li>';
					echo get_the_title();
					echo '</li>';
			}
			elseif (is_single()) {	
					echo "<li>";
					the_title();
					echo '</li>';
			}		
			elseif (is_tag()) {
				single_tag_title();
			}

			elseif (is_day()) {
				echo"<li>";
					echo esc_html__('Archive for','stech');
				echo'</li>';				
			}
			elseif (is_month()) {
				echo"<li>";
					echo esc_html__('Archive for','stech');
				echo'</li>';				
			}
			elseif (is_year()) {
				echo"<li>";
					echo esc_html__('Archive for','stech');
				echo'</li>';				
			}
			elseif (is_author()) {
				echo"<li>";
					echo esc_html__('Author','stech');
				echo'</li>';			
			}
			elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
				echo"<li>";
					echo esc_html__('Blog Archives','stech');
				echo'</li>';			
			}
			elseif (is_search()) {
				echo"<li>";
					echo esc_html__('Search Results','stech');
				echo'</li>';
			}
			elseif (is_404()) {
				echo"<li>";
					echo esc_html__('404','stech');
				echo'</li>';
			}
			
			
			
		//}
		echo '</ul>';
		
	
	}
}
// end stech breadcrumb

