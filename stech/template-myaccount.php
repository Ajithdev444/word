<?php

/*
Template Name: My Account
*/

get_header();?>
	<!-- BLOG BREADCUMB START -->
	<div class="breadcumb-area">
		<div class="container">				
			<div class="row">
				<div class="col-md-12 txtc  <?php echo esc_attr( $page_text_align );?> <?php echo esc_attr( $page_text_transform );?>">
					<div class="brpt">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="breadcumb-inner">
						<?php stech_breadcrumbs(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="myaccount-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo do_shortcode('[woocommerce_my_account] ');?>
                </div>
            </div>
        </div>
    </div>

 <?php get_footer();?>