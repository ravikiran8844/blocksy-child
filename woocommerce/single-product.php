<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop'); ?>



<?php while (have_posts()) : ?>
    <?php the_post(); ?>

    <?php wc_get_template_part('content', 'single-product'); ?>


<?php endwhile; // end of the loop. 
?>



<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
?>

<?php
/**
 * woocommerce_sidebar hook.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');
?>

<section class="ct-container pt-16">
    <div class="bg-white rounded-xl p-4 md:p-10 lg:p-16 xl:p-20">
        <div class="grid lg:grid-cols-[45%_auto] gap-10 lg:gap-16 xl:gap-20">
            <div>
                <div class="space-y-4 text-deep-forest">
                    <?php if (get_field('description_heading') and get_field('description_text')) : ?>

                        <div class="italic lora text-2xl">Description</div>
                        <div class="text-lg font-semibold">
                            <?php the_field('description_heading'); ?>
                        </div>
                        <div>
                            <?php the_field('description_text'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="bg-[#F4F5F4] border border-[#F0F0F0] rounded-xl p-8 mt-8 text-center space-y-2 text-md">
                    <div>Need help to find the best jewellery for you ?</div>
                    <div>We are available for your assistance</div>

                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="flex items-center flex-col gap-2">
                            <div>
                                <a href="tel: +918220017619">
                                    <svg class="size-10" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        viewBox="0 0 48 48" fill="none">
                                        <rect width="48" height="48" rx="24" fill="white" />
                                        <path
                                            d="M36.6309 30.2894V34.0947C36.6309 35.4688 35.5312 36.6316 34.2315 36.6316C34.1316 36.6316 34.0316 36.6316 34.0316 36.6316C30.3327 36.2088 26.7337 34.8346 23.6346 32.7205C20.7354 30.8179 18.2361 28.1753 16.4367 25.1099C14.3373 21.8331 13.0376 18.0277 12.6378 14.1167C12.5378 12.6369 13.5375 11.4741 14.8371 11.3684C14.9371 11.3684 14.9371 11.3684 15.0371 11.3684H18.636C19.8357 11.3684 20.8354 12.3197 21.0353 13.5882C21.2353 14.8566 21.4352 16.0194 21.8351 17.1821C22.135 18.1334 21.9351 19.1905 21.3353 19.8247L19.8357 21.4102C21.5352 24.5814 24.0345 27.2239 27.0336 29.0209L28.5332 27.4354C29.233 26.6954 30.2327 26.484 31.0325 26.9068C32.1322 27.3296 33.2318 27.6468 34.4315 27.7525C35.7311 27.8582 36.6309 29.0209 36.6309 30.2894Z"
                                            fill="#667B68" />
                                    </svg>
                                </a>
                            </div>

                            <div>
                                Speak with Experts
                            </div>
                        </div>
                        <div class="flex items-center flex-col gap-2">
                            <div>
                                <a href="https://api.whatsapp.com/send/?phone=918220017619">
                                    <svg class="size-10" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        viewBox="0 0 48 48" fill="none">
                                        <rect width="48" height="48" rx="24" fill="white" />
                                        <path
                                            d="M22.8152 11H24.5023C24.8146 11.0375 25.1285 11.0666 25.4392 11.1136C28.4679 11.5717 31.093 12.824 33.2108 15.0701C36.3141 18.3656 37.5294 22.265 36.7896 26.7239C35.7725 32.8531 30.5186 37.2714 24.524 37.7311C21.975 37.9266 19.5676 37.4072 17.2977 36.2336C17.1907 36.1828 17.0697 36.1694 16.9542 36.1956C14.6346 36.7923 12.3165 37.3938 10 38V37.8943C10.0343 37.8259 10.0639 37.7553 10.0888 37.683C10.6758 35.5526 11.2639 33.4227 11.8393 31.2896C11.8711 31.142 11.8505 30.9879 11.7812 30.8537C10.2489 28.0401 9.77332 25.0516 10.3366 21.9088C11.3818 16.0909 16.0528 12.1281 21.3076 11.2114C21.808 11.1242 22.3116 11.0697 22.8152 11ZM13.2459 34.7568C13.3701 34.7304 13.4457 34.7172 13.5202 34.6977C14.7429 34.3806 15.9666 34.0678 17.1872 33.7434C17.2726 33.7164 17.363 33.7087 17.4517 33.721C17.5405 33.7332 17.6254 33.7651 17.7003 33.8142C20.3481 35.3993 23.1776 35.8749 26.1853 35.1521C32.0055 33.7508 35.6588 28.1194 34.5598 22.2692C33.3809 15.991 27.0037 11.9542 20.7861 13.551C13.6782 15.3813 10.2362 23.4697 13.8573 29.8419C14.0243 30.1362 14.2906 30.4205 14.327 30.7306C14.3635 31.0408 14.1743 31.3868 14.0808 31.7166C13.8071 32.7162 13.5334 33.7112 13.2459 34.7568Z"
                                            fill="#667B68" />
                                        <path
                                            d="M26.8586 31C26.553 30.9586 26.2348 30.9602 25.9427 30.8682C24.2978 30.3493 22.7253 29.6664 21.382 28.4673C20.3368 27.5339 19.4631 26.4296 18.6251 25.2865C18.0761 24.5383 17.6035 23.7433 17.2888 22.8458C16.7042 21.1784 17.0194 19.7049 18.1233 18.4083C18.2208 18.2884 18.3396 18.1911 18.4726 18.1223C18.6057 18.0536 18.7502 18.0147 18.8975 18.008C19.1891 17.995 19.4822 17.9982 19.7738 18.0151C20.0251 18.0298 20.1483 18.2362 20.2388 18.4556C20.3992 18.8434 20.547 19.2365 20.6988 19.6281C20.9029 20.153 21.101 20.6802 21.3116 21.2024C21.4031 21.43 21.4051 21.6484 21.2749 21.8466C21.0336 22.2142 20.7863 22.5785 20.5248 22.9292C20.2494 23.2995 20.2338 23.3964 20.456 23.7955C21.4765 25.6291 22.8831 26.9774 24.7231 27.7822C25.1087 27.9505 25.2479 27.9238 25.5088 27.5818C25.8105 27.1843 26.1121 26.7846 26.4077 26.3789C26.6224 26.0832 26.738 26.0228 27.0753 26.1556C27.4126 26.2885 27.7354 26.4573 28.0642 26.6114C28.5795 26.8532 29.0963 27.0912 29.6075 27.3411C29.9705 27.5181 30.0042 27.6134 29.9996 28.0322C29.98 29.8837 28.6503 30.7005 27.389 30.9406C27.2171 30.9733 27.0371 30.9673 26.8642 30.9793L26.8586 31Z"
                                            fill="#667B68" />
                                    </svg>
                                </a>
                            </div>
                            <div>Chat with Experts</div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                




                    <?php

                    // Check rows exists.
                    if (have_rows('product_features')):

                    ?>
                    <div class="bg-[#F4F5F4] border border-[#F0F0F0] rounded-xl p-4 md:p-8 text-md h-full">
                        <ul class="!space-y-4 list-none !ms-0 !ps-0">
                            <li class="grid grid-cols-[32px_auto] gap-2">
                                <div>
                                </div>
                                <div class="text-[#B05B3C] text-2xl lora italic">About the Product</div>

                            </li>
                            <?php
                            // Loop through rows.
                            while (have_rows('product_features')) : the_row();

                                // Load sub field value.
                                $featureTitle = get_sub_field('title');
                                $featureText = get_sub_field('description');

                            ?>


                                <li class="grid grid-cols-[32px_auto] gap-2">
                                    <div>
                                        <img class="size-8" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/checkmark.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <b><?php echo $featureTitle; ?></b> – <?php echo $featureText; ?>
                                    </div>

                                </li>


                            <?php

                            // End loop.
                            endwhile;
                            ?>
                        </ul>
                    </div>
                    <?php
                    endif;

                    ?>


                    <!-- <ul class="!space-y-4 list-none !ms-0 !ps-0">
                        <li class="grid grid-cols-[32px_auto] gap-2">
                            <div>
                            </div>
                            <div class="text-[#B05B3C] text-2xl lora italic">About the Product</div>

                        </li>
                        <li class="grid grid-cols-[32px_auto] gap-2">
                            <div>
                                <img class="size-8"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/checkmark.png" alt="">
                            </div>
                            <div>
                                <b>Premium Quality Pure Silver</b> – Crafted with authentic 99.9 silver, ensuring
                                durability, purity, and long-lasting shine.
                            </div>

                        </li>

                        <li class="grid grid-cols-[32px_auto] gap-2">
                            <div>
                                <img class="size-8" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/checkmark.png"
                                    alt="">
                            </div>
                            <div>
                                <b>Intricate Design</b> – Crafted using advanced electroforming techniques, ensuring
                                flawless design, durability, and fine detailing.
                            </div>

                        </li>


                        <li class="grid grid-cols-[32px_auto] gap-2">
                            <div>
                                <img class="size-8" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/checkmark.png"
                                    alt="">
                            </div>
                            <div>
                                <b>Perfect for Pooja & Gifting</b> – Ideal for daily worship, festive occasions, and
                                spiritual ceremonies. A thoughtful gift for weddings, housewarming, Diwali, and other
                                auspicious events.
                            </div>

                        </li>

                        <li class="grid grid-cols-[32px_auto] gap-2">
                            <div>
                                <img class="size-8" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/checkmark.png"
                                    alt="">
                            </div>
                            <div>
                                <b>Lightweight & Compact </b> – Designed for easy placement in offices, and cars,
                                allowing you to carry blessings wherever you go.
                            </div>

                        </li>


                        <li class="grid grid-cols-[32px_auto] gap-2">
                            <div>
                                <img class="size-8" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/checkmark.png"
                                    alt="">
                            </div>
                            <div>
                                <b>Made In India</b> – Our God Silver Idols are proudly Made In India.
                            </div>

                        </li>


                        <li class="grid grid-cols-[32px_auto] gap-2">
                            <div>
                                <img class="size-8" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/checkmark.png"
                                    alt="">
                            </div>
                            <div>
                                <b>Dimensions</b> –
                                <?php
                                if (function_exists('get_field')) {
                                    $dimensions = get_field('product_dimension');
                                    echo !empty($dimensions) ? esc_html($dimensions) : '';
                                }
                                ?>
                            </div>


                        </li>
                    </ul> -->
              
            </div>
        </div>
    </div>
</section>








<section class="ct-container py-8 md:py-12 lg:py-16 similar-products">
    <div class="text-2xl lg:text-3xl text-deep-forest italic lora mb-8 text-center">Similar Products</div>

    <?php
    global $product;
    $product_id = $product->get_id();

    // Get categories of the current product
    $product_cats = wp_get_post_terms($product_id, 'product_cat', ['fields' => 'ids']);

    // Get related products
    $related_args = [
        'post_type'           => 'product',
        'posts_per_page'      => 10,
        'post__not_in'        => [$product_id],
        'ignore_sticky_posts' => 1,
        'meta_query'          => WC()->query->get_meta_query(),
        'tax_query'           => [],
    ];

    if (!empty($product_cats)) {
        $related_args['tax_query'][] = [
            'taxonomy' => 'product_cat',
            'field'    => 'term_id',
            'terms'    => $product_cats,
        ];
    }

    $related_query = new WP_Query($related_args);
    $related_ids = wp_list_pluck($related_query->posts, 'ID');
    $related_count = count($related_ids);

    // Fallback to recent products
    if ($related_count < 10) {
        $needed = 10 - $related_count;

        $recent_args = [
            'post_type'           => 'product',
            'posts_per_page'      => $needed,
            'post__not_in'        => array_merge([$product_id], $related_ids),
            'orderby'             => 'date',
            'order'               => 'DESC',
            'ignore_sticky_posts' => 1,
        ];

        $recent_query = new WP_Query($recent_args);
    } else {
        $recent_query = false;
    }
    ?>

    <?php if ($related_query->have_posts() || ($recent_query && $recent_query->have_posts())) : ?>
        <!-- Slider main container -->
        <div class="swiper relative">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php
                while ($related_query->have_posts()) {
                    $related_query->the_post();
                    echo '<div class="swiper-slide">';
                    wc_get_template_part('content', 'product');
                    echo '</div>';
                }

                if ($recent_query && $recent_query->have_posts()) {
                    while ($recent_query->have_posts()) {
                        $recent_query->the_post();
                        echo '<div class="swiper-slide">';
                        wc_get_template_part('content', 'product');
                        echo '</div>';
                    }
                }

                wp_reset_postdata();
                ?>
            </div>

            <div class="absolute top-1/2 left-0 right-0 z-10">
        <div class="flex justify-between items-center gap-1 relative">

            <button class="button-prev">
                <svg class="size-8" viewBox="0 0 41 41" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20.5" cy="20.5" r="20" transform="matrix(-1 0 0 1 41 0)" fill="#667B68" />
                    <path
                        d="M26.3508 11.2992C25.8008 10.7492 24.9008 10.7492 24.4008 11.2992L15.6508 19.9992C15.1008 20.5492 15.1008 21.4492 15.6508 21.9492L24.3508 30.6492C24.6008 30.8992 25.0008 31.0492 25.3508 31.0492C25.7008 31.0492 26.0508 30.8992 26.3508 30.6492C26.9008 30.0992 26.9008 29.1992 26.3508 28.6992L18.6508 20.9992L26.3508 13.2992C26.9008 12.7492 26.9008 11.8492 26.3508 11.2992Z"
                        fill="white" />
                </svg>

            </button>
            <button class="button-next">
                <svg class="size-8" viewBox="0 0 41 41" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20.5" cy="20.5" r="20.5" fill="#667B68" />
                    <path
                        d="M14.6492 11.2992C15.1992 10.7492 16.0992 10.7492 16.5992 11.2992L25.3492 19.9992C25.8992 20.5492 25.8992 21.4492 25.3492 21.9492L16.6492 30.6492C16.3992 30.8992 15.9992 31.0492 15.6492 31.0492C15.2992 31.0492 14.9492 30.8992 14.6492 30.6492C14.0992 30.0992 14.0992 29.1992 14.6492 28.6992L22.3492 20.9992L14.6492 13.2992C14.0992 12.7492 14.0992 11.8492 14.6492 11.2992Z"
                        fill="white" />
                </svg>
            </button>
        </div>


    </div>
        </div>
    <?php endif; ?>



 

</section>

<section class="ct-container" x-data="{ showForm: false }">
    <div class="max-w-3xl mx-auto py-12">
        <div class="text-2xl lg:text-3xl text-deep-forest italic lora mb-8 text-center">Customer Reviews
        </div>

        <!-- Display existing reviews -->
        <div id="existing-reviews" class="space-y-6 mb-8">
            <!-- Dynamically populate with PHP -->
            <?php
            $comments = get_comments(['post_id' => get_the_ID()]);
            if ($comments):
                foreach ($comments as $comment):
            ?>
                    <div class="border-b border-b-gray-300 pb-4">
                        <div class="font-semibold"><?= esc_html($comment->comment_author); ?></div>
                        <div class="text-xs text-gray-500 mb-1">
                            <?= get_comment_date('F j, Y', $comment) ?> at <?= get_comment_time('g:i A', $comment) ?>
                        </div>
                        <div class="flex items-center mb-1">
                            <?php
                            $rating = intval(get_comment_meta($comment->comment_ID, 'rating', true));
                            for ($i = 1; $i <= 5; $i++):
                                echo $i <= $rating ? '⭐' : '☆';
                            endfor;
                            ?>
                        </div>
                        <div><?= esc_html($comment->comment_content); ?></div>
                    </div>
                <?php endforeach; ?>
                <div class="flex justify-center items-center mt-10" x-show="!showForm" x-cloak>
                    <button @click="showForm = true"
                        class="bg-[#3B4443] text-white !px-6 !py-2 rounded-full cursor-pointer">
                        Write a Review
                    </button>
                </div>
            <?php
            else: ?>
                <div class="grid md:grid-cols-2 gap-4 max-w-md mx-auto" x-show="!showForm" x-cloak>
                    <div class="text-center md:text-left text-deep-forest m-auto">Be the first to write a review</div>
                    <div class="text-center md:text-right">
                        <button @click="showForm = true"
                            class="bg-[#3B4443] text-white !px-6 !py-2 rounded-full cursor-pointer">
                            Write a Review
                        </button>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Review form -->
        <div x-data="{ rating: 0 }" class="max-w-md mx-auto" x-show="showForm" x-cloak>
            <div class="text-md text-center font-medium mb-4">Write a Review</div>
            <form action="<?php echo site_url('/wp-comments-post.php'); ?>" method="POST" class="space-y-4">
                <p class="text-sm">* Indicates a required field</p>

                <!-- Star Rating -->
                <div class="flex items-center space-x-1">
                    <div class="text-sm font-medium"><span class="text-red-500">*</span> Score:</div>
                    <template x-for="i in 5">
                        <svg @click="rating = i" :class="{'text-yellow-400': rating >= i, 'text-gray-300': rating < i}"
                            class="w-5 h-5 cursor-pointer !stroke-deep-forest" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927C9.448 1.783 10.552 1.783 10.951 2.927L12.18 6.302l3.69.27c1.218.089 1.709 1.65.826 2.47l-2.799 2.553.83 3.785c.275 1.255-1.028 2.19-2.13 1.54L10 14.347l-3.597 2.573c-1.102.65-2.405-.285-2.13-1.54l.83-3.785L2.304 9.043c-.883-.82-.392-2.38.826-2.47l3.69-.27L9.049 2.927z" />
                        </svg>
                    </template>
                    <input type="hidden" name="rating" :value="rating">
                </div>

                <div class="flex flex-col">

                    <div class="text-sm font-medium mb-2"><span class="text-red-500">*</span> Title:</div>
                    <!-- Title -->
                    <input type="text" name="title" placeholder="Title"
                        class="w-full border px-3 py-2 rounded !bg-white !border-deep-forest" required>

                    <div class="text-sm font-medium mb-2 mt-4">Review:</div>

                    <!-- Review -->
                    <textarea name="comment" resize="none" placeholder="Review" rows="4"
                        class="w-full border px-3 py-2 rounded !resize-none !bg-white !border-deep-forest""
                        required></textarea>


						<div class=" text-sm font-medium mb-2 mt-4"><span class="text-red-500">*</span> Name:</div>

                    <!-- Name -->
                    <input type="text" name="author" placeholder="Name" class="w-full border px-3 py-2 rounded !bg-white !border-deep-forest""
                        required>

						<div class="text-sm font-medium mb-2 mt-4"><span class="text-red-500">*</span> Email:</div>

                    <!-- Email -->
                    <input type="email" name="email" placeholder="Email" class="w-full border px-3 py-2 rounded !bg-white !border-deep-forest""
                        required>

                    <!-- Hidden fields for WordPress comment submission -->
                    <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" />
                </div>

                <div class="flex flex-wrap gap-6 justify-center mt-8">
                    <button @click="showForm = false;" class="!px-6 !py-2 cursor-pointer bg-transparent text-deep-forest !rounded-full  !border !border-deep-forest">Cancel
                        Review</button>
                    <button type="submit" class="!px-6 !py-2 !bg-[#B05B3C] text-white !rounded-full">Submit
                        Review</button>
                </div>
            </form>
        </div>
    </div>

</section>


<section class="bg-sage">
        <div class="py-3 md:py-4 text-white text-sm lg:text-base">
            <div class="marquee-container">
                <div class="!pr-10">FOLLOW US @ZILARASILVER</div>
                <div class="!pr-10"><svg xmlns="http://www.w3.org/2000/svg" width="49" height="19" viewBox="0 0 49 19"
                        fill="none">
                        <mask id="path-1-inside-1_3050_165" fill="white">
                            <path
                                d="M14.6594 8.65231L18.3028 9.16041L14.6594 9.64931C13.3972 9.78635 12.2227 10.3587 11.339 11.2673C10.433 12.1724 9.84925 13.3482 9.67705 14.6151L9.1865 18.3028L8.67671 14.6151C8.54529 13.3178 7.97886 12.2259 7.03517 11.3046C6.11576 10.4094 4.934 9.82956 3.66146 9.64931L0 9.16041L3.66146 8.65231C4.9357 8.50917 6.11858 7.9231 7.00231 6.99705C7.92381 6.10062 8.51529 4.92082 8.68124 3.64813L9.19104 0L9.68155 3.64813C9.85735 4.91426 10.4405 6.08938 11.3435 6.99705C12.2142 7.92938 13.3932 8.51715 14.664 8.65231" />
                        </mask>
                        <path
                            d="M18.3028 9.16041L18.3693 9.65597L18.3718 8.6652L18.3028 9.16041ZM14.6594 9.64931L14.7134 10.1465L14.7259 10.1449L14.6594 9.64931ZM11.339 11.2673L11.6924 11.6211L11.6974 11.6159L11.339 11.2673ZM9.67705 14.6151L9.1816 14.5478L9.18141 14.5492L9.67705 14.6151ZM9.1865 18.3028L8.69121 18.3712L9.68214 18.3687L9.1865 18.3028ZM8.67671 14.6151L8.17925 14.6655L8.18017 14.6746L8.18142 14.6836L8.67671 14.6151ZM7.03517 11.3046L7.38447 10.9468L7.38398 10.9463L7.03517 11.3046ZM3.66146 9.64931L3.73159 9.15424L3.72764 9.15371L3.66146 9.64931ZM0 9.16041L-0.0687257 8.66515L-0.0661759 9.65601L0 9.16041ZM3.66146 8.65231L3.60563 8.15527L3.59274 8.15706L3.66146 8.65231ZM7.00231 6.99705L6.65367 6.63865L6.64701 6.64513L6.64059 6.65185L7.00231 6.99705ZM8.68124 3.64813L8.18603 3.57893L8.18544 3.58348L8.68124 3.64813ZM9.19104 0L9.68658 -0.0666289L8.69585 -0.0691983L9.19104 0ZM9.68155 3.64813L9.18601 3.71476L9.18631 3.71689L9.68155 3.64813ZM11.3435 6.99705L11.7089 6.65579L11.7035 6.65001L11.698 6.64441L11.3435 6.99705ZM14.6111 9.14951L15.1083 9.20239L15.214 8.208L14.7169 8.15512L14.6111 9.14951ZM14.6594 8.65231L14.5904 9.14752L18.2337 9.65562L18.3028 9.16041L18.3718 8.6652L14.7285 8.1571L14.6594 8.65231ZM18.3028 9.16041L18.2363 8.66485L14.5929 9.15375L14.6594 9.64931L14.7259 10.1449L18.3693 9.65597L18.3028 9.16041ZM14.6594 9.64931L14.6055 9.15223C13.2278 9.30181 11.9455 9.9265 10.9805 10.9187L11.339 11.2673L11.6974 11.6159C12.4999 10.7908 13.5666 10.2709 14.7134 10.1464L14.6594 9.64931ZM11.339 11.2673L10.9856 10.9136C10.0023 11.8958 9.36857 13.1722 9.1816 14.5478L9.67705 14.6151L10.1725 14.6824C10.3299 13.5242 10.8636 12.4489 11.6923 11.6211L11.339 11.2673ZM9.67705 14.6151L9.18141 14.5492L8.69087 18.2368L9.1865 18.3028L9.68214 18.3687L10.1727 14.681L9.67705 14.6151ZM9.1865 18.3028L9.68179 18.2343L9.172 14.5466L8.67671 14.6151L8.18142 14.6836L8.69121 18.3712L9.1865 18.3028ZM8.67671 14.6151L9.17416 14.5647C9.02983 13.1399 8.4039 11.9421 7.38446 10.9468L7.03517 11.3046L6.68588 11.6623C7.55381 12.5097 8.06076 13.4957 8.17925 14.6655L8.67671 14.6151ZM7.03517 11.3046L7.38398 10.9463C6.38842 9.97699 5.109 9.34936 3.73159 9.15425L3.66146 9.64931L3.59134 10.1444C4.75899 10.3098 5.84311 10.8418 6.68637 11.6628L7.03517 11.3046ZM3.66146 9.64931L3.72764 9.15371L0.0661759 8.66481L0 9.16041L-0.0661759 9.65601L3.59529 10.1449L3.66146 9.64931ZM0 9.16041L0.0687257 9.65566L3.73019 9.14757L3.66146 8.65231L3.59274 8.15706L-0.0687257 8.66515L0 9.16041ZM3.66146 8.65231L3.71728 9.14919C5.1079 8.99297 6.39913 8.35334 7.36403 7.34224L7.00231 6.99705L6.64059 6.65185C5.83802 7.49286 4.76349 8.02537 3.60565 8.15544L3.66146 8.65231ZM7.00231 6.99705L7.35096 7.35544C8.35305 6.38061 8.9965 5.09737 9.17705 3.71278L8.68124 3.64813L8.18544 3.58348C8.03408 4.74427 7.49457 5.82062 6.65367 6.63865L7.00231 6.99705ZM8.68124 3.64813L9.17643 3.71733L9.68623 0.0691983L9.19104 0L8.69585 -0.0691983L8.18605 3.57893L8.68124 3.64813ZM9.19104 0L8.6955 0.0666289L9.18601 3.71476L9.68155 3.64813L10.1771 3.5815L9.68658 -0.0666289L9.19104 0ZM9.68155 3.64813L9.18631 3.71689C9.37704 5.0906 10.0097 6.36529 10.989 7.34968L11.3435 6.99705L11.698 6.64441C10.8713 5.81347 10.3377 4.73792 10.1768 3.57937L9.68155 3.64813ZM11.3435 6.99705L10.9781 7.33831C11.9309 8.35867 13.2211 9.00166 14.6111 9.14951L14.664 8.65231L14.7169 8.15512C13.5654 8.03265 12.4974 7.50009 11.7089 6.65579L11.3435 6.99705Z"
                            fill="white" mask="url(#path-1-inside-1_3050_165)" />
                        <path
                            d="M45.3583 8.65231L49 9.16041L45.3583 9.64931C44.0958 9.7861 42.921 10.3584 42.0371 11.2673C41.1319 12.1727 40.5487 13.3484 40.3765 14.6151L39.886 18.3028L39.3763 14.6151C39.2438 13.3178 38.6785 12.2259 37.7338 11.3046C36.8135 10.4083 35.6301 9.82841 34.356 9.64931L30.6973 9.16041L34.3583 8.65231C35.6324 8.50945 36.8153 7.92333 37.6987 6.99705C38.6204 6.10073 39.2122 4.92094 39.3785 3.64813L39.8883 0L40.3788 3.64813C40.5546 4.914 41.1372 6.08898 42.0393 6.99705C42.9102 7.92962 44.0896 8.51742 45.3605 8.65231"
                            fill="white" />
                    </svg></div>
            </div>
        </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
let swiper4 = new Swiper(".similar-products .swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
  centerInsufficientSlides: true, // ✅ important
    loop: false,
    navigation: {
        nextEl: ".similar-products .button-next",
        prevEl: ".similar-products .button-prev",
    },
    breakpoints: {
        460: {
            slidesPerView: 1.5,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1240: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
    },
});
</script>

<script type="module">
    import InfiniteMarquee from "<?php echo get_stylesheet_directory_uri(); ?>/assets/InfiniteMarquee/infinite-marquee.bundle.js";

    new InfiniteMarquee({
        element: '.marquee-container',
        speed: 20000,
        smoothEdges: false,
        direction: 'left',
        gap: {
            vertical: '0px',
            horizontal: '0px'
        },
        duplicateCount: 2,
        mobileSettings: {
            direction: 'left',
            speed: 20000
        },
        on: {
            beforeInit: () => {
                console.log('Not Yet Initialized');
            },

            afterInit: () => {
                console.log('Initialized');
            }
        }
    });
</script>


<?php
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */