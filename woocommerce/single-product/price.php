<?php

/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;

?>
<?php
$regular_price = (float) $product->get_regular_price();
$sale_price    = (float) $product->get_sale_price();
?>

<div class="<?php echo esc_attr(apply_filters('woocommerce_product_price_class', 'price')); ?> !mb-0 flex gap-2 items-center">
    <?php echo $product->get_price_html(); ?>

    <?php if ($sale_price && $regular_price && $regular_price > $sale_price) :
        $save_percent = round((($regular_price - $sale_price) / $regular_price) * 100);
    ?>
        <div class="bg-[#21C327] px-2 py-1 text-xs rounded-sm text-white w-fit uppercase">
            Save <?php echo $save_percent; ?>%
        </div>
    <?php endif; ?>
</div>


<div class="text-sm text-deep-forest">(MRP Incl. of all taxes)</div>