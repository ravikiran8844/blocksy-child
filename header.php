<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?><?php echo blocksy_html_attr() ?>>

<head>
    <?php do_action('blocksy:head:start') ?>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <?php do_action('blocksy:head:end') ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/assets/InfiniteMarquee/infinite-marquee.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script defer src="//unpkg.com/alpinejs" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>

</head>

<?php
ob_start();
blocksy_output_header();
$global_header = ob_get_clean();
?>

<body <?php body_class(); ?> <?php echo blocksy_body_attr() ?>>

    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>

    <div class="!bg-[#F4F5F4]">
    <div class="py-2 ct-container">
                <div class="text-center text-sm text-deep-forest">Zilara - A JEWELONE Product
                </div>
    </div>
    </div>
    <header x-data="{ open: false }" class="sticky top-0 z-10 !bg-[#F4F5F4]">
        <div>
            
            <div class="py-2 border-t border-b border-[#D9E2DA]">
                <div class="grid gap-5 grid-cols-[auto_1fr] xl:grid-cols-[250px_auto_250px] ct-container">
                    <div class="flex gap-3 items-center">

                        <div class="lg:hidden">
                            <button @click="open = true" class="cursor-pointer">
                                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="34" height="23" viewBox="0 0 34 23" fill="none">
                                    <path d="M2.14648 2.00928H29.2727" stroke="black" stroke-width="2.51168" stroke-linecap="round" />
                                    <path d="M2.14648 20.0933H29.2727" stroke="black" stroke-width="2.51168" stroke-linecap="round" />
                                    <path d="M2.14648 11.0513H20.2306" stroke="black" stroke-width="2.51168" stroke-linecap="round" />
                                </svg>
                            </button>

                        </div>

                        <div>
                            <a href="<?php echo home_url('/'); ?>">
                                <img class="!max-w-[130px] h-auto"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/Group-22448.svg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="max-xl:hidden xl:flex justify-center items-center">

                        <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="w-full">
                            <div
                                class="flex bg-white rounded-md border border-[#D9E2DA] overflow-hidden max-w-md w-full m-auto">
                                <input type="search" name="s"
                                    class="w-full !border-none !outline-none !text-[#AEAEAE] placeholder:text-[#AEAEAE]"
                                    placeholder="Search for ZILARA" value="<?php echo get_search_query(); ?>" />
                                <button type="submit"
                                    class="!border-none !text-[#D9E2DA] !bg-white flex items-center justify-center !ps-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5 stroke-[#8F9D90]">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                    </svg>

                                </button>
                            </div>
                        </form>

                    </div>

                    <div class="flex gap-3 lg:gap-4 items-center justify-end w-full">

                        <div>
                            <a href="<?php echo home_url('/shop'); ?>" class="!grid gap-1 place-items-center grid-rows-[26px_auto]">
                                <span>
                                    <svg class="!fill-none hover:!fill-none h-5" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.8035 13.7256H14.3203V27.1084H26.8035V13.7256Z" stroke="#3B4443" stroke-width="1.79937" stroke-linejoin="round" />
                                        <path d="M28.1519 8.77722V13.613H4.53516V8.77722L8.47128 3.94141H24.2158L28.1519 8.77722Z" stroke="#3B4443" stroke-width="1.79937" stroke-linejoin="round" />
                                        <path d="M10.0449 13.3882V9.0022" stroke="#3B4443" stroke-width="1.79937" stroke-linejoin="round" />
                                        <path d="M16.3438 13.3882V9.0022" stroke="#3B4443" stroke-width="1.79937" stroke-linejoin="round" />
                                        <path d="M22.6406 13.3882V9.0022" stroke="#3B4443" stroke-width="1.79937" stroke-linejoin="round" />
                                        <path d="M5.88477 13.3882V27.5582" stroke="#3B4443" stroke-width="1.79937" stroke-linejoin="round" />
                                    </svg>

                                </span>
                                <span class="!text-xs !text-deep-forest max-lg:hidden uppercase">
                                    stores
                                </span>
                            </a>
                        </div>
                        <div>
                            <?php
                            if (function_exists('YITH_WCWL')) {
                                $wishlist_count = YITH_WCWL()->count_products();
                            }
                            ?>

                            <a href="<?php echo esc_url(YITH_WCWL()->get_wishlist_url()); ?>" class="relative !grid  gap-1 place-items-center grid-rows-[26px_auto]">
                                <svg class="!fill-none hover:!fill-none h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="none">
                                    <g clip-path="url(#clip0_1844_1600)">
                                        <path d="M23.1507 16.6754L15.2706 24.679L7.39777 16.6754C0.440189 9.61462 8.32624 1.6206 15.2778 8.68134C22.3314 1.51744 30.2114 9.51145 23.1579 16.685L23.1507 16.6754Z" stroke="#3B4443" stroke-width="1.79937" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1844_1600">
                                            <rect width="28.79" height="28.79" fill="white" transform="translate(0.886719 0.449707)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                             

                                <span class="!text-xs !text-deep-forest max-lg:hidden uppercase">
                                    WHISLIST
                                </span>
                            </a>
                        </div>
                        <div data-id="cart">


                            <a class="ct-cart-item ct-offcanvas-trigger !grid  gap-1 place-items-center grid-rows-[26px_auto]"
                                href="#woo-cart-panel" data-label="left" data-auto-open="archive:product">
                                <span class="ct-icon-container flex-grow">
                                    <span class="ct-dynamic-count-cart" data-count="0" aria-hidden="true">0</span>
                                    <!--?xml version="1.0" encoding="UTF-8"?-->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="!fill-none hover:!fill-none h-5"
                                        viewBox="0 0 24 25" fill="none">
                                        <path
                                            d="M23.043 7.53735V20.8967C23.0429 22.6783 21.598 24.1223 19.8164 24.1223H4.92773C3.14613 24.1223 1.70127 22.6783 1.70117 20.8967V7.53735H23.043Z"
                                            stroke="#3B4443" stroke-width="1.48892" />
                                        <path
                                            d="M7.61523 11.8471V7.24248C7.61523 5.28282 8.08679 3.21729 9.67476 2.06899C11.1535 0.999691 13.0538 0.520773 14.9258 2.10878C16.2977 3.27258 16.6521 5.18743 16.6521 6.98647V11.8471"
                                            stroke="#3B4443" stroke-width="1.48892" />
                                    </svg>
                                </span>
                                <span class="!text-xs !text-deep-forest max-lg:hidden uppercase">
                                    CART
                                </span>
                            </a>

                        </div>
                        <div data-id="account" data-state="out"><a href="#account-modal"
                                class="ct-account-item !grid gap-1 place-items-center grid-rows-[26px_auto]" data-label="left"
                                aria-label="Login">

                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="!fill-none hover:!fill-none h-5"
                                        viewBox="0 0 30 30" fill="none">
                                        <g clip-path="url(#clip0_1835_361)">
                                            <path
                                                d="M15.2686 13.5006C18.0014 13.5006 20.2169 11.2851 20.2169 8.55228C20.2169 5.81942 18.0014 3.604 15.2686 3.604C12.5357 3.604 10.3203 5.81942 10.3203 8.55228C10.3203 11.2851 12.5357 13.5006 15.2686 13.5006Z"
                                                stroke="#3B4443" stroke-width="1.79937" />
                                            <path
                                                d="M4.63653 25.1836C4.36543 25.1836 5.41146 22.1319 5.49903 21.9136C7.06449 18.0125 10.1546 18.0305 15.2588 18.0305C20.3631 18.0305 23.8478 18.0137 25.4145 21.9136C25.5021 22.1319 26.1522 25.1812 25.8799 25.1812H4.63653V25.1836Z"
                                                stroke="#3B4443" stroke-width="1.79937" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1835_361">
                                                <rect width="28.79" height="28.79" fill="white"
                                                    transform="translate(0.873047 0.449707)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>

                                <span class="!text-xs !text-deep-forest max-lg:hidden uppercase">
                                    ACCOUNT
                                </span>
                            </a></div>
                    </div>
                </div>
            </div>


        </div>

        <nav class="bg-sage max-lg:hidden lg:block relative"
            style="box-shadow: 0px 10px 30.5px 0px rgba(175, 175, 175, 0.20);">
            <div class="ct-container py-3 flex justify-center items-center gap-12">
                <!-- Menu Item 1 -->
                <div x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" class="!text-white uppercase !text-sm  px-4 py-2 block cursor-pointer">
                        Idols
                    </button>

                    <!-- Mega Menu -->
                    <div x-show="open" x-cloak x-transition class="absolute left-0 top-full w-full bg-white shadow-xl z-50"
                        style="display: none;">
                        <div class="ct-container py-6">
                            <div class="text-xl font-semibold text-gray-700 mb-2 italic lora">Idols</div>
                            <div class="grid grid-cols-4 gap-6">
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/1-20-1.jpg" alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Idol 1
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/1-20-1.jpg" alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Idol 2
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/1-20-1.jpg" alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Idol 3
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <div class="text-md !font-semibold text-deep-forest mb-2 uppercase">Explore More
                                    </div>
                                    <hr class="my-4">
                                    <div class="uppercase text-md !font-semibold text-deep-forest mb-2">shop by metal
                                    </div>
                                    <ul class="space-y-1 !list-none !pl-0">

                                        <li><a href="#" class="!text-deep-forest">Silver Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Brass Idols</a></li>
                                    </ul>
                                    <hr class="my-4">
                                    <div class="uppercase text-md !font-semibold text-deep-forest mb-2">Curated by</div>

                                    <ul class="space-y-1 !list-none !pl-0">


                                        <li><a href="#" class="!text-deep-forest">Ganesha Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Lakshmi Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Hanuman Idols</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Menu Item 2 -->
                <div x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" class="!text-white uppercase !text-sm  px-4 py-2 block cursor-pointer">
                        Earrings
                    </button>

                    <!-- Another Mega Menu -->
                    <div x-show="open" x-cloak x-transition class="absolute left-0 top-full w-full bg-white shadow-xl z-50"
                        style="display: none;">
                        <div class="ct-container py-6">
                            <div class="text-xl font-semibold text-gray-700 mb-2 italic lora">Earrings</div>
                            <div class="grid grid-cols-4 gap-6">
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-1.jpg"
                                            alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Earring 1
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-1.jpg"
                                            alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Earring 2
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-1.jpg"
                                            alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Earring 3
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <div class="text-md !font-semibold text-deep-forest mb-2 uppercase">Explore More
                                    </div>
                                    <hr class="my-4">
                                    <div class="uppercase text-md !font-semibold text-deep-forest mb-2">shop by metal
                                    </div>
                                    <ul class="space-y-1 !list-none !pl-0">

                                        <li><a href="#" class="!text-deep-forest">Silver Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Brass Idols</a></li>
                                    </ul>
                                    <hr class="my-4">
                                    <div class="uppercase text-md !font-semibold text-deep-forest mb-2">Curated by</div>

                                    <ul class="space-y-1 !list-none !pl-0">


                                        <li><a href="#" class="!text-deep-forest">Ganesha Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Lakshmi Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Hanuman Idols</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Menu Item 3 -->
                <div x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" class="!text-white uppercase !text-sm  px-4 py-2 block cursor-pointer">
                        Necklace
                    </button>

                    <!-- Another Mega Menu -->
                    <div x-show="open" x-cloak x-transition class="absolute left-0 top-full w-full bg-white shadow-xl z-50"
                        style="display: none;">
                        <div class="ct-container py-6">
                            <div class="text-xl font-semibold text-gray-700 mb-2 italic lora">Necklace</div>
                            <div class="grid grid-cols-4 gap-6">
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-4.jpg"
                                            alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Necklace 1
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-4.jpg"
                                            alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Necklace 2
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-4.jpg"
                                            alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Necklace 3
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <div class="text-md !font-semibold text-deep-forest mb-2 uppercase">Explore More
                                    </div>
                                    <hr class="my-4">
                                    <div class="uppercase text-md !font-semibold text-deep-forest mb-2">shop by metal
                                    </div>
                                    <ul class="space-y-1 !list-none !pl-0">

                                        <li><a href="#" class="!text-deep-forest">Silver Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Brass Idols</a></li>
                                    </ul>
                                    <hr class="my-4">
                                    <div class="uppercase text-md !font-semibold text-deep-forest mb-2">Curated by</div>

                                    <ul class="space-y-1 !list-none !pl-0">


                                        <li><a href="#" class="!text-deep-forest">Ganesha Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Lakshmi Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Hanuman Idols</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Menu Item 4 -->
                <div x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" class="!text-white uppercase !text-sm  px-4 py-2 block cursor-pointer">
                        Stud
                    </button>

                    <!-- Another Mega Menu -->
                    <div x-show="open" x-cloak x-transition class="absolute left-0 top-full w-full bg-white shadow-xl z-50"
                        style="display: none;">
                        <div class="ct-container py-6">
                            <div class="text-xl font-semibold text-gray-700 mb-2 italic lora">Stud</div>
                            <div class="grid grid-cols-4 gap-6">
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-2.jpg"
                                            alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Stud 1
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-2.jpg"
                                            alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Stud 2
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-2.jpg"
                                            alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Stud 3
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <div class="text-md !font-semibold text-deep-forest mb-2 uppercase">Explore More
                                    </div>
                                    <hr class="my-4">
                                    <div class="uppercase text-md !font-semibold text-deep-forest mb-2">shop by metal
                                    </div>
                                    <ul class="space-y-1 !list-none !pl-0">

                                        <li><a href="#" class="!text-deep-forest">Silver Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Brass Idols</a></li>
                                    </ul>
                                    <hr class="my-4">
                                    <div class="uppercase text-md !font-semibold text-deep-forest mb-2">Curated by</div>

                                    <ul class="space-y-1 !list-none !pl-0">


                                        <li><a href="#" class="!text-deep-forest">Ganesha Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Lakshmi Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Hanuman Idols</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Menu Item 5 -->
                <div x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" class="!text-white uppercase !text-sm  px-4 py-2 block cursor-pointer">
                        Pendant
                    </button>

                    <!-- Another Mega Menu -->
                    <div x-show="open" x-cloak x-transition class="absolute left-0 top-full w-full bg-white shadow-xl z-50"
                        style="display: none;">
                        <div class="ct-container py-6">
                            <div class="text-xl font-semibold text-gray-700 mb-2 italic lora">Pendant</div>
                            <div class="grid grid-cols-4 gap-6">
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-3.jpg"
                                            alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Pendant 1
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-3.jpg"
                                            alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Pendant 2
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-3.jpg"
                                            alt="">
                                        <div class="text-center text-deep-forest mt-2 font-medium">
                                            Pendant 3
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <div class="text-md !font-semibold text-deep-forest mb-2 uppercase">Explore More
                                    </div>
                                    <hr class="my-4">
                                    <div class="uppercase text-md !font-semibold text-deep-forest mb-2">shop by metal
                                    </div>
                                    <ul class="space-y-1 !list-none !pl-0">

                                        <li><a href="#" class="!text-deep-forest">Silver Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Brass Idols</a></li>
                                    </ul>
                                    <hr class="my-4">
                                    <div class="uppercase text-md !font-semibold text-deep-forest mb-2">Curated by</div>

                                    <ul class="space-y-1 !list-none !pl-0">


                                        <li><a href="#" class="!text-deep-forest">Ganesha Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Lakshmi Idols</a></li>
                                        <li><a href="#" class="!text-deep-forest">Hanuman Idols</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>


        <!-- Drawer Menu -->
        <div>
            <!-- Drawer -->
            <div x-cloak x-show="open" @click.away="open = false" x-transition:enter="transition transform duration-300"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transition transform duration-300"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                class="fixed top-0 right-0 h-full w-84 bg-white shadow-lg z-50 p-6 overflow-y-auto">

                <!-- Close Button -->
                <button @click="open = false" class="mb-4 flex justify-end w-full cursor-pointer text-deep-forest hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Navigation Links -->
                <nav class="space-y-4">
                    <a href="/" class="block text-lg !text-deep-forest">Home</a>
                </nav>
            </div>
        </div>
    </header>



    <main <?php echo blocksy_main_attr() ?>>

        <?php
        do_action('blocksy:content:top');
        blocksy_before_current_template();
        ?>