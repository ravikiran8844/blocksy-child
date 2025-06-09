<?php

/**
 * Single Product Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

global $product;

if (! wc_review_ratings_enabled()) {
	return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();

if ($rating_count > 0) : ?>

	<div class="woocommerce-product-rating">
		<?php echo wc_get_rating_html($average, $rating_count); // WPCS: XSS ok. 
		?>
		<?php if (comments_open()) : ?>
			<?php //phpcs:disable 
			?>
			<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<?php printf(_n('%s customer review', '%s customer reviews', $review_count, 'woocommerce'), '<span class="count">' . esc_html($review_count) . '</span>'); ?>)</a>
			<?php // phpcs:enable 
			?>
		<?php endif ?>
	</div>

<?php else : ?>

	<div class="flex items-center gap-1">
		<svg xmlns="http://www.w3.org/2000/svg" width="85" height="16" viewBox="0 0 105 19" fill="none">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M9.49609 0L12.1229 6.43914L18.992 6.97504L13.7463 11.4905L15.3648 18.2609L9.49609 14.6124L3.62715 18.2609L5.24568 11.4905L0 6.97504L6.8691 6.43914L9.49609 0Z" fill="#FFAA00"></path>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M9.49609 0L12.1229 6.43914L18.992 6.97504L13.7463 11.4905L15.3648 18.2609L9.49609 14.6124V0Z" fill="#FFBD38"></path>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M30.9979 0L33.6248 6.43914L40.4939 6.97504L35.2483 11.4905L36.8668 18.2609L30.9979 14.6124L25.1291 18.2609L26.7476 11.4905L21.502 6.97504L28.3711 6.43914L30.9979 0Z" fill="#FFAA00"></path>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M30.998 0L33.625 6.43914L40.4941 6.97504L35.2485 11.4905L36.867 18.2609L30.998 14.6124V0Z" fill="#FFBD38"></path>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M52.4998 0L55.1268 6.43914L61.9959 6.97504L56.7502 11.4905L58.3688 18.2609L52.4998 14.6124L46.6311 18.2609L48.2496 11.4905L43.0039 6.97504L49.873 6.43914L52.4998 0Z" fill="#FFAA00"></path>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M52.5 0L55.127 6.43914L61.9961 6.97504L56.7504 11.4905L58.3689 18.2609L52.5 14.6124V0Z" fill="#FFBD38"></path>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M74.0018 0L76.6287 6.43914L83.4979 6.97504L78.2522 11.4905L79.8707 18.2609L74.0018 14.6124L68.133 18.2609L69.7515 11.4905L64.5059 6.97504L71.375 6.43914L74.0018 0Z" fill="#FFAA00"></path>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M74.002 0L76.6289 6.43914L83.498 6.97504L78.2524 11.4905L79.8709 18.2609L74.002 14.6124V0Z" fill="#FFBD38"></path>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M95.5037 0L98.1307 6.43914L105 6.97504L99.7541 11.4905L101.373 18.2609L95.5037 14.6124L89.635 18.2609L91.2535 11.4905L86.0078 6.97504L92.8769 6.43914L95.5037 0Z" fill="#FFAA00"></path>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M95.5039 0L98.1309 6.43914L105 6.97504L99.7543 11.4905L101.373 18.2609L95.5039 14.6124V0Z" fill="#FFBD38"></path>
		</svg> 
		<span class="text-xs">(0 Reviews)</span>
	</div>


<?php endif; ?>


<div class="text-md !mb-0">Made with 92.5 Silver</div>

<hr class="text-[#D9E2DA] !my-4">


	<div class="grid md:grid-cols-2 gap-6 lg:gap-10 mb-6">
	<?php
	$metalType = get_field('metal_type', $product->get_id());
	if (!empty($metalType)) : ?>
		<div>
			<div class="mb-1 text-md">Metal</div>
			<div class="bg-white px-4 h-10 flex items-center w-full border border-[#D9E2DA] rounded-sm max-w-sm truncate">
				<?php echo esc_html($metalType); ?>
			</div>
		</div>
	<?php endif; ?>

	<?php
	$dimension = get_field('product_dimension', $product->get_id());
	if (!empty($dimension)) : ?>
		<div>
			<div class="mb-1 text-md">Dimensions</div>
			<div class="h-12 flex items-center">
				<?php echo esc_html($dimension); ?>
			</div>
		</div>
	<?php endif; ?> 
    </div>