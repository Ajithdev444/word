<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
	<!-- BLOG BREADCUMB START -->
	<div class="breadcumb-area">
		<div class="container">				
			<div class="row">
				<div class="col-md-12 txtc  <?php echo esc_attr( $page_text_align );?> <?php echo esc_attr( $page_text_transform );?>">

					<div class="brpt">
					<h2 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h2>
					</div>
					<div class="breadcumb-inner">
						<?php woocommerce_breadcrumb(); ?> 
					</div>

				</div>
			</div>
		</div>
	</div>

<?php

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );
if( is_active_sidebar('stech-shop')){
	$stech_main_col = 'col-lg-9 col-md-12 col-sm-12 col-12';
}else{
	$stech_main_col = 'col';
}
?>
<div class="containers stech-product-page <?php if( is_active_sidebar('stech-shop')) : ?>stech-wactive-sidebar<?php endif; ?>">
	<div class="row">
		<div class="<?php echo esc_attr($stech_main_col); ?>">
			<?php
			if ( woocommerce_product_loop() ) {

				?>
				<div class="stech-woocatalog">
					<?php 
						woocommerce_result_count(); 
						woocommerce_catalog_ordering(); 
					?>
				</div>
				<?php 
				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
				woocommerce_product_loop_start();

				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();

						/**
						 * Hook: woocommerce_shop_loop.
						 */
						do_action( 'woocommerce_shop_loop' );

						wc_get_template_part( 'content', 'product' );
					}
				}

				woocommerce_product_loop_end();

				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			}

			?>
		</div>
		<?php if( is_active_sidebar('stech-shop')) : ?>
		<div class="col-lg-3 col-md-12 col-sm-12 col-12">
			<div class="stech-sidebar blog-left-side">
				<?php dynamic_sidebar('stech-shop'); ?>
			</div>
		</div>
		<?php endif;
		?>
	</div>
</div>

<?php 

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 8 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
get_footer( 'shop' );
