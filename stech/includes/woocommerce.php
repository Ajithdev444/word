<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package stech
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function stech_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'stech_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function stech_woocommerce_scripts() {
	wp_enqueue_style( 'stech-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/gallery/magnific-popup.css' );
	wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/assets/gallery/jquery-magnific-popup-min.js', array('jquery') );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'stech-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'stech_woocommerce_scripts' );


/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function stech_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'stech_woocommerce_active_body_class' );

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function stech_woocommerce_products_per_page() {
	return 12;
}
add_filter( 'loop_shop_per_page', 'stech_woocommerce_products_per_page' );

/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function stech_woocommerce_thumbnail_columns() {
	return 4;
}
add_filter( 'woocommerce_product_thumbnails_columns', 'stech_woocommerce_thumbnail_columns' );

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function stech_woocommerce_loop_columns() {
	if( is_active_sidebar('stech-shop') && ! is_product_category() ){
		$retrun = '3';
	}else{
		$retrun = '4';
	}
	return $retrun;
}
add_filter( 'loop_shop_columns', 'stech_woocommerce_loop_columns' );


/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function stech_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 4,
		'columns'        => 4,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'stech_woocommerce_related_products_args' );

if ( ! function_exists( 'stech_woocommerce_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper.
	 *
	 * @return  void
	 */
	function stech_woocommerce_product_columns_wrapper() {
		$columns = stech_woocommerce_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';
	}
}
add_action( 'woocommerce_before_shop_loop', 'stech_woocommerce_product_columns_wrapper', 40 );

if ( ! function_exists( 'stech_woocommerce_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function stech_woocommerce_product_columns_wrapper_close() {
		echo '</div>';
	}
}
add_action( 'woocommerce_after_shop_loop', 'stech_woocommerce_product_columns_wrapper_close', 40 );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'stech_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function stech_woocommerce_wrapper_before() {
		?>
		<div class="container">
			
			<?php
	}
}
add_action( 'woocommerce_before_main_content', 'stech_woocommerce_wrapper_before' );

if ( ! function_exists( 'stech_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function stech_woocommerce_wrapper_after() {
		?>
			
		</div><!-- #primary -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'stech_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'stech_woocommerce_header_cart' ) ) {
			stech_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'stech_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function stech_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		stech_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'stech_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'stech_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function stech_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your Shopping Cart', 'stech' ); ?>">
				<span>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" viewBox="0 0 17 17">
					<g>
					</g>
						<path d="M2.75 12.5c-0.965 0-1.75 0.785-1.75 1.75s0.785 1.75 1.75 1.75 1.75-0.785 1.75-1.75-0.785-1.75-1.75-1.75zM2.75 15c-0.414 0-0.75-0.337-0.75-0.75s0.336-0.75 0.75-0.75 0.75 0.337 0.75 0.75-0.336 0.75-0.75 0.75zM11.25 12.5c-0.965 0-1.75 0.785-1.75 1.75s0.785 1.75 1.75 1.75 1.75-0.785 1.75-1.75-0.785-1.75-1.75-1.75zM11.25 15c-0.414 0-0.75-0.337-0.75-0.75s0.336-0.75 0.75-0.75 0.75 0.337 0.75 0.75-0.336 0.75-0.75 0.75zM13.371 2l-0.302 2h-13.143l1.118 8.036h11.913l1.038-7.463 0.236-1.573h2.769v-1h-3.629zM12.926 5l-0.139 1h-11.574l-0.139-1h11.852zM1.914 11.036l-0.561-4.036h11.295l-0.561 4.036h-10.173z" fill="#fff" />
					</svg>
				</span>
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'stech' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<p class="count"><?php echo esc_html( $item_count_text ); ?></p>
		</a>
		<?php
	}
}

if ( ! function_exists( 'stech_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function stech_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>

		<div id="site-header-cart" class="stech-hmini">
			<ul>
					<?php stech_woocommerce_cart_link(); ?>
				<li class="stech-mini-cart-items">
					<?php
					$instance = array(
						'<h2>title</h2>' => '',
					);
					the_widget( 'WC_Widget_Cart', $instance );
					?>
				</li>
			</ul>
		</div>

		<?php
	}
}

// Remove woocommerce defaults breadcrumb
add_action( 'init', 'stech_remove_wc_breadcrumbs' );
function stech_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}


// Remove woocommerce defaults result count
add_action( 'init', 'stech_removewoo_result_count' );
function stech_removewoo_result_count() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0 );
}

// Remove woocommerce defaults catalog ordering
add_action( 'init', 'stech_removewoo_catalog_ordering' );
function stech_removewoo_catalog_ordering() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0 );
}