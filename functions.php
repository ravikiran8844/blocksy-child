<?php
if (! defined('WP_DEBUG')) {
	die('Direct access forbidden.');
}
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
});

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('blocksy-child-style', get_stylesheet_uri());
});

function my_theme_enqueue_styles()
{
	wp_enqueue_style('tailwind-style', get_stylesheet_directory_uri() . '/src/output.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

add_action('woocommerce_single_product_summary', 'rk_add_product_subtitle_below_title', 6);

function rk_add_product_subtitle_below_title()
{
	global $product;

	// Example: Static subtitle text (you can replace this with dynamic logic)
	echo '<p class="product-subtitle" style="margin-bottom:10px; font-size:16px; color:#666;">This is a subtitle or additional info</p>';
}


add_action('template_redirect', 'handle_buy_now_redirect');

function handle_buy_now_redirect()
{
	if (isset($_POST['buy_now']) && is_numeric($_POST['buy_now'])) {
		$product_id = intval($_POST['buy_now']);

		// Clear the cart first
		WC()->cart->empty_cart();

		// Add selected product to cart
		$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
		WC()->cart->add_to_cart($product_id, $quantity);

		// Redirect to checkout
		wp_safe_redirect(wc_get_checkout_url());
		exit;
	}
}
