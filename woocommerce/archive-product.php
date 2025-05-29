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
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined('ABSPATH') || exit;

get_header('shop');


// Get current queried object
$queried_object = get_queried_object();

$default_image = wp_get_upload_dir()['baseurl'] . '/2025/05/shop-banner.jpg';

// For shop page
if (is_shop()) {
	$title = get_the_title(wc_get_page_id('shop'));
	$product_count = wc_get_loop_prop('total'); // Get total products found
	$image_url = get_the_post_thumbnail_url(wc_get_page_id('shop'), 'full');
}

// For product category pages
elseif (is_product_category()) {
	$title = $queried_object->name;
	$product_count = $queried_object->count;
	$thumbnail_id = get_term_meta($queried_object->term_id, 'thumbnail_id', true);
	$image_url = wp_get_attachment_url($thumbnail_id);
}

// Fallback to default image if $image_url is empty
if (empty($image_url)) {
	$image_url = $default_image;
}


 if (!empty($image_url)) : ?>
	<div class="relative w-full h-[200px] bg-blue-100 bg-cover bg-center" style="background-image: url('<?php echo esc_url($image_url); ?>');">
		<div class="absolute top-1/2 left-[10%] transform  -translate-y-1/2">
			<div class="text-2xl lora text-deep-forest">
				<?php echo esc_html($title); ?>
			</div>
			<div class="text-md text-deep-forest">
				(<?php echo esc_html($product_count); ?> Designs)
			</div>
		</div>
	</div>

<?php
endif;


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */


do_action('woocommerce_shop_loop_header');


if (woocommerce_product_loop()) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action('woocommerce_before_shop_loop');

	woocommerce_product_loop_start();

	if (wc_get_loop_prop('total')) {
		while (have_posts()) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action('woocommerce_shop_loop');

			wc_get_template_part('content', 'product');
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action('woocommerce_after_shop_loop');
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action('woocommerce_no_products_found');
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');

get_footer('shop');
