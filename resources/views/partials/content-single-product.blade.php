<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>
	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40w
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
    do_action( 'woocommerce_single_product_summary' );
		?>
		<div>
			{{ the_field('shipping', 'options') }}
		</div>
		<p><strong>Share</strong></p>
		<ul class="social">
			<li>
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(get_the_permalink()) . '&title=' . urlencode(get_the_title()) }}">
					<svg width="12" height="25" viewBox="0 0 12 25" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="Dot-Website---Blog" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Dot---Blog-Page" transform="translate(-210 -2144)" fill="#161616"><g id="Footer-1" transform="translate(0 1966)"><g id="Facebook" transform="translate(210 178)"><path d="M2.61 24.933h5.02V12.36h3.505l.375-4.188H7.63V5.77c0-.995.202-1.384 1.158-1.384h2.722V0H8.034C4.294 0 2.61 1.644 2.61 4.808v3.365H0v4.264h2.61v12.496z" id="Path"></path></g></g></g></g></svg>
				</a>
			</li>
			<li>
				<a target="_blank" href="{{ 'http://twitter.com/intent/tweet?text=' . urlencode(get_the_permalink()) }}">
					<svg width="30" height="25" viewBox="0 0 30 25" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="Dot-Website---Blog" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Dot---Blog-Page" transform="translate(-373 -2144)" fill="#161616"><g id="Footer-1" transform="translate(0 1966)"><g id="Twitter" transform="translate(373.515 178)"><path d="M0 21.75a17.026 17.026 0 0 0 9.218 2.705c11.16 0 17.461-9.43 17.083-17.884a12.244 12.244 0 0 0 3-3.11 11.987 11.987 0 0 1-3.455.943 6.006 6.006 0 0 0 2.648-3.327 11.98 11.98 0 0 1-3.847 1.461A6.013 6.013 0 0 0 14.391 8.02 17.077 17.077 0 0 1 2.038 1.744a6.02 6.02 0 0 0 1.866 8.025 5.93 5.93 0 0 1-2.725-.756A6.02 6.02 0 0 0 6 14.987a6.038 6.038 0 0 1-2.718.103 6.02 6.02 0 0 0 5.615 4.173A12.064 12.064 0 0 1 0 21.75z" id="Path"></path></g></g></g></g></svg>
				</a>
			</li>
			<li class="social__whats">
				<a  target="_blank" href="whatsapp://send?text={{ the_permalink() }}" data-action="share/whatsapp/share">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
				</a>
			</li>
			<li>
			<a target="_blank" href="{{ 'https://pinterest.com/pin/create/button/?url=' . urlencode(get_the_permalink()) . '&media=' . get_the_post_thumbnail_url() . '&description=' . urlencode(get_the_title()) }}">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg>
				</a>
			</li>
		</ul>
	</div>
</div>


	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>

<?php do_action( 'woocommerce_after_single_product' ); ?>
