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
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/assets/InfiniteMarquee/infinite-marquee.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script defer src="//unpkg.com/alpinejs" defer></script>


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

    <div id="main-container">
        <?php
        do_action('blocksy:header:before');

        echo $global_header;

        do_action('blocksy:header:after');
        do_action('blocksy:content:before');
        ?>

        
<nav class="bg-sage max-lg:hidden lg:block relative">
                <div class="ct-container py-4 flex justify-center items-center gap-8">
                    <!-- Menu Item 1 -->
                    <div x-data="{ open: false }" @click.away="open = false">
                        <button @click="open = !open" class="!text-white uppercase !text-sm font-medium px-4 py-2 block cursor-pointer">
                            Idols
                        </button>

                        <!-- Mega Menu -->
                        <div
                            x-show="open" x-cloak
                            x-transition
                            class="absolute left-0 top-full w-full bg-white shadow-xl z-50"
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
                                        <div class="text-md !font-semibold text-deep-forest mb-2 uppercase">Explore More</div>
                                        <hr class="my-4">
                                        <div class="uppercase text-md !font-semibold text-deep-forest mb-2">shop by metal</div>
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
                        <button @click="open = !open" class="!text-white uppercase !text-sm font-medium px-4 py-2 block cursor-pointer">
                            Earrings
                        </button>

                        <!-- Another Mega Menu -->
                        <div
                            x-show="open" x-cloak
                            x-transition
                            class="absolute left-0 top-full w-full bg-white shadow-xl z-50"
                            style="display: none;">
                            <div class="ct-container py-6">
                                <div class="text-xl font-semibold text-gray-700 mb-2 italic lora">Earrings</div>
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
                                        <div class="text-md !font-semibold text-deep-forest mb-2 uppercase">Explore More</div>
                                        <hr class="my-4">
                                        <div class="uppercase text-md !font-semibold text-deep-forest mb-2">shop by metal</div>
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
                        <button @click="open = !open" class="!text-white uppercase !text-sm font-medium px-4 py-2 block cursor-pointer">
                            Necklace
                        </button>

                        <!-- Another Mega Menu -->
                        <div
                            x-show="open" x-cloak
                            x-transition
                            class="absolute left-0 top-full w-full bg-white shadow-xl z-50"
                            style="display: none;">
                            <div class="ct-container py-6">
                                <div class="text-xl font-semibold text-gray-700 mb-2 italic lora">Necklace</div>
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
                                        <div class="text-md !font-semibold text-deep-forest mb-2 uppercase">Explore More</div>
                                        <hr class="my-4">
                                        <div class="uppercase text-md !font-semibold text-deep-forest mb-2">shop by metal</div>
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
                        <button @click="open = !open" class="!text-white uppercase !text-sm font-medium px-4 py-2 block cursor-pointer">
                            Stud
                        </button>

                        <!-- Another Mega Menu -->
                        <div
                            x-show="open" x-cloak
                            x-transition
                            class="absolute left-0 top-full w-full bg-white shadow-xl z-50"
                            style="display: none;">
                            <div class="ct-container py-6">
                                <div class="text-xl font-semibold text-gray-700 mb-2 italic lora">Stud</div>
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
                                        <div class="text-md !font-semibold text-deep-forest mb-2 uppercase">Explore More</div>
                                        <hr class="my-4">
                                        <div class="uppercase text-md !font-semibold text-deep-forest mb-2">shop by metal</div>
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
                        <button @click="open = !open" class="!text-white uppercase !text-sm font-medium px-4 py-2 block cursor-pointer">
                            Pendant
                        </button>

                        <!-- Another Mega Menu -->
                        <div
                            x-show="open" x-cloak
                            x-transition
                            class="absolute left-0 top-full w-full bg-white shadow-xl z-50"
                            style="display: none;">
                            <div class="ct-container py-6">
                                <div class="text-xl font-semibold text-gray-700 mb-2 italic lora">Pendant</div>
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
                                        <div class="text-md !font-semibold text-deep-forest mb-2 uppercase">Explore More</div>
                                        <hr class="my-4">
                                        <div class="uppercase text-md !font-semibold text-deep-forest mb-2">shop by metal</div>
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

        <main <?php echo blocksy_main_attr() ?>>

            <?php
            do_action('blocksy:content:top');
            blocksy_before_current_template();
            ?>















