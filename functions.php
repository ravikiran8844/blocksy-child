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
    // Disable caching by appending current time as version during development
    $version = wp_get_environment_type() === 'development' ? time() : wp_get_theme()->get('Version');

    wp_enqueue_style('tailwind-style', get_stylesheet_directory_uri() . '/src/output.css', array(), $version);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


// add_action('woocommerce_single_product_summary', 'rk_add_product_subtitle_below_title', 6);

// function rk_add_product_subtitle_below_title()
// {
// 	global $product;

// 	// Example: Static subtitle text (you can replace this with dynamic logic)
// 	echo '<p class="product-subtitle" style="margin-bottom:10px; font-size:16px; color:#666;">This is a subtitle or additional info</p>';
// }


// add_action('template_redirect', 'handle_buy_now_redirect');

// function handle_buy_now_redirect()
// {
// 	if (isset($_POST['buy_now']) && is_numeric($_POST['buy_now'])) {
// 		$product_id = intval($_POST['buy_now']);

// 		// Clear the cart first
// 		WC()->cart->empty_cart();

// 		// Add selected product to cart
// 		$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
// 		WC()->cart->add_to_cart($product_id, $quantity);

// 		// Redirect to checkout
// 		wp_safe_redirect(wc_get_checkout_url());
// 		exit;
// 	}
// }

add_action('woocommerce_product_thumbnails', 'custom_text_block_below_thumbnails', 20);

function custom_text_block_below_thumbnails() {
    ?>
    <div class="bg-[#FCF7F3] p-6 ms-auto mt-12">
        <div class="text-xl md:text-2xl lora italic text-[#B05B3C] mb-2">Jewellery Care</div>
        <div class="text-deep-forest text-sm md:text-md">Explore our Divine collection by Jewel One featuring a spectrum of deities, each idol resonating with spiritual significance.</div>
    </div>
    <?php
}



// Remove WooCommerce breadcrumbs
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

// Remove default page title
add_filter('woocommerce_show_page_title', '__return_false');
