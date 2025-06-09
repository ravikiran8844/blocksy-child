<?php
/*
Template Name: Home Page
*/
get_header(); ?>
<main>

    <section class="py-4 ps-4 collection-slider-mobile lg:hidden">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <div class="rounded-full overflow-hidden border border-[#8F9D90] p-1">
                            <a href="/product-category/idols/"> <img height="90" width="90"
                                    class="aspect-square object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection-img1.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="text-sm">
                            Idols
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <div class="rounded-full overflow-hidden border border-[#8F9D90] p-1">
                            <a href="/product-category/earrings/"><img height="90" width="90"
                                    class="aspect-square object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection-img2.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="text-sm">
                            Earrings
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <div class="rounded-full overflow-hidden border border-[#8F9D90] p-1">
                            <a href="/product-category/necklace/"> <img height="90" width="90"
                                    class="aspect-square object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection-img3.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="text-sm">
                            Necklace
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <div class="rounded-full overflow-hidden border border-[#8F9D90] p-1">
                            <a href="/product-category/stud/"><img height="90" width="90"
                                    class="aspect-square object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection-img4.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="text-sm">
                            Stud
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <div class="rounded-full overflow-hidden border border-[#8F9D90] p-1">
                            <a href="/product-category/pendant/"><img height="90" width="90"
                                    class="aspect-square object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection-img5.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="text-sm">
                            Pendant
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="aspect-[767/1174] md:aspect-[192/77]">
            <a href="/product-category/rings/">
                <picture>
                    <source media="(min-width: 768px)"
                        srcset="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/hero.jpg">
                    <source media="(max-width: 768px)"
                        srcset="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/hero-mobile.jpg">
                    <img fetchpriority="high" loading="eager" class="w-full"
                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/hero-mobile.jpg" alt="main banner">
                </picture>
            </a>
        </div>
    </section>

    <section class="ct-container pt-8 md:pt-10 lg:pt-12 xl:pt-15 collection-slider-desktop max-lg:hidden">
        <div class="text-center space-y-2">
            <div class="text-2xl lg:text-3xl text-deep-forest italic lora">Choose by style</div>
            <div class="text-sage">Where every piece tells a tale.</div>
        </div>

        <div class="swiper max-w-3xl mt-10 mx-auto">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <div class="rounded-full overflow-hidden border border-[#8F9D90] p-1">
                            <a href="/product-category/idols/"> <img loading="lazy" class="aspect-square object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection-img1.png"
                                    alt="">
                            </a>
                        </div>
                        <div>
                            Idols
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <div class="rounded-full overflow-hidden border border-[#8F9D90] p-1">
                            <a href="/product-category/earrings/"><img loading="lazy" class="aspect-square object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection-img2.png"
                                    alt="">
                            </a>
                        </div>
                        <div>
                            Earrings
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <div class="rounded-full overflow-hidden border border-[#8F9D90] p-1">
                            <a href="/product-category/necklace/"> <img loading="lazy"
                                    class="aspect-square object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection-img3.png"
                                    alt="">
                            </a>
                        </div>
                        <div>
                            Necklace
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <div class="rounded-full overflow-hidden border border-[#8F9D90] p-1">
                            <a href="/product-category/stud/"><img loading="lazy" class="aspect-square object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection-img4.png"
                                    alt="">
                            </a>
                        </div>
                        <div>
                            Stud
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <div class="rounded-full overflow-hidden border border-[#8F9D90] p-1">
                            <a href="/product-category/pendant/"><img loading="lazy" class="aspect-square object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection-img5.png"
                                    alt="">
                            </a>
                        </div>
                        <div>
                            Pendant
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="ct-container pt-8 md:pt-10 lg:pt-12 xl:pt-15 products-slider">

        <div class="bg-white">
            <div class="py-6 md:px-10 lg:px-14 flex justify-between items-center max-md:hidden">
                <div class="space-y-2">
                    <div class="text-sage">Tailored Luxury</div>
                    <div class="text-2xl lg:text-3xl text-deep-forest italic lora">Fine Jewellery That Adapts to Your
                        Style</div>

                </div>
                <div>
                    <a class="text-sage border uppercase text-sm border-sage rounded-full px-4 py-2 flex gap-1 items-center w-fit"
                        href="/shop">View all <svg xmlns="http://www.w3.org/2000/svg" width="15" height="7"
                            viewBox="0 0 15 7" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.867 3.1633L12.0177 0.135906C11.9763 0.0928365 11.927 0.058775 11.8725 0.0354241C11.8181 0.0120731 11.7597 0 11.7007 0C11.6417 0 11.5833 0.0120731 11.5289 0.0354241C11.4745 0.058775 11.4251 0.0928365 11.3838 0.135906C11.3016 0.22712 11.2559 0.346646 11.2559 0.470731C11.2559 0.594817 11.3016 0.714342 11.3838 0.805557L13.4764 3.02399H0.463565C0.34063 3.02399 0.222728 3.074 0.135799 3.16296C0.0488709 3.25192 0 3.37266 0 3.49847C0 3.62427 0.0488709 3.74467 0.135799 3.83363C0.222728 3.92259 0.34063 3.9726 0.463565 3.9726H13.4764L11.3838 6.19104C11.3016 6.28225 11.2559 6.40178 11.2559 6.52586C11.2559 6.64995 11.3016 6.76947 11.3838 6.86069C11.4246 6.90472 11.4737 6.93959 11.5282 6.96355C11.5827 6.98752 11.6414 7 11.7007 7C11.76 7 11.8187 6.98752 11.8732 6.96355C11.9277 6.93959 11.9768 6.90472 12.0177 6.86069L14.867 3.83329C14.9523 3.74368 15 3.62355 15 3.49847C15 3.37338 14.9523 3.25291 14.867 3.1633Z"
                                fill="#667B68"></path>
                        </svg></a>
                </div>
            </div>

            <div class="md:hidden text-center space-y-2 mb-6 p-4">
                <div class="text-sage">SHOP OUR BEST-SELLERS</div>
                <div class="text-2xl text-deep-forest italic lora">Modular fine Jewellery for
                    every mood. The ultimate
                    luxury experience.</div>

            </div>

            <div class="swiper">
                <!-- <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div>
                            <div class="relative overflow-hidden">
                                <img loading="lazy" class="hover:scale-105 transition duration-300"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-1.jpg"
                                    alt="">

                                <div
                                    class="absolute bottom-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full text-center px-4">
                                    <button
                                        class="uppercase w-full !text-sm cursor-pointer bg-white text-sage text-center rounded-full h-10 group !border-1 !border-white hover:border-white hover:bg-sage hover:text-white">
                                        <span class="group-hover:hidden">ADD TO CART</span>
                                        <span
                                            class="not-group-hover:hidden group-hover:flex items-center gap-2 justify-center lowercase">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>

                                            ₹ 45,445.00 - 16g
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="p-4 border-r border-[#C5C5C5] space-y-1">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="85" height="16" viewBox="0 0 105 19"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.49609 0L12.1229 6.43914L18.992 6.97504L13.7463 11.4905L15.3648 18.2609L9.49609 14.6124L3.62715 18.2609L5.24568 11.4905L0 6.97504L6.8691 6.43914L9.49609 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.49609 0L12.1229 6.43914L18.992 6.97504L13.7463 11.4905L15.3648 18.2609L9.49609 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M30.9979 0L33.6248 6.43914L40.4939 6.97504L35.2483 11.4905L36.8668 18.2609L30.9979 14.6124L25.1291 18.2609L26.7476 11.4905L21.502 6.97504L28.3711 6.43914L30.9979 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M30.998 0L33.625 6.43914L40.4941 6.97504L35.2485 11.4905L36.867 18.2609L30.998 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.4998 0L55.1268 6.43914L61.9959 6.97504L56.7502 11.4905L58.3688 18.2609L52.4998 14.6124L46.6311 18.2609L48.2496 11.4905L43.0039 6.97504L49.873 6.43914L52.4998 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.5 0L55.127 6.43914L61.9961 6.97504L56.7504 11.4905L58.3689 18.2609L52.5 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M74.0018 0L76.6287 6.43914L83.4979 6.97504L78.2522 11.4905L79.8707 18.2609L74.0018 14.6124L68.133 18.2609L69.7515 11.4905L64.5059 6.97504L71.375 6.43914L74.0018 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M74.002 0L76.6289 6.43914L83.498 6.97504L78.2524 11.4905L79.8709 18.2609L74.002 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M95.5037 0L98.1307 6.43914L105 6.97504L99.7541 11.4905L101.373 18.2609L95.5037 14.6124L89.635 18.2609L91.2535 11.4905L86.0078 6.97504L92.8769 6.43914L95.5037 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M95.5039 0L98.1309 6.43914L105 6.97504L99.7543 11.4905L101.373 18.2609L95.5039 14.6124V0Z"
                                            fill="#FFBD38" />
                                    </svg>
                                </div>

                                <div class="flex gap-2 items-center flex-wrap">
                                    <div class="text-md font-semibold text-sage">₹ 45,445.00</div>
                                    <div class="text-sm line-through text-[#6D6D6D]">₹ 48,397.00</div>
                                </div>

                                <div class="flex justify-between gap-2 flex-wrap">
                                    <div class="text-sm text-deep-forest">Silver Miracle Earrings</div>
                                    <div class="font-semibold text-sm text-sage">16g</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div>
                            <div class="relative overflow-hidden">
                                <img loading="lazy" class="hover:scale-105 transition duration-300"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-2.jpg"
                                    alt="">
                                <div
                                    class="absolute bottom-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full text-center px-4">
                                    <button
                                        class="uppercase w-full !text-sm cursor-pointer bg-white text-sage text-center rounded-full h-10 group !border-1 !border-white hover:border-white hover:bg-sage hover:text-white">
                                        <span class="group-hover:hidden">ADD TO CART</span>
                                        <span
                                            class="not-group-hover:hidden group-hover:flex items-center gap-2 justify-center lowercase">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>

                                            ₹ 45,445.00 - 16g
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="p-4 border-r border-[#C5C5C5] space-y-1">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="85" height="16" viewBox="0 0 105 19"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.49609 0L12.1229 6.43914L18.992 6.97504L13.7463 11.4905L15.3648 18.2609L9.49609 14.6124L3.62715 18.2609L5.24568 11.4905L0 6.97504L6.8691 6.43914L9.49609 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.49609 0L12.1229 6.43914L18.992 6.97504L13.7463 11.4905L15.3648 18.2609L9.49609 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M30.9979 0L33.6248 6.43914L40.4939 6.97504L35.2483 11.4905L36.8668 18.2609L30.9979 14.6124L25.1291 18.2609L26.7476 11.4905L21.502 6.97504L28.3711 6.43914L30.9979 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M30.998 0L33.625 6.43914L40.4941 6.97504L35.2485 11.4905L36.867 18.2609L30.998 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.4998 0L55.1268 6.43914L61.9959 6.97504L56.7502 11.4905L58.3688 18.2609L52.4998 14.6124L46.6311 18.2609L48.2496 11.4905L43.0039 6.97504L49.873 6.43914L52.4998 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.5 0L55.127 6.43914L61.9961 6.97504L56.7504 11.4905L58.3689 18.2609L52.5 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M74.0018 0L76.6287 6.43914L83.4979 6.97504L78.2522 11.4905L79.8707 18.2609L74.0018 14.6124L68.133 18.2609L69.7515 11.4905L64.5059 6.97504L71.375 6.43914L74.0018 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M74.002 0L76.6289 6.43914L83.498 6.97504L78.2524 11.4905L79.8709 18.2609L74.002 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M95.5037 0L98.1307 6.43914L105 6.97504L99.7541 11.4905L101.373 18.2609L95.5037 14.6124L89.635 18.2609L91.2535 11.4905L86.0078 6.97504L92.8769 6.43914L95.5037 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M95.5039 0L98.1309 6.43914L105 6.97504L99.7543 11.4905L101.373 18.2609L95.5039 14.6124V0Z"
                                            fill="#FFBD38" />
                                    </svg>
                                </div>

                                <div class="flex gap-2 items-center flex-wrap">
                                    <div class="text-md font-semibold text-sage">₹ 45,445.00</div>
                                    <div class="text-sm line-through text-[#6D6D6D]">₹ 48,397.00</div>
                                </div>

                                <div class="flex justify-between gap-2 flex-wrap">
                                    <div class="text-sm text-deep-forest">Silver Miracle Earrings</div>
                                    <div class="font-semibold text-sm text-sage">16g</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div>
                            <div class="relative overflow-hidden">
                                <img loading="lazy" class="hover:scale-105 transition duration-300"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-3.jpg"
                                    alt="">
                                <div
                                    class="absolute bottom-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full text-center px-4">
                                    <button
                                        class="uppercase w-full !text-sm cursor-pointer bg-white text-sage text-center rounded-full h-10 group !border-1 !border-white hover:border-white hover:bg-sage hover:text-white">
                                        <span class="group-hover:hidden">ADD TO CART</span>
                                        <span
                                            class="not-group-hover:hidden group-hover:flex items-center gap-2 justify-center lowercase">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>

                                            ₹ 45,445.00 - 16g
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="p-4 border-r border-[#C5C5C5] space-y-1">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="85" height="16" viewBox="0 0 105 19"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.49609 0L12.1229 6.43914L18.992 6.97504L13.7463 11.4905L15.3648 18.2609L9.49609 14.6124L3.62715 18.2609L5.24568 11.4905L0 6.97504L6.8691 6.43914L9.49609 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.49609 0L12.1229 6.43914L18.992 6.97504L13.7463 11.4905L15.3648 18.2609L9.49609 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M30.9979 0L33.6248 6.43914L40.4939 6.97504L35.2483 11.4905L36.8668 18.2609L30.9979 14.6124L25.1291 18.2609L26.7476 11.4905L21.502 6.97504L28.3711 6.43914L30.9979 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M30.998 0L33.625 6.43914L40.4941 6.97504L35.2485 11.4905L36.867 18.2609L30.998 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.4998 0L55.1268 6.43914L61.9959 6.97504L56.7502 11.4905L58.3688 18.2609L52.4998 14.6124L46.6311 18.2609L48.2496 11.4905L43.0039 6.97504L49.873 6.43914L52.4998 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.5 0L55.127 6.43914L61.9961 6.97504L56.7504 11.4905L58.3689 18.2609L52.5 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M74.0018 0L76.6287 6.43914L83.4979 6.97504L78.2522 11.4905L79.8707 18.2609L74.0018 14.6124L68.133 18.2609L69.7515 11.4905L64.5059 6.97504L71.375 6.43914L74.0018 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M74.002 0L76.6289 6.43914L83.498 6.97504L78.2524 11.4905L79.8709 18.2609L74.002 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M95.5037 0L98.1307 6.43914L105 6.97504L99.7541 11.4905L101.373 18.2609L95.5037 14.6124L89.635 18.2609L91.2535 11.4905L86.0078 6.97504L92.8769 6.43914L95.5037 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M95.5039 0L98.1309 6.43914L105 6.97504L99.7543 11.4905L101.373 18.2609L95.5039 14.6124V0Z"
                                            fill="#FFBD38" />
                                    </svg>
                                </div>

                                <div class="flex gap-2 items-center flex-wrap">
                                    <div class="text-md font-semibold text-sage">₹ 45,445.00</div>
                                    <div class="text-sm line-through text-[#6D6D6D]">₹ 48,397.00</div>
                                </div>

                                <div class="flex justify-between gap-2 flex-wrap">
                                    <div class="text-sm text-deep-forest">Silver Miracle Earrings</div>
                                    <div class="font-semibold text-sm text-sage">16g</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div>
                            <div class="relative overflow-hidden">
                                <img loading="lazy" class="hover:scale-105 transition duration-300"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-4.jpg"
                                    alt="">
                                <div
                                    class="absolute bottom-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full text-center px-4">
                                    <button
                                        class="uppercase w-full !text-sm cursor-pointer bg-white text-sage text-center rounded-full h-10 group !border-1 !border-white hover:border-white hover:bg-sage hover:text-white">
                                        <span class="group-hover:hidden">ADD TO CART</span>
                                        <span
                                            class="not-group-hover:hidden group-hover:flex items-center gap-2 justify-center lowercase">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>

                                            ₹ 45,445.00 - 16g
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="p-4 space-y-1">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="85" height="16" viewBox="0 0 105 19"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.49609 0L12.1229 6.43914L18.992 6.97504L13.7463 11.4905L15.3648 18.2609L9.49609 14.6124L3.62715 18.2609L5.24568 11.4905L0 6.97504L6.8691 6.43914L9.49609 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.49609 0L12.1229 6.43914L18.992 6.97504L13.7463 11.4905L15.3648 18.2609L9.49609 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M30.9979 0L33.6248 6.43914L40.4939 6.97504L35.2483 11.4905L36.8668 18.2609L30.9979 14.6124L25.1291 18.2609L26.7476 11.4905L21.502 6.97504L28.3711 6.43914L30.9979 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M30.998 0L33.625 6.43914L40.4941 6.97504L35.2485 11.4905L36.867 18.2609L30.998 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.4998 0L55.1268 6.43914L61.9959 6.97504L56.7502 11.4905L58.3688 18.2609L52.4998 14.6124L46.6311 18.2609L48.2496 11.4905L43.0039 6.97504L49.873 6.43914L52.4998 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M52.5 0L55.127 6.43914L61.9961 6.97504L56.7504 11.4905L58.3689 18.2609L52.5 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M74.0018 0L76.6287 6.43914L83.4979 6.97504L78.2522 11.4905L79.8707 18.2609L74.0018 14.6124L68.133 18.2609L69.7515 11.4905L64.5059 6.97504L71.375 6.43914L74.0018 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M74.002 0L76.6289 6.43914L83.498 6.97504L78.2524 11.4905L79.8709 18.2609L74.002 14.6124V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M95.5037 0L98.1307 6.43914L105 6.97504L99.7541 11.4905L101.373 18.2609L95.5037 14.6124L89.635 18.2609L91.2535 11.4905L86.0078 6.97504L92.8769 6.43914L95.5037 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M95.5039 0L98.1309 6.43914L105 6.97504L99.7543 11.4905L101.373 18.2609L95.5039 14.6124V0Z"
                                            fill="#FFBD38" />
                                    </svg>
                                </div>

                                <div class="flex gap-2 items-center flex-wrap">
                                    <div class="text-md font-semibold text-sage">₹ 45,445.00</div>
                                    <div class="text-sm line-through text-[#6D6D6D]">₹ 48,397.00</div>
                                </div>

                                <div class="flex justify-between gap-2 flex-wrap">
                                    <div class="text-sm text-deep-forest">Silver Miracle Earrings</div>
                                    <div class="font-semibold text-sm text-sage">16g</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <?php
$featured_products = get_field('featured_products');

if ($featured_products): ?>
    <div class="products swiper-wrapper">
        <?php foreach ($featured_products as $row):
            $product = $row['product'];
            if (!$product) continue;

            $product_id = is_object($product) ? $product->ID : $product;
            $post_object = get_post($product_id);

            setup_postdata($GLOBALS['post'] =& $post_object);
            echo '<div class="swiper-slide border-r border-[#C5C5C5] last:border-0">';
            wc_get_template_part( 'content', 'product' );
            echo '</div>';

        endforeach; ?>
    </div>
    <?php wp_reset_postdata(); ?>
<?php else: ?>
    <p>No featured products found.</p>
<?php endif; ?>


                
            </div>

            <div class=" mt-8 md:hidden">
                <div class="flex justify-center items-center">
                    <a class="text-sage uppercase border text-sm border-sage rounded-full px-4 py-2 flex gap-1 items-center w-fit"
                        href="/shop">View all <svg xmlns="http://www.w3.org/2000/svg" width="15" height="7"
                            viewBox="0 0 15 7" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.867 3.1633L12.0177 0.135906C11.9763 0.0928365 11.927 0.058775 11.8725 0.0354241C11.8181 0.0120731 11.7597 0 11.7007 0C11.6417 0 11.5833 0.0120731 11.5289 0.0354241C11.4745 0.058775 11.4251 0.0928365 11.3838 0.135906C11.3016 0.22712 11.2559 0.346646 11.2559 0.470731C11.2559 0.594817 11.3016 0.714342 11.3838 0.805557L13.4764 3.02399H0.463565C0.34063 3.02399 0.222728 3.074 0.135799 3.16296C0.0488709 3.25192 0 3.37266 0 3.49847C0 3.62427 0.0488709 3.74467 0.135799 3.83363C0.222728 3.92259 0.34063 3.9726 0.463565 3.9726H13.4764L11.3838 6.19104C11.3016 6.28225 11.2559 6.40178 11.2559 6.52586C11.2559 6.64995 11.3016 6.76947 11.3838 6.86069C11.4246 6.90472 11.4737 6.93959 11.5282 6.96355C11.5827 6.98752 11.6414 7 11.7007 7C11.76 7 11.8187 6.98752 11.8732 6.96355C11.9277 6.93959 11.9768 6.90472 12.0177 6.86069L14.867 3.83329C14.9523 3.74368 15 3.62355 15 3.49847C15 3.37338 14.9523 3.25291 14.867 3.1633Z"
                                fill="#667B68"></path>
                        </svg></a>
                </div>
            </div>

        </div>




    </section>



    <section class="section4">
        <div class="ct-container lg:pt-12 xl:pt-15 max-lg:hidden desktop">
            <div class="grid grid-cols-2 gap-8 bg-white">
                <div class="rounded-tr-[60px] overflow-hidden rounded-br-[60px]">
                    <img loading="lazy" class="!h-full object-cover w-full"
                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection-banner.jpg" alt="">
                </div>
                <div class="px-6 py-12 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div>
                            <div class="text-md text-sage mb-1">Express your love with</div>
                            <div class="text-2xl lg:text-3xl text-deep-forest italic lora">Wedding Collection</div>
                        </div>
                        <div>Giving graciously is what we do best. Few feelings are more rewarding
                            than seeing someone smile as they unwrap a present you’ve thoughtfully
                            chosen because it’s simply them.</div>

                        <div>
                            <a class="text-sage border text-sm border-sage rounded-full px-4 py-2 flex gap-1 items-center w-fit"
                                href="<?php echo get_home_url(); ?>/shop">Explore Now <svg xmlns="http://www.w3.org/2000/svg" width="15" height="7"
                                    viewBox="0 0 15 7" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.867 3.1633L12.0177 0.135906C11.9763 0.0928365 11.927 0.058775 11.8725 0.0354241C11.8181 0.0120731 11.7597 0 11.7007 0C11.6417 0 11.5833 0.0120731 11.5289 0.0354241C11.4745 0.058775 11.4251 0.0928365 11.3838 0.135906C11.3016 0.22712 11.2559 0.346646 11.2559 0.470731C11.2559 0.594817 11.3016 0.714342 11.3838 0.805557L13.4764 3.02399H0.463565C0.34063 3.02399 0.222728 3.074 0.135799 3.16296C0.0488709 3.25192 0 3.37266 0 3.49847C0 3.62427 0.0488709 3.74467 0.135799 3.83363C0.222728 3.92259 0.34063 3.9726 0.463565 3.9726H13.4764L11.3838 6.19104C11.3016 6.28225 11.2559 6.40178 11.2559 6.52586C11.2559 6.64995 11.3016 6.76947 11.3838 6.86069C11.4246 6.90472 11.4737 6.93959 11.5282 6.96355C11.5827 6.98752 11.6414 7 11.7007 7C11.76 7 11.8187 6.98752 11.8732 6.96355C11.9277 6.93959 11.9768 6.90472 12.0177 6.86069L14.867 3.83329C14.9523 3.74368 15 3.62355 15 3.49847C15 3.37338 14.9523 3.25291 14.867 3.1633Z"
                                        fill="#667B68"></path>
                                </svg></a>
                        </div>
                    </div>

                    <div class="mt-5">
                        <div class="flex justify-end items-center gap-2 relative">

                            <button class="button-prev">
                                <svg class="size-8" viewBox="0 0 41 41" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20.5" cy="20.5" r="20" transform="matrix(-1 0 0 1 41 0)"
                                        fill="#667B68" />
                                    <path
                                        d="M26.3508 11.2992C25.8008 10.7492 24.9008 10.7492 24.4008 11.2992L15.6508 19.9992C15.1008 20.5492 15.1008 21.4492 15.6508 21.9492L24.3508 30.6492C24.6008 30.8992 25.0008 31.0492 25.3508 31.0492C25.7008 31.0492 26.0508 30.8992 26.3508 30.6492C26.9008 30.0992 26.9008 29.1992 26.3508 28.6992L18.6508 20.9992L26.3508 13.2992C26.9008 12.7492 26.9008 11.8492 26.3508 11.2992Z"
                                        fill="white" />
                                </svg>

                            </button>
                            <button class="button-next">
                                <svg class="size-8" viewBox="0 0 41 41" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20.5" cy="20.5" r="20.5" fill="#667B68" />
                                    <path
                                        d="M14.6492 11.2992C15.1992 10.7492 16.0992 10.7492 16.5992 11.2992L25.3492 19.9992C25.8992 20.5492 25.8992 21.4492 25.3492 21.9492L16.6492 30.6492C16.3992 30.8992 15.9992 31.0492 15.6492 31.0492C15.2992 31.0492 14.9492 30.8992 14.6492 30.6492C14.0992 30.0992 14.0992 29.1992 14.6492 28.6992L22.3492 20.9992L14.6492 13.2992C14.0992 12.7492 14.0992 11.8492 14.6492 11.2992Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>

                        <div class="swiper mySwiper mt-5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="rounded-3xl bg-[#F4F5F4] p-4 w-full shadow-md">
                                        <div class="grid gap-4 grid-cols-[40%_auto]">
                                            <div class="rounded-xl overflow-hidden">
                                                <img loading="lazy" class="w-full max-h-40 object-cover"
                                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/model-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="flex flex-col justify-between">
                                                <div>
                                                    <div class="text-deep-forest text-md">Express your love with</div>
                                                    <div class="text-lg lg:text-xl text-sage italic lora font-medium">
                                                        Women’s
                                                        Jewellery</div>
                                                </div>
                                                <div>
                                                    <a class="text-sage border text-sm border-sage rounded-full px-4 py-2 flex gap-1 items-center w-fit"
                                                        href="<?php echo get_home_url(); ?>/shop">Explore Now <svg xmlns="http://www.w3.org/2000/svg"
                                                            width="15" height="7" viewBox="0 0 15 7" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M14.867 3.1633L12.0177 0.135906C11.9763 0.0928365 11.927 0.058775 11.8725 0.0354241C11.8181 0.0120731 11.7597 0 11.7007 0C11.6417 0 11.5833 0.0120731 11.5289 0.0354241C11.4745 0.058775 11.4251 0.0928365 11.3838 0.135906C11.3016 0.22712 11.2559 0.346646 11.2559 0.470731C11.2559 0.594817 11.3016 0.714342 11.3838 0.805557L13.4764 3.02399H0.463565C0.34063 3.02399 0.222728 3.074 0.135799 3.16296C0.0488709 3.25192 0 3.37266 0 3.49847C0 3.62427 0.0488709 3.74467 0.135799 3.83363C0.222728 3.92259 0.34063 3.9726 0.463565 3.9726H13.4764L11.3838 6.19104C11.3016 6.28225 11.2559 6.40178 11.2559 6.52586C11.2559 6.64995 11.3016 6.76947 11.3838 6.86069C11.4246 6.90472 11.4737 6.93959 11.5282 6.96355C11.5827 6.98752 11.6414 7 11.7007 7C11.76 7 11.8187 6.98752 11.8732 6.96355C11.9277 6.93959 11.9768 6.90472 12.0177 6.86069L14.867 3.83329C14.9523 3.74368 15 3.62355 15 3.49847C15 3.37338 14.9523 3.25291 14.867 3.1633Z"
                                                                fill="#667B68"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rounded-3xl bg-[#F4F5F4] p-4 w-full shadow-md">
                                        <div class="grid gap-4 grid-cols-[40%_auto]">
                                            <div class="rounded-xl overflow-hidden">
                                                <img loading="lazy" class="w-full max-h-40 object-cover"
                                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/model-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="flex flex-col justify-between">
                                                <div>
                                                    <div class="text-deep-forest text-md">Express your love with</div>
                                                    <div class="text-lg lg:text-xl text-sage italic lora font-medium">
                                                        Women’s
                                                        Jewellery</div>
                                                </div>
                                                <div>
                                                    <a class="text-sage border text-sm border-sage rounded-full px-4 py-2 flex gap-1 items-center w-fit"
                                                        href="<?php echo get_home_url(); ?>/shop">Explore Now <svg xmlns="http://www.w3.org/2000/svg"
                                                            width="15" height="7" viewBox="0 0 15 7" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M14.867 3.1633L12.0177 0.135906C11.9763 0.0928365 11.927 0.058775 11.8725 0.0354241C11.8181 0.0120731 11.7597 0 11.7007 0C11.6417 0 11.5833 0.0120731 11.5289 0.0354241C11.4745 0.058775 11.4251 0.0928365 11.3838 0.135906C11.3016 0.22712 11.2559 0.346646 11.2559 0.470731C11.2559 0.594817 11.3016 0.714342 11.3838 0.805557L13.4764 3.02399H0.463565C0.34063 3.02399 0.222728 3.074 0.135799 3.16296C0.0488709 3.25192 0 3.37266 0 3.49847C0 3.62427 0.0488709 3.74467 0.135799 3.83363C0.222728 3.92259 0.34063 3.9726 0.463565 3.9726H13.4764L11.3838 6.19104C11.3016 6.28225 11.2559 6.40178 11.2559 6.52586C11.2559 6.64995 11.3016 6.76947 11.3838 6.86069C11.4246 6.90472 11.4737 6.93959 11.5282 6.96355C11.5827 6.98752 11.6414 7 11.7007 7C11.76 7 11.8187 6.98752 11.8732 6.96355C11.9277 6.93959 11.9768 6.90472 12.0177 6.86069L14.867 3.83329C14.9523 3.74368 15 3.62355 15 3.49847C15 3.37338 14.9523 3.25291 14.867 3.1633Z"
                                                                fill="#667B68"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rounded-3xl bg-[#F4F5F4] p-4 w-full shadow-md">
                                        <div class="grid gap-4 grid-cols-[40%_auto]">
                                            <div class="rounded-xl overflow-hidden">
                                                <img loading="lazy" class="w-full max-h-40 object-cover"
                                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/model-3.jpg"
                                                    alt="">
                                            </div>
                                            <div class="flex flex-col justify-between">
                                                <div>
                                                    <div class="text-deep-forest text-md">Express your love with</div>
                                                    <div class="text-lg lg:text-xl text-sage italic lora font-medium">
                                                        Women’s
                                                        Jewellery</div>
                                                </div>
                                                <div>
                                                    <a class="text-sage border text-sm border-sage rounded-full px-4 py-2 flex gap-1 items-center w-fit"
                                                        href="<?php echo get_home_url(); ?>/shop">Explore Now <svg xmlns="http://www.w3.org/2000/svg"
                                                            width="15" height="7" viewBox="0 0 15 7" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M14.867 3.1633L12.0177 0.135906C11.9763 0.0928365 11.927 0.058775 11.8725 0.0354241C11.8181 0.0120731 11.7597 0 11.7007 0C11.6417 0 11.5833 0.0120731 11.5289 0.0354241C11.4745 0.058775 11.4251 0.0928365 11.3838 0.135906C11.3016 0.22712 11.2559 0.346646 11.2559 0.470731C11.2559 0.594817 11.3016 0.714342 11.3838 0.805557L13.4764 3.02399H0.463565C0.34063 3.02399 0.222728 3.074 0.135799 3.16296C0.0488709 3.25192 0 3.37266 0 3.49847C0 3.62427 0.0488709 3.74467 0.135799 3.83363C0.222728 3.92259 0.34063 3.9726 0.463565 3.9726H13.4764L11.3838 6.19104C11.3016 6.28225 11.2559 6.40178 11.2559 6.52586C11.2559 6.64995 11.3016 6.76947 11.3838 6.86069C11.4246 6.90472 11.4737 6.93959 11.5282 6.96355C11.5827 6.98752 11.6414 7 11.7007 7C11.76 7 11.8187 6.98752 11.8732 6.96355C11.9277 6.93959 11.9768 6.90472 12.0177 6.86069L14.867 3.83329C14.9523 3.74368 15 3.62355 15 3.49847C15 3.37338 14.9523 3.25291 14.867 3.1633Z"
                                                                fill="#667B68"></path>
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>

        <div class="pt-8 md:pt-12 lg:hidden mobile">
            <div class="ct-container text-center mb-10">

                <div class="text-2xl lg:text-3xl text-deep-forest italic lora mb-1">Wedding Collection</div>
                <div class="text-md text-sage">Express your love with</div>
            </div>
            <div>
                <img loading="lazy" class="!h-full object-cover w-full"
                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection-banner-mobile.jpg" alt="">
            </div>

            <div class="-mt-20 ct-container bg-[#F1FBF780] rounded-3xl shadow-lg py-4 px-2 relative">


                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <div class="mb-2">
                                <div class="rounded-3xl overflow-hidden">
                                    <img loading="lazy" class="aspect-square object-cover"
                                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/model-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="text-center text-sm">
                                Dazzling Bride
                            </div>
                        </div>
                        <div class="swiper-slide">

                            <div class="mb-2">
                                <div class="rounded-3xl overflow-hidden">
                                    <img loading="lazy" class="aspect-square object-cover"
                                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/model-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="text-center text-sm">
                                Bejeweled Bride
                            </div>
                        </div>
                        <div class="swiper-slide">

                            <div class="mb-2">
                                <div class="rounded-3xl overflow-hidden">
                                    <img loading="lazy" class="aspect-square object-cover"
                                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/model-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="text-center text-sm">
                                Enchanting Bride
                            </div>
                        </div>
                        <div class="swiper-slide">

                            <div class="mb-2">
                                <div class="rounded-3xl overflow-hidden">
                                    <img loading="lazy" class="aspect-square object-cover"
                                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/model-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="text-center text-sm">
                                Modern Jewellery
                            </div>
                        </div>


                    </div>
                    <div class="relative mt-10">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>


                <div class="mt-4">
                    <a class="text-sage border text-sm border-sage rounded-full px-4 py-2 flex gap-1 items-center w-fit mx-auto"
                        href="<?php echo get_home_url(); ?>/shop">Explore Now <svg xmlns="http://www.w3.org/2000/svg" width="15" height="7"
                            viewBox="0 0 15 7" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.867 3.1633L12.0177 0.135906C11.9763 0.0928365 11.927 0.058775 11.8725 0.0354241C11.8181 0.0120731 11.7597 0 11.7007 0C11.6417 0 11.5833 0.0120731 11.5289 0.0354241C11.4745 0.058775 11.4251 0.0928365 11.3838 0.135906C11.3016 0.22712 11.2559 0.346646 11.2559 0.470731C11.2559 0.594817 11.3016 0.714342 11.3838 0.805557L13.4764 3.02399H0.463565C0.34063 3.02399 0.222728 3.074 0.135799 3.16296C0.0488709 3.25192 0 3.37266 0 3.49847C0 3.62427 0.0488709 3.74467 0.135799 3.83363C0.222728 3.92259 0.34063 3.9726 0.463565 3.9726H13.4764L11.3838 6.19104C11.3016 6.28225 11.2559 6.40178 11.2559 6.52586C11.2559 6.64995 11.3016 6.76947 11.3838 6.86069C11.4246 6.90472 11.4737 6.93959 11.5282 6.96355C11.5827 6.98752 11.6414 7 11.7007 7C11.76 7 11.8187 6.98752 11.8732 6.96355C11.9277 6.93959 11.9768 6.90472 12.0177 6.86069L14.867 3.83329C14.9523 3.74368 15 3.62355 15 3.49847C15 3.37338 14.9523 3.25291 14.867 3.1633Z"
                                fill="#667B68"></path>
                        </svg></a>
                </div>

            </div>
        </div>
    </section>





    <section class="ct-container pt-8 md:pt-10 lg:pt-12 xl:pt-15">
        <div class="text-center space-y-2">
            <div class="text-2xl lg:text-3xl text-deep-forest italic lora">Our Collection</div>
            <div class="text-sage">Discover our latest jewellery collection!</div>
        </div>
        <div class="grid mt-10 grid-cols-2 sm:grid-cols-3 gap-4 lg:gap-8">
            <div class="rounded-2xl overflow-hidden col-span-2 sm:col-span-1" >
                <a href="<?php echo get_home_url(); ?>/shop">
                    <img loading="lazy" class="w-full"
                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection1.jpg" alt="">
                </a>
            </div>
            <div class="rounded-2xl overflow-hidden">
                <a href="<?php echo get_home_url(); ?>/shop">
                    <img loading="lazy" class="w-full"
                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection2.jpg" alt="">
                </a>
            </div>
            <div class="rounded-2xl overflow-hidden">
                <a href="<?php echo get_home_url(); ?>/shop">
                    <img loading="lazy" class="w-full"
                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection3.jpg" alt="">
                </a>
            </div>
        </div>

    </section>



    <section class="pt-8 md:pt-10 lg:pt-12 xl:pt-15">
        <div class="bg-sage icon-with-text">
            <div class="ct-container py-4 md:py-6 lg:py-10">

                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="grid grid-rows-[32px_auto] gap-4 place-items-center">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="53" class="size-8"
                                        viewBox="0 0 42 53" fill="none">
                                        <path
                                            d="M41.3673 34.3307C40.3409 32.8174 38.1533 31.9694 35.9609 33.2744L23.8939 40.4016L16.1873 36.2071C13.8503 34.9274 11.3786 34.6329 8.8457 35.3286L7.23872 35.7551V34.2876C7.23872 33.7671 6.83207 33.3482 6.33235 33.3482H0.906369C0.404188 33.3482 0 33.7696 0 34.2876V50.4152C0 50.9357 0.406647 51.3546 0.906369 51.3546H6.33235C6.83453 51.3546 7.23872 50.9331 7.23872 50.4152V48.7521L10.0264 48.5439L21.9222 52.3778C22.4635 52.5505 23.0098 52.6343 23.5488 52.6343C24.8103 52.6343 26.0254 52.1773 27.0322 51.2937L27.0371 51.2886L40.5909 39.2611C42.3743 37.6945 42.2639 35.656 41.3673 34.3307ZM5.4236 49.4761H1.81035L1.8128 35.227H5.42605V47.8791L5.4236 49.4761ZM39.4151 37.8322L25.8587 49.8596C24.8862 50.7127 23.6736 50.9666 22.4537 50.5832L10.4012 46.6985C10.313 46.6706 10.2224 46.6553 10.1317 46.6553C10.1097 46.6553 10.0876 46.6553 10.068 46.6579L7.23869 46.8686V37.6979L9.30378 37.1495C11.4178 36.568 13.3947 36.8067 15.3422 37.8706L23.4897 42.3062C23.5068 42.3164 23.5264 42.3189 23.5436 42.3265L24.5871 42.8927C24.9913 43.1111 25.2902 43.4818 25.4249 43.9338C25.5621 44.3883 25.518 44.8681 25.3 45.2947C24.8688 46.1428 23.8155 46.4804 22.9973 46.0361L13.2206 40.732C12.7772 40.4908 12.2285 40.6686 11.9957 41.1281C11.763 41.5877 11.9345 42.1564 12.3779 42.3976L22.1521 47.7017C22.6592 47.9784 23.2152 48.1206 23.7762 48.1206C24.1289 48.1206 24.4841 48.0648 24.832 47.9531C25.731 47.6636 26.4684 47.0314 26.902 46.1783C27.3478 45.3125 27.4385 44.3171 27.1592 43.3802C26.9191 42.5804 26.4267 41.9203 25.7703 41.4608L36.8602 34.9101C38.1119 34.1637 39.3294 34.6004 39.8806 35.4154C40.4171 36.1999 40.2406 37.1035 39.4151 37.8322ZM11.9838 25.249C15.6143 28.4964 19.3669 31.8555 21.0845 35.758C21.2315 36.0932 21.5549 36.309 21.9101 36.309C22.2653 36.309 22.5862 36.0957 22.7356 35.7606C24.4528 31.8758 28.1812 28.5424 31.7899 25.3178C32.6767 24.5231 33.5953 23.7055 34.4502 22.9006C39.9277 17.7718 41.9116 12.036 39.8958 7.16367C38.2007 3.0682 33.8378 0.341357 29.502 0.678963C26.124 0.943022 23.4563 2.94379 21.9177 6.275C20.4454 3.00216 17.9468 1.00396 14.8163 0.681498C10.5735 0.23717 6.07116 2.96914 4.11143 7.16367C2.08553 11.4953 3.17565 16.4033 7.10245 20.6231C8.5502 22.1769 10.2185 23.6699 11.9847 25.2492L11.9838 25.249ZM21.9098 33.3635C20.4253 30.8016 18.2476 28.5114 15.9204 26.3306C17.52 24.4542 19.6292 23.3929 21.8755 23.3929C24.1537 23.3929 26.28 24.4694 27.8796 26.3712C25.5623 28.537 23.3943 30.8116 21.9098 33.3635ZM17.6989 17.1819C17.6989 14.8054 19.5729 12.8707 21.8756 12.8707C24.1783 12.8707 26.0523 14.8054 26.0523 17.1819C26.0523 19.5686 24.1783 21.511 21.8756 21.511C19.5729 21.511 17.6989 19.5686 17.6989 17.1819ZM5.7423 7.98324C7.24882 4.76376 10.6735 2.51928 13.9318 2.51928C14.167 2.51928 14.4021 2.53197 14.6348 2.55482C17.7557 2.87728 20.0266 5.26906 21.0308 9.29329C21.1337 9.70969 21.4938 9.99912 21.9077 9.99912C22.3193 9.99912 22.6819 9.70967 22.7847 9.29582C23.7915 5.27653 26.2901 2.82132 29.634 2.55996C33.2105 2.27559 36.8264 4.53021 38.2224 7.91225C39.2169 10.3142 39.8881 15.2728 33.2275 21.5114C32.3848 22.301 31.5176 23.078 30.5966 23.9006C30.1434 24.3069 29.6878 24.7131 29.2346 25.1244C28.1322 23.8143 26.8143 22.8292 25.3641 22.2223C26.873 21.095 27.8603 19.2593 27.8603 17.1874C27.8603 13.7724 25.173 10.9948 21.8684 10.9948C18.5638 10.9948 15.8765 13.7724 15.8765 17.1874C15.8765 19.2618 16.8662 21.0975 18.3777 22.2249C16.9495 22.8241 15.6487 23.794 14.5513 25.0813C14.0883 24.6623 13.6253 24.2459 13.1623 23.832C11.428 22.2807 9.78913 20.8157 8.39769 19.3227C3.7948 14.3589 4.75754 10.0879 5.7423 7.98324Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="text-xs md:text-sm text-white text-center">Loyalty that <br> Shines</div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="grid grid-rows-[32px_auto] gap-4 place-items-center">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="49" class="size-8"
                                        viewBox="0 0 45 49" fill="none">
                                        <path
                                            d="M22.4974 30.9962C26.1214 30.9962 29.0592 28.0584 29.0592 24.4344C29.0592 20.8104 26.1214 17.8726 22.4974 17.8726C18.8734 17.8726 15.9355 20.8104 15.9355 24.4344C15.9355 28.0584 18.8734 30.9962 22.4974 30.9962Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M19.4508 18.6232C17.74 15.0142 15.9355 10.5146 15.9355 7.56181C15.9355 5.82151 16.6269 4.15249 17.8575 2.92191C19.088 1.69133 20.7571 1 22.4974 1C24.2377 1 25.9067 1.69133 27.1373 2.92191C28.3678 4.15249 29.0592 5.82151 29.0592 7.56181C29.0592 10.5146 27.2547 15.0142 25.5439 18.6232"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M15.9369 24.1536C11.9529 23.849 7.14872 23.1459 4.5943 21.6695C3.19015 20.7508 2.19129 19.3292 1.80306 17.6967C1.41483 16.0643 1.66674 14.3451 2.50699 12.8927C3.34725 11.4402 4.712 10.3649 6.32069 9.88766C7.92938 9.41045 9.65976 9.56766 11.1561 10.327C13.7105 11.7799 16.7102 15.5998 18.9834 18.9042"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M18.9817 29.9643C16.7085 33.2686 13.7088 37.0886 11.1543 38.5415C10.4079 39.0299 9.56969 39.361 8.69097 39.5145C7.81225 39.668 6.91146 39.6407 6.04363 39.4343C5.17581 39.2279 4.35918 38.8467 3.64363 38.3141C2.92809 37.7815 2.32866 37.1085 1.88198 36.3364C1.43529 35.5642 1.15072 34.7092 1.04567 33.8233C0.94061 32.9375 1.01727 32.0396 1.27095 31.1844C1.52464 30.3292 1.95003 29.5347 2.52114 28.8495C3.09224 28.1642 3.79706 27.6026 4.59253 27.199C7.14695 25.7226 11.9511 25.0195 15.9351 24.7148"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M25.5439 30.2456C27.2547 33.8546 29.0592 38.3541 29.0592 41.3069C29.0592 43.0472 28.3678 44.7163 27.1373 45.9469C25.9067 47.1774 24.2377 47.8688 22.4974 47.8688C20.7571 47.8688 19.088 47.1774 17.8575 45.9469C16.6269 44.7163 15.9355 43.0472 15.9355 41.3069C15.9355 38.3541 17.74 33.8546 19.4508 30.2456"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M29.0583 24.7148C33.0422 25.0195 37.8464 25.7226 40.4008 27.199C41.805 28.1176 42.8039 29.5393 43.1921 31.1718C43.5803 32.8042 43.3284 34.5234 42.4881 35.9758C41.6479 37.4283 40.2831 38.5036 38.6744 38.9808C37.0658 39.458 35.3354 39.3008 33.839 38.5415C31.2846 37.0886 28.2849 33.2686 26.0117 29.9643"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M26.0117 18.9042C28.2849 15.5998 31.2846 11.7799 33.839 10.327C35.3354 9.56766 37.0658 9.41045 38.6744 9.88766C40.2831 10.3649 41.6479 11.4402 42.4881 12.8927C43.3284 14.3451 43.5803 16.0643 43.1921 17.6967C42.8039 19.3292 41.805 20.7508 40.4008 21.6695C37.8464 23.1459 33.0422 23.849 29.0583 24.1536"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="text-xs md:text-sm text-white text-center">Fresh trends <br> weekly</div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="grid grid-rows-[32px_auto] gap-4 place-items-center">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="52" class="size-8"
                                        viewBox="0 0 49 52" fill="none">
                                        <path
                                            d="M19.9273 31.1974C20.6303 31.9004 21.5744 32.2854 22.5753 32.2854C23.5796 32.2854 24.5135 31.9004 25.2232 31.1974L33.2173 23.2034C33.542 22.8786 33.7127 22.4501 33.7127 21.9948C33.7127 21.5395 33.5319 21.1043 33.2173 20.7863C32.608 20.177 31.3995 20.177 30.7936 20.7863L22.5753 29.0047L17.7848 24.2143C17.4836 23.913 17.0383 23.7356 16.5763 23.7356C16.1143 23.7356 15.6691 23.9063 15.3678 24.2143C15.0431 24.539 14.8623 24.9675 14.8623 25.4328C14.8623 25.8948 15.0431 26.3233 15.3577 26.6413L19.9239 31.2075L19.9273 31.1974Z"
                                            fill="white" />
                                        <path
                                            d="M9.77114 45.9977L19.516 50.8752C22.4652 52.3482 26.1241 52.3482 29.0697 50.8752L38.8145 45.9977C44.6595 43.0752 48.292 37.2033 48.292 30.6653V13.3284C48.292 10.3725 46.4073 7.75797 43.6053 6.82402L25.7627 0.875306C25.2907 0.721313 24.7953 0.634277 24.2965 0.634277C23.8011 0.634277 23.3022 0.711273 22.8235 0.875306L4.99042 6.82402C2.18849 7.75797 0.303711 10.3725 0.303711 13.3284V30.6653C0.303711 37.1965 3.93589 43.0745 9.78117 45.9977H9.77114ZM3.72199 13.3284C3.72199 11.8554 4.66605 10.5432 6.062 10.0812L24.2902 4.00529L42.5184 10.0812C43.9243 10.5532 44.8584 11.8554 44.8584 13.3284V30.6653C44.8584 35.8943 41.9527 40.5875 37.2827 42.928L27.5379 47.8055C26.5336 48.3009 25.4122 48.5687 24.2907 48.5687C23.1692 48.5687 22.0444 48.3043 21.0435 47.8055L11.2986 42.928C6.6187 40.588 3.72302 35.8913 3.72302 30.6653L3.72199 13.3284Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="text-xs md:text-sm text-white text-center">Trusted craftsmanship <br> since
                                    2024
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="grid grid-rows-[32px_auto] gap-4 place-items-center">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="47" class="size-8"
                                        viewBox="0 0 48 47" fill="none">
                                        <path
                                            d="M17.9737 44.1487C19.36 45.9353 21.539 47 23.7944 47C26.0499 47 28.2289 45.9353 29.6151 44.1487L45.4798 23.7007C46.6549 22.1894 47.3037 20.2926 47.3037 18.3836V18.2826C47.3037 16.7958 46.9212 15.3212 46.1897 14.021L40.5496 3.99548C39.1633 1.53582 36.5467 0 33.719 0H14.5709C11.8533 0 9.36841 1.37973 7.92696 3.68033L1.61965 13.7669C0.756616 15.1467 0.303711 16.7436 0.303711 18.3712C0.303711 20.2893 0.952493 22.177 2.12764 23.6883L17.9923 44.1364L17.9737 44.1487ZM20.4495 42.2306L4.58489 21.7825C4.42882 21.5867 4.30334 21.3664 4.17787 21.1553H22.2213V43.5559C21.5235 43.2744 20.8962 42.8186 20.4432 42.2312L20.4495 42.2306ZM27.1394 42.2306C26.6865 42.818 26.0591 43.2707 25.3614 43.5552V21.1547H43.4048C43.2793 21.375 43.1538 21.5861 42.9977 21.7818L27.1331 42.2299L27.1394 42.2306ZM43.4506 15.5625C43.8729 16.315 44.1086 17.1594 44.1483 18.0221H26.8022L36.5404 4.09636C37.0484 4.47877 37.489 4.96522 37.8104 5.53726L43.4506 15.5625ZM33.3818 3.14198L23.7941 16.8571L14.2064 3.16704C14.3227 3.15786 14.442 3.14256 14.5675 3.14256H33.3857L33.3818 3.14198ZM10.5767 5.35079C10.7818 5.02038 11.0235 4.72363 11.2898 4.46665L20.7858 18.0227H3.44911C3.51032 17.1049 3.77963 16.2208 4.26318 15.4376L10.5705 5.35102L10.5767 5.35079Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="text-xs md:text-sm text-white text-center">Luxury <br>
                                    within reach</div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="grid grid-rows-[32px_auto] gap-4 place-items-center">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="58" height="56" class="size-8"
                                        viewBox="0 0 58 56" fill="none">
                                        <path
                                            d="M32.7427 41.1263L28.2434 53.3353C28.1102 53.6941 27.8704 54.0035 27.5563 54.222C27.2421 54.4405 26.8686 54.5577 26.4859 54.5577C26.1032 54.5577 25.7296 54.4405 25.4155 54.222C25.1013 54.0035 24.8615 53.6941 24.7283 53.3353L20.229 41.1263C20.1341 40.8686 19.9843 40.6346 19.7901 40.4404C19.5959 40.2462 19.3619 40.0964 19.1042 40.0015L6.89519 35.5022C6.53641 35.369 6.22699 35.1292 6.00848 34.8151C5.78997 34.5009 5.67285 34.1273 5.67285 33.7447C5.67285 33.362 5.78997 32.9884 6.00848 32.6743C6.22699 32.3601 6.53641 32.1203 6.89519 31.9871L19.1042 27.4878C19.3619 27.3929 19.5959 27.2431 19.7901 27.0489C19.9843 26.8547 20.1341 26.6207 20.229 26.363L24.7283 14.154C24.8615 13.7952 25.1013 13.4858 25.4155 13.2673C25.7296 13.0488 26.1032 12.9316 26.4859 12.9316C26.8686 12.9316 27.2421 13.0488 27.5563 13.2673C27.8704 13.4858 28.1102 13.7952 28.2434 14.154L32.7427 26.363C32.8377 26.6207 32.9874 26.8547 33.1816 27.0489C33.3758 27.2431 33.6098 27.3929 33.8675 27.4878L46.0765 31.9871C46.4353 32.1203 46.7447 32.3601 46.9633 32.6743C47.1818 32.9884 47.2989 33.362 47.2989 33.7447C47.2989 34.1273 47.1818 34.5009 46.9633 34.8151C46.7447 35.1292 46.4353 35.369 46.0765 35.5022L33.8675 40.0015C33.6098 40.0964 33.3758 40.2462 33.1816 40.4404C32.9874 40.6346 32.8377 40.8686 32.7427 41.1263Z"
                                            stroke="white" stroke-width="2.81206" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M41.4854 3.74951V14.9983" stroke="white" stroke-width="2.81206"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M47.1092 9.37354H35.8604" stroke="white" stroke-width="2.81206"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M52.7334 16.8726V24.3714" stroke="white" stroke-width="2.81206"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M56.4822 20.6218H48.9834" stroke="white" stroke-width="2.81206"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="text-xs md:text-sm text-white text-center">Handpicked <br> Artistry</div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="grid grid-rows-[32px_auto] gap-4 place-items-center">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" class="size-8"
                                        viewBox="0 0 52 52" fill="none">
                                        <path
                                            d="M51.215 25.342L47.1798 20.4591L48.2328 14.2135C48.3323 13.6251 47.9995 13.0492 47.4404 12.8408L41.5052 10.6292L39.2935 4.6939C39.0852 4.13539 38.5111 3.79953 37.9209 3.90153L31.6753 4.95449L26.7924 0.919286C26.3327 0.539275 25.6673 0.539275 25.2076 0.919286L20.3247 4.95449L14.0791 3.90153C13.4902 3.80078 12.9148 4.13476 12.7065 4.6939L10.4949 10.6292L4.55961 12.8408C4.00048 13.0492 3.66773 13.6251 3.76725 14.2135L4.8202 20.4591L0.785007 25.342C0.404998 25.8016 0.404998 26.4671 0.785007 26.9267L4.8202 31.8096L3.76725 38.0553C3.66773 38.6436 4.00048 39.2195 4.55961 39.4279L10.4949 41.6396L12.7065 47.5748C12.9142 48.1333 13.4864 48.4679 14.0791 48.3672L20.3247 47.3142L25.2076 51.3494C25.4378 51.5391 25.7189 51.6343 26 51.6343C26.2811 51.6343 26.5622 51.5391 26.7924 51.3494L31.6753 47.3142L37.9209 48.3672C38.5086 48.4667 39.0858 48.1339 39.2935 47.5748L41.5052 41.6396L47.4404 39.4279C47.9995 39.2195 48.3323 38.6436 48.2328 38.0553L47.1798 31.8096L51.215 26.9267C51.595 26.4671 51.595 25.8016 51.215 25.342ZM44.8997 30.6634C44.6696 30.942 44.572 31.3065 44.6317 31.6622L45.6081 37.4551L40.1033 39.5063C39.7649 39.6325 39.4981 39.8993 39.3719 40.2377L37.3207 45.7432L31.5279 44.7667C31.1696 44.707 30.8064 44.8047 30.529 45.0348L26 48.7764L21.471 45.0342C21.2465 44.8482 20.966 44.7493 20.6786 44.7493C20.6102 44.7493 20.5405 44.7549 20.4715 44.7667L14.6787 45.7432L12.6281 40.2377C12.5019 39.8993 12.2351 39.6325 11.8967 39.5063L6.39124 37.4551L7.3677 31.6622C7.42803 31.3059 7.32976 30.9414 7.09964 30.6634L3.358 26.1344L7.10026 21.6053C7.33038 21.3267 7.42803 20.9622 7.36832 20.6065L6.39186 14.8136L11.8973 12.7624C12.2357 12.6362 12.5025 12.3694 12.6288 12.031L14.6799 6.52554L20.4728 7.502C20.8291 7.5617 21.1936 7.46344 21.4716 7.23394L26 3.49229L30.529 7.23456C30.807 7.4653 31.1709 7.56295 31.5279 7.50262L37.3207 6.52616L39.3719 12.0317C39.4981 12.37 39.7649 12.6368 40.1033 12.7631L45.6088 14.8143L44.6323 20.6071C44.572 20.9635 44.6702 21.3279 44.9004 21.6059L48.642 26.1344L44.8997 30.6634ZM26 9.96367C17.0838 9.96367 9.82937 17.2181 9.82937 26.1344C9.82937 35.0506 17.0838 42.305 26 42.305C34.9162 42.305 42.1706 35.0506 42.1706 26.1344C42.1706 17.2181 34.9162 9.96367 26 9.96367ZM26 39.8172C18.4552 39.8172 12.3172 33.6792 12.3172 26.1344C12.3172 18.5895 18.4552 12.4515 26 12.4515C33.5448 12.4515 39.6828 18.5895 39.6828 26.1344C39.6828 33.6792 33.5448 39.8172 26 39.8172ZM33.7302 23.3045L29.3517 22.3442L27.0579 18.6386C26.8309 18.2717 26.4304 18.049 26 18.049C25.5696 18.049 25.1691 18.2717 24.9421 18.638L22.6483 22.3436L18.2698 23.3039C17.8363 23.399 17.4862 23.7181 17.3512 24.141C17.2162 24.5639 17.317 25.026 17.6149 25.3551L20.5493 28.5886L20.1481 32.8589C20.1077 33.293 20.2967 33.7165 20.6469 33.9753C20.9971 34.234 21.4579 34.2906 21.8609 34.1245L26 32.4185L30.1384 34.1258C30.2908 34.1886 30.4525 34.2197 30.613 34.2197C30.8748 34.2197 31.1348 34.137 31.3525 33.9759C31.7026 33.7165 31.8923 33.293 31.8513 32.8595L31.4501 28.5892L34.3845 25.3557C34.6824 25.0267 34.7831 24.5646 34.6482 24.1416C34.5132 23.7181 34.1631 23.3996 33.7302 23.3045ZM29.2391 27.3235C29.0046 27.5823 28.8889 27.9281 28.9219 28.2757L29.1813 31.0397L26.4739 29.9233C26.3228 29.8598 26.1611 29.8287 26 29.8287C25.8389 29.8287 25.6772 29.8598 25.5255 29.9226L22.8181 31.039L23.0775 28.2751C23.1104 27.9274 22.9948 27.5816 22.7603 27.3229L20.9007 25.2736L23.6951 24.6603C24.0235 24.5882 24.3089 24.3861 24.4862 24.1L26 21.6557L27.5132 24.1006C27.6905 24.3867 27.9759 24.5888 28.3043 24.661L31.0987 25.2742L29.2391 27.3235Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="text-xs md:text-sm text-white text-center">Certifies Quality <br> Assurance
                                </div>
                            </div>
                        </div>



                    </div>

                </div>







            </div>
        </div>
    </section>

    <section class="ct-container pt-8 md:pt-10 lg:pt-12 xl:pt-15 new-arrivals">

        <div class="bg-white shadow">
            <div class="text-center space-y-2 py-6">
                <div class="text-2xl lg:text-3xl text-deep-forest italic lora">New Arrivals</div>
                <div class="text-sage">Redefine your wardrobe with our latest designs.</div>
            </div>

            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="/product-category/rings/">
                            <div>
                                <div class="overflow-hidden">
                                    <img loading="lazy" class="hover:scale-105 transition duration-300"
                                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-1.jpg"
                                        alt="">
                                </div>
                                <div class="group ">
                                    <div class="p-4 border-r border-[#C5C5C5] group-hover:bg-sage flex gap-4 justify-between items-center">
                                        <div>
                                            <div
                                                class="lora text-deep-forest font-semibold text-lg mb-1 italic group-hover:text-white">
                                                Rings</div>
                                            <div class="text-sm text-sage group-hover:text-white">Silver Miracle Earrings
                                            </div>
                                        </div>


                                        <div class="group-hover:block !group-hover:hidden">
                                            <svg class="h-10" viewBox="0 0 37 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.4999 12L16.2999 11.8C15.8999 11.8 15.4999 12.1 15.4999 12.5C15.4999 12.9 15.7999 13.3 16.1999 13.3L21.8999 13.4001L11.9999 23.3C11.6999 23.6 11.6999 24.1001 11.9999 24.4001C12.2999 24.7001 12.7999 24.7001 13.0999 24.4001L22.9999 14.5L23.0999 20.2001C23.0999 20.6 23.4999 20.9001 23.8999 20.9001C24.2999 20.9001 24.5999 20.5001 24.5999 20.1001L24.4999 12Z"
                                                    fill="white" />
                                                <path
                                                    d="M18.3 0C8.2 0 0 8.2 0 18.3C0 28.4 8.2 36.4 18.3 36.4C28.4 36.4 36.6 28.2 36.6 18.2C36.6 8.2 28.4 0 18.3 0ZM18.3 34.9C9.1 34.9 1.5 27.4 1.5 18.2C1.5 9 9.1 1.5 18.3 1.5C27.5 1.5 35.1 9 35.1 18.3C35.1 27.6 27.5 34.9 18.3 34.9Z"
                                                    fill="white" />
                                            </svg>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="/product-category/earrings/">
                            <div>
                                <div class="overflow-hidden">
                                    <img loading="lazy" class="hover:scale-105 transition duration-300"
                                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-2.jpg"
                                        alt="">
                                </div>
                                <div class="group ">
                                    <div class="p-4 border-r border-[#C5C5C5] group-hover:bg-sage flex gap-4 justify-between items-center">
                                        <div>
                                            <div
                                                class="lora text-deep-forest font-semibold text-lg mb-1 italic group-hover:text-white">
                                                Earrings</div>
                                            <div class="text-sm text-sage group-hover:text-white">Silver Miracle Earrings
                                            </div>
                                        </div>


                                        <div class="group-hover:block !group-hover:hidden">
                                            <svg class="h-10" viewBox="0 0 37 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.4999 12L16.2999 11.8C15.8999 11.8 15.4999 12.1 15.4999 12.5C15.4999 12.9 15.7999 13.3 16.1999 13.3L21.8999 13.4001L11.9999 23.3C11.6999 23.6 11.6999 24.1001 11.9999 24.4001C12.2999 24.7001 12.7999 24.7001 13.0999 24.4001L22.9999 14.5L23.0999 20.2001C23.0999 20.6 23.4999 20.9001 23.8999 20.9001C24.2999 20.9001 24.5999 20.5001 24.5999 20.1001L24.4999 12Z"
                                                    fill="white" />
                                                <path
                                                    d="M18.3 0C8.2 0 0 8.2 0 18.3C0 28.4 8.2 36.4 18.3 36.4C28.4 36.4 36.6 28.2 36.6 18.2C36.6 8.2 28.4 0 18.3 0ZM18.3 34.9C9.1 34.9 1.5 27.4 1.5 18.2C1.5 9 9.1 1.5 18.3 1.5C27.5 1.5 35.1 9 35.1 18.3C35.1 27.6 27.5 34.9 18.3 34.9Z"
                                                    fill="white" />
                                            </svg>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="/product-category/pendant/">
                            <div>
                                <div class="overflow-hidden">
                                    <img loading="lazy" class="hover:scale-105 transition duration-300"
                                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-3.jpg"
                                        alt="">
                                </div>
                                <div class="group ">
                                    <div class="p-4 border-r border-[#C5C5C5] group-hover:bg-sage flex gap-4 justify-between items-center">
                                        <div>
                                            <div
                                                class="lora text-deep-forest font-semibold text-lg mb-1 italic group-hover:text-white">
                                                Pendants</div>
                                            <div class="text-sm text-sage group-hover:text-white">Silver Miracle Earrings
                                            </div>
                                        </div>


                                        <div class="group-hover:block !group-hover:hidden">
                                            <svg class="h-10" viewBox="0 0 37 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.4999 12L16.2999 11.8C15.8999 11.8 15.4999 12.1 15.4999 12.5C15.4999 12.9 15.7999 13.3 16.1999 13.3L21.8999 13.4001L11.9999 23.3C11.6999 23.6 11.6999 24.1001 11.9999 24.4001C12.2999 24.7001 12.7999 24.7001 13.0999 24.4001L22.9999 14.5L23.0999 20.2001C23.0999 20.6 23.4999 20.9001 23.8999 20.9001C24.2999 20.9001 24.5999 20.5001 24.5999 20.1001L24.4999 12Z"
                                                    fill="white" />
                                                <path
                                                    d="M18.3 0C8.2 0 0 8.2 0 18.3C0 28.4 8.2 36.4 18.3 36.4C28.4 36.4 36.6 28.2 36.6 18.2C36.6 8.2 28.4 0 18.3 0ZM18.3 34.9C9.1 34.9 1.5 27.4 1.5 18.2C1.5 9 9.1 1.5 18.3 1.5C27.5 1.5 35.1 9 35.1 18.3C35.1 27.6 27.5 34.9 18.3 34.9Z"
                                                    fill="white" />
                                            </svg>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="/product-category/necklace/">
                            <div>
                                <div class="overflow-hidden">
                                    <img loading="lazy" class="hover:scale-105 transition duration-300"
                                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/new-arrivals-4.jpg"
                                        alt="">
                                </div>
                                <div class="group ">
                                    <div class="p-4 group-hover:bg-sage flex gap-4 justify-between items-center">
                                        <div>
                                            <div
                                                class="lora text-deep-forest font-semibold text-lg mb-1 italic group-hover:text-white">
                                                Necklace</div>
                                            <div class="text-sm text-sage group-hover:text-white">Silver Miracle Earrings
                                            </div>
                                        </div>


                                        <div class="group-hover:block !group-hover:hidden">
                                            <svg class="h-10" viewBox="0 0 37 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.4999 12L16.2999 11.8C15.8999 11.8 15.4999 12.1 15.4999 12.5C15.4999 12.9 15.7999 13.3 16.1999 13.3L21.8999 13.4001L11.9999 23.3C11.6999 23.6 11.6999 24.1001 11.9999 24.4001C12.2999 24.7001 12.7999 24.7001 13.0999 24.4001L22.9999 14.5L23.0999 20.2001C23.0999 20.6 23.4999 20.9001 23.8999 20.9001C24.2999 20.9001 24.5999 20.5001 24.5999 20.1001L24.4999 12Z"
                                                    fill="white" />
                                                <path
                                                    d="M18.3 0C8.2 0 0 8.2 0 18.3C0 28.4 8.2 36.4 18.3 36.4C28.4 36.4 36.6 28.2 36.6 18.2C36.6 8.2 28.4 0 18.3 0ZM18.3 34.9C9.1 34.9 1.5 27.4 1.5 18.2C1.5 9 9.1 1.5 18.3 1.5C27.5 1.5 35.1 9 35.1 18.3C35.1 27.6 27.5 34.9 18.3 34.9Z"
                                                    fill="white" />
                                            </svg>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>




    </section>


    <section class="pt-8 md:pt-10 lg:pt-12 xl:pt-15">
        <div class="px-8 py-12 lg:px-12 lg:py-20 text-white"
            style="background: linear-gradient(100deg, #964B30 1.71%, #DA7854 97.48%);">
            <div class="grid lg:grid-cols-2 gap-10 ct-container">
                <div>
                    <img loading="lazy" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/banner-img1.webp"
                        alt="">
                </div>
                <div class="space-y-4 my-auto max-lg:text-center lg:px-16">
                    <div class="uppercase text-sm">LIMITED TIME ONLY</div>
                    <div class="lora text-2xl lg:text-4xl italic">
                        Your gift with <br>
                        purchase over ₹24,499.
                    </div>
                    <div>
                        Giving graciously is what we do best. Few feelings are more rewarding
                        than seeing someone smile as they unwrap a present you’ve thoughtfully
                        chosen because it’s simply them.
                    </div>
                    <div>
                        <a href="/shop" class="uppercase !underline underline-offset-4 !text-white">
                            SHOP NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ct-container pt-8 md:pt-10 lg:pt-12 xl:pt-15">
        <div class="text-center space-y-2">
            <div class="text-2xl lg:text-3xl text-deep-forest italic lora">Shop by Gender</div>
        </div>
        <div class="grid mt-10 grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-6">
            <div class="rounded-2xl bg-white p-3 max-w-md w-full mx-auto">
                <div class="grid gap-3 grid-cols-[40%_auto]">
                    <div class="rounded-xl overflow-hidden">
                        <img loading="lazy" class="w-full max-h-36 object-cover"
                            src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/shop-by-1.png" alt="">
                    </div>
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="text-deep-forest text-sm">Express your love with</div>
                            <div class="text-lg lg:text-lg text-sage italic lora font-medium">Men’s Jewellery</div>
                        </div>
                        <div>
                            <a class="text-sage border text-sm border-sage rounded-full px-4 py-2 flex gap-1 items-center w-fit"
                                href="<?php echo get_home_url(); ?>/shop">Explore Now <svg xmlns="http://www.w3.org/2000/svg" width="15" height="7"
                                    viewBox="0 0 15 7" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.867 3.1633L12.0177 0.135906C11.9763 0.0928365 11.927 0.058775 11.8725 0.0354241C11.8181 0.0120731 11.7597 0 11.7007 0C11.6417 0 11.5833 0.0120731 11.5289 0.0354241C11.4745 0.058775 11.4251 0.0928365 11.3838 0.135906C11.3016 0.22712 11.2559 0.346646 11.2559 0.470731C11.2559 0.594817 11.3016 0.714342 11.3838 0.805557L13.4764 3.02399H0.463565C0.34063 3.02399 0.222728 3.074 0.135799 3.16296C0.0488709 3.25192 0 3.37266 0 3.49847C0 3.62427 0.0488709 3.74467 0.135799 3.83363C0.222728 3.92259 0.34063 3.9726 0.463565 3.9726H13.4764L11.3838 6.19104C11.3016 6.28225 11.2559 6.40178 11.2559 6.52586C11.2559 6.64995 11.3016 6.76947 11.3838 6.86069C11.4246 6.90472 11.4737 6.93959 11.5282 6.96355C11.5827 6.98752 11.6414 7 11.7007 7C11.76 7 11.8187 6.98752 11.8732 6.96355C11.9277 6.93959 11.9768 6.90472 12.0177 6.86069L14.867 3.83329C14.9523 3.74368 15 3.62355 15 3.49847C15 3.37338 14.9523 3.25291 14.867 3.1633Z"
                                        fill="#667B68" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-2xl bg-white p-3 max-w-md w-full mx-auto">
                <div class="grid gap-3 grid-cols-[40%_auto]">
                    <div class="rounded-xl overflow-hidden">
                        <img loading="lazy" class="w-full max-h-36 object-cover"
                            src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/shop-by-2.png" alt="">
                    </div>
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="text-deep-forest text-sm">Express your love with</div>
                            <div class="text-lg lg:text-lg text-sage italic lora font-medium">Women’s Jewellery</div>
                        </div>
                        <div>
                            <a class="text-sage border text-sm border-sage rounded-full px-4 py-2 flex gap-1 items-center w-fit"
                                href="<?php echo get_home_url(); ?>/shop">Explore Now <svg xmlns="http://www.w3.org/2000/svg" width="15" height="7"
                                    viewBox="0 0 15 7" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.867 3.1633L12.0177 0.135906C11.9763 0.0928365 11.927 0.058775 11.8725 0.0354241C11.8181 0.0120731 11.7597 0 11.7007 0C11.6417 0 11.5833 0.0120731 11.5289 0.0354241C11.4745 0.058775 11.4251 0.0928365 11.3838 0.135906C11.3016 0.22712 11.2559 0.346646 11.2559 0.470731C11.2559 0.594817 11.3016 0.714342 11.3838 0.805557L13.4764 3.02399H0.463565C0.34063 3.02399 0.222728 3.074 0.135799 3.16296C0.0488709 3.25192 0 3.37266 0 3.49847C0 3.62427 0.0488709 3.74467 0.135799 3.83363C0.222728 3.92259 0.34063 3.9726 0.463565 3.9726H13.4764L11.3838 6.19104C11.3016 6.28225 11.2559 6.40178 11.2559 6.52586C11.2559 6.64995 11.3016 6.76947 11.3838 6.86069C11.4246 6.90472 11.4737 6.93959 11.5282 6.96355C11.5827 6.98752 11.6414 7 11.7007 7C11.76 7 11.8187 6.98752 11.8732 6.96355C11.9277 6.93959 11.9768 6.90472 12.0177 6.86069L14.867 3.83329C14.9523 3.74368 15 3.62355 15 3.49847C15 3.37338 14.9523 3.25291 14.867 3.1633Z"
                                        fill="#667B68" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-2xl bg-white p-3 max-w-md w-full mx-auto">
                <div class="grid gap-3 grid-cols-[40%_auto]">
                    <div class="rounded-xl overflow-hidden">
                        <img loading="lazy" class="w-full max-h-36 object-cover"
                            src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/shop-by-3.png" alt="">
                    </div>
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="text-deep-forest text-sm">Express your love with</div>
                            <div class="text-lg lg:text-lg text-sage italic lora font-medium">Kids’s Jewellery</div>
                        </div>
                        <div>
                            <a class="text-sage border text-sm border-sage rounded-full px-4 py-2 flex gap-1 items-center w-fit"
                                href="<?php echo get_home_url(); ?>/shop">Explore Now <svg xmlns="http://www.w3.org/2000/svg" width="15" height="7"
                                    viewBox="0 0 15 7" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.867 3.1633L12.0177 0.135906C11.9763 0.0928365 11.927 0.058775 11.8725 0.0354241C11.8181 0.0120731 11.7597 0 11.7007 0C11.6417 0 11.5833 0.0120731 11.5289 0.0354241C11.4745 0.058775 11.4251 0.0928365 11.3838 0.135906C11.3016 0.22712 11.2559 0.346646 11.2559 0.470731C11.2559 0.594817 11.3016 0.714342 11.3838 0.805557L13.4764 3.02399H0.463565C0.34063 3.02399 0.222728 3.074 0.135799 3.16296C0.0488709 3.25192 0 3.37266 0 3.49847C0 3.62427 0.0488709 3.74467 0.135799 3.83363C0.222728 3.92259 0.34063 3.9726 0.463565 3.9726H13.4764L11.3838 6.19104C11.3016 6.28225 11.2559 6.40178 11.2559 6.52586C11.2559 6.64995 11.3016 6.76947 11.3838 6.86069C11.4246 6.90472 11.4737 6.93959 11.5282 6.96355C11.5827 6.98752 11.6414 7 11.7007 7C11.76 7 11.8187 6.98752 11.8732 6.96355C11.9277 6.93959 11.9768 6.90472 12.0177 6.86069L14.867 3.83329C14.9523 3.74368 15 3.62355 15 3.49847C15 3.37338 14.9523 3.25291 14.867 3.1633Z"
                                        fill="#667B68" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>



    <section class="ct-container pt-8 md:pt-10 lg:pt-12 xl:pt-15 testimonials">
        <div class="text-center space-y-2 relative">
            <div class="text-2xl lg:text-3xl text-deep-forest italic lora">The love we got</div>
            <div class="flex gap-2 items-center absolute right-0 top-0 max-md:hidden">
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
        <div class="mt-10 swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide rounded-2xl bg-white p-4 border border-[#D8EEE5] flex flex-col">
                    <div class="flex-grow">
                        <div class="grid gap-3 grid-cols-[auto_30%]">
                            <div>
                                <div class="font-semibold text-deep-forest text-md mb-1">Rejina</div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="110" height="20" viewBox="0 0 143 25"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.9328 0L16.5102 8.76949L25.8653 9.49933L18.7212 15.6489L20.9254 24.8696L12.9328 19.9007L4.93983 24.8696L7.14411 15.6489L0 9.49933L9.35506 8.76949L12.9328 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.9331 0L16.5106 8.76949L25.8656 9.49933L18.7215 15.6489L20.9258 24.8696L12.9331 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.2162 0L45.7939 8.76949L55.149 9.49933L48.0049 15.6489L50.2091 24.8696L42.2162 19.9007L34.2235 24.8696L36.4278 15.6489L29.2837 9.49933L38.6388 8.76949L42.2162 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.2163 0L45.794 8.76949L55.1491 9.49933L48.005 15.6489L50.2092 24.8696L42.2163 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M71.4999 0L75.0776 8.76949L84.4327 9.49933L77.2885 15.6489L79.4928 24.8696L71.4999 19.9007L63.5072 24.8696L65.7115 15.6489L58.5674 9.49933L67.9224 8.76949L71.4999 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M71.5 0L75.0777 8.76949L84.4328 9.49933L77.2887 15.6489L79.4929 24.8696L71.5 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M100.784 0L104.361 8.76949L113.716 9.49933L106.572 15.6489L108.777 24.8696L100.784 19.9007L92.7909 24.8696L94.9952 15.6489L87.8511 9.49933L97.2061 8.76949L100.784 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M100.784 0L104.361 8.76949L113.716 9.49933L106.572 15.6489L108.777 24.8696L100.784 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M130.067 0L133.645 8.76949L143 9.49933L135.856 15.6489L138.06 24.8696L130.067 19.9007L122.075 24.8696L124.279 15.6489L117.135 9.49933L126.49 8.76949L130.067 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M130.067 0L133.645 8.76949L143 9.49933L135.856 15.6489L138.06 24.8696L130.067 19.9007V0Z"
                                            fill="#FFBD38" />
                                    </svg>
                                </div>
                                <div class="text-sm text-[#747474] mt-4">
                                    We believe in making and giving the best of quality and services. With our modern,
                                    traditional and fusion pieces
                                </div>
                            </div>
                            <div class="rounded-xl overflow-hidden">
                                <img loading="lazy" class="w-full max-h-36 object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/shop-by-1.png" alt="">
                            </div>

                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="flex items-center gap-2">
                        <div>
                            <img loading="lazy" class="aspect-square max-h-12 object-contain"
                                src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/chain.png" alt="">
                        </div>
                        <div class="text-sm font-medium text-deep-forest">Silver Ocean Rim pendant with Chain</div>
                    </div>
                </div>
                <div class="swiper-slide rounded-2xl bg-white p-4 border border-[#D8EEE5] flex flex-col">
                    <div class="flex-grow">
                        <div class="grid gap-3 grid-cols-[auto_30%]">
                            <div>
                                <div class="font-semibold text-deep-forest text-md mb-1">Rejina</div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="110" height="20" viewBox="0 0 143 25"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.9328 0L16.5102 8.76949L25.8653 9.49933L18.7212 15.6489L20.9254 24.8696L12.9328 19.9007L4.93983 24.8696L7.14411 15.6489L0 9.49933L9.35506 8.76949L12.9328 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.9331 0L16.5106 8.76949L25.8656 9.49933L18.7215 15.6489L20.9258 24.8696L12.9331 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.2162 0L45.7939 8.76949L55.149 9.49933L48.0049 15.6489L50.2091 24.8696L42.2162 19.9007L34.2235 24.8696L36.4278 15.6489L29.2837 9.49933L38.6388 8.76949L42.2162 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.2163 0L45.794 8.76949L55.1491 9.49933L48.005 15.6489L50.2092 24.8696L42.2163 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M71.4999 0L75.0776 8.76949L84.4327 9.49933L77.2885 15.6489L79.4928 24.8696L71.4999 19.9007L63.5072 24.8696L65.7115 15.6489L58.5674 9.49933L67.9224 8.76949L71.4999 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M71.5 0L75.0777 8.76949L84.4328 9.49933L77.2887 15.6489L79.4929 24.8696L71.5 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M100.784 0L104.361 8.76949L113.716 9.49933L106.572 15.6489L108.777 24.8696L100.784 19.9007L92.7909 24.8696L94.9952 15.6489L87.8511 9.49933L97.2061 8.76949L100.784 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M100.784 0L104.361 8.76949L113.716 9.49933L106.572 15.6489L108.777 24.8696L100.784 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M130.067 0L133.645 8.76949L143 9.49933L135.856 15.6489L138.06 24.8696L130.067 19.9007L122.075 24.8696L124.279 15.6489L117.135 9.49933L126.49 8.76949L130.067 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M130.067 0L133.645 8.76949L143 9.49933L135.856 15.6489L138.06 24.8696L130.067 19.9007V0Z"
                                            fill="#FFBD38" />
                                    </svg>
                                </div>
                                <div class="text-sm text-[#747474] mt-4">
                                    We believe in making and giving the best of quality and services. With our modern,
                                    traditional and fusion pieces
                                </div>
                            </div>
                            <div class="rounded-xl overflow-hidden">
                                <img loading="lazy" class="w-full max-h-36 object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/shop-by-1.png" alt="">
                            </div>

                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="flex items-center gap-2">
                        <div>
                            <img loading="lazy" class="aspect-square max-h-12 object-contain"
                                src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/chain.png" alt="">
                        </div>
                        <div class="text-sm font-medium text-deep-forest">Silver Ocean Rim pendant with Chain</div>
                    </div>
                </div>
                <div class="swiper-slide rounded-2xl bg-white p-4 border border-[#D8EEE5] flex flex-col">
                    <div class="flex-grow">
                        <div class="grid gap-3 grid-cols-[auto_30%]">
                            <div>
                                <div class="font-semibold text-deep-forest text-md mb-1">Rejina</div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="110" height="20" viewBox="0 0 143 25"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.9328 0L16.5102 8.76949L25.8653 9.49933L18.7212 15.6489L20.9254 24.8696L12.9328 19.9007L4.93983 24.8696L7.14411 15.6489L0 9.49933L9.35506 8.76949L12.9328 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.9331 0L16.5106 8.76949L25.8656 9.49933L18.7215 15.6489L20.9258 24.8696L12.9331 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.2162 0L45.7939 8.76949L55.149 9.49933L48.0049 15.6489L50.2091 24.8696L42.2162 19.9007L34.2235 24.8696L36.4278 15.6489L29.2837 9.49933L38.6388 8.76949L42.2162 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.2163 0L45.794 8.76949L55.1491 9.49933L48.005 15.6489L50.2092 24.8696L42.2163 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M71.4999 0L75.0776 8.76949L84.4327 9.49933L77.2885 15.6489L79.4928 24.8696L71.4999 19.9007L63.5072 24.8696L65.7115 15.6489L58.5674 9.49933L67.9224 8.76949L71.4999 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M71.5 0L75.0777 8.76949L84.4328 9.49933L77.2887 15.6489L79.4929 24.8696L71.5 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M100.784 0L104.361 8.76949L113.716 9.49933L106.572 15.6489L108.777 24.8696L100.784 19.9007L92.7909 24.8696L94.9952 15.6489L87.8511 9.49933L97.2061 8.76949L100.784 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M100.784 0L104.361 8.76949L113.716 9.49933L106.572 15.6489L108.777 24.8696L100.784 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M130.067 0L133.645 8.76949L143 9.49933L135.856 15.6489L138.06 24.8696L130.067 19.9007L122.075 24.8696L124.279 15.6489L117.135 9.49933L126.49 8.76949L130.067 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M130.067 0L133.645 8.76949L143 9.49933L135.856 15.6489L138.06 24.8696L130.067 19.9007V0Z"
                                            fill="#FFBD38" />
                                    </svg>
                                </div>
                                <div class="text-sm text-[#747474] mt-4">
                                    We believe in making and giving the best of quality and services. With our modern,
                                    traditional and fusion pieces
                                </div>
                            </div>
                            <div class="rounded-xl overflow-hidden">
                                <img loading="lazy" class="w-full max-h-36 object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/shop-by-1.png" alt="">
                            </div>

                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="flex items-center gap-2">
                        <div>
                            <img loading="lazy" class="aspect-square max-h-12 object-contain"
                                src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/chain.png" alt="">
                        </div>
                        <div class="text-sm font-medium text-deep-forest">Silver Ocean Rim pendant with Chain</div>
                    </div>
                </div>
                <div class="swiper-slide rounded-2xl bg-white p-4 border border-[#D8EEE5] flex flex-col">
                    <div class="flex-grow">
                        <div class="grid gap-3 grid-cols-[auto_30%]">
                            <div>
                                <div class="font-semibold text-deep-forest text-md mb-1">Rejina</div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="110" height="20" viewBox="0 0 143 25"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.9328 0L16.5102 8.76949L25.8653 9.49933L18.7212 15.6489L20.9254 24.8696L12.9328 19.9007L4.93983 24.8696L7.14411 15.6489L0 9.49933L9.35506 8.76949L12.9328 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.9331 0L16.5106 8.76949L25.8656 9.49933L18.7215 15.6489L20.9258 24.8696L12.9331 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.2162 0L45.7939 8.76949L55.149 9.49933L48.0049 15.6489L50.2091 24.8696L42.2162 19.9007L34.2235 24.8696L36.4278 15.6489L29.2837 9.49933L38.6388 8.76949L42.2162 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.2163 0L45.794 8.76949L55.1491 9.49933L48.005 15.6489L50.2092 24.8696L42.2163 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M71.4999 0L75.0776 8.76949L84.4327 9.49933L77.2885 15.6489L79.4928 24.8696L71.4999 19.9007L63.5072 24.8696L65.7115 15.6489L58.5674 9.49933L67.9224 8.76949L71.4999 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M71.5 0L75.0777 8.76949L84.4328 9.49933L77.2887 15.6489L79.4929 24.8696L71.5 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M100.784 0L104.361 8.76949L113.716 9.49933L106.572 15.6489L108.777 24.8696L100.784 19.9007L92.7909 24.8696L94.9952 15.6489L87.8511 9.49933L97.2061 8.76949L100.784 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M100.784 0L104.361 8.76949L113.716 9.49933L106.572 15.6489L108.777 24.8696L100.784 19.9007V0Z"
                                            fill="#FFBD38" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M130.067 0L133.645 8.76949L143 9.49933L135.856 15.6489L138.06 24.8696L130.067 19.9007L122.075 24.8696L124.279 15.6489L117.135 9.49933L126.49 8.76949L130.067 0Z"
                                            fill="#FFAA00" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M130.067 0L133.645 8.76949L143 9.49933L135.856 15.6489L138.06 24.8696L130.067 19.9007V0Z"
                                            fill="#FFBD38" />
                                    </svg>
                                </div>
                                <div class="text-sm text-[#747474] mt-4">
                                    We believe in making and giving the best of quality and services. With our modern,
                                    traditional and fusion pieces
                                </div>
                            </div>
                            <div class="rounded-xl overflow-hidden">
                                <img loading="lazy" class="w-full max-h-36 object-cover"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/shop-by-1.png" alt="">
                            </div>

                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="flex items-center gap-2">
                        <div>
                            <img loading="lazy" class="aspect-square max-h-12 object-contain"
                                src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/chain.png" alt="">
                        </div>
                        <div class="text-sm font-medium text-deep-forest">Silver Ocean Rim pendant with Chain</div>
                    </div>
                </div>
            </div>

            <div class="mt-10 max-md:hidden">
                <div class="swiper-scrollbar"></div>
            </div>




        </div>

    </section>


    <section class="pt-8 md:pt-10 lg:pt-12 xl:pt-15">
        <div class="bg-sage">
            <div class="py-3 md:py-4 text-white text-sm lg:text-base">
                <div class="marquee-container">
                    <div class="!pr-10">FOLLOW US @ZILARASILVER</div>
                    <div class="!pr-10"><svg xmlns="http://www.w3.org/2000/svg" width="49" height="19"
                            viewBox="0 0 49 19" fill="none">
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
        </div>
    </section>



    <section class="instagram-section">
        <div class="ct-container pt-8 md:pt-10 lg:pt-12 xl:pt-15">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="rounded-3xl overflow-hidden">
                            <a href="https://www.instagram.com/zilara_jewellery" target="_blank">
                                <img loading="lazy" class="aspect-square object-cover h-full w-full"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/instagram1.jpg" alt="">
                            </a>

                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="rounded-3xl overflow-hidden">
                            <a href="https://www.instagram.com/zilara_jewellery" target="_blank">
                                <img loading="lazy" class="aspect-square object-cover h-full w-full"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/instagram2.jpg" alt="">
                            </a>

                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="rounded-3xl overflow-hidden">
                            <a href="https://www.instagram.com/zilara_jewellery" target="_blank">
                                <img loading="lazy" class="aspect-square object-cover h-full w-full"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/instagram3.jpg" alt="">
                            </a>

                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="rounded-3xl overflow-hidden">
                            <a href="https://www.instagram.com/zilara_jewellery" target="_blank">
                                <img loading="lazy" class="aspect-square object-cover h-full w-full"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/instagram4.jpg" alt="">
                            </a>

                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="rounded-3xl overflow-hidden">
                            <a href="https://www.instagram.com/zilara_jewellery" target="_blank">
                                <img loading="lazy" class="aspect-square object-cover h-full w-full"
                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/instagram5.jpg" alt="">
                            </a>

                        </div>

                    </div>



                </div>
            </div>
        </div>
    </section>








</main>

<!-- Swiper JS -->


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- Initialize Swiper -->
<script>
    let swiper6 = new Swiper(".collection-slider-desktop .swiper", {
        slidesPerView: 3,
        spaceBetween: 10,
        loop: false,
        breakpoints: {
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            1240: {
                slidesPerView: 5,
                spaceBetween: 40,
            },
        },
    });

    let swiper7 = new Swiper(".collection-slider-mobile .swiper", {
        slidesPerView: 3.5,
        spaceBetween: 10,
        loop: false,
        breakpoints: {
            640: {
                slidesPerView: 4.5,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
            1240: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
        },
    });


    let swiper1 = new Swiper(".section4 .desktop .mySwiper", {
        navigation: {
            nextEl: ".section4 .desktop .button-next",
            prevEl: ".section4 .desktop .button-prev",
        },
    });
    let swiper2 = new Swiper(".section4 .mobile .mySwiper", {
        slidesPerView: 3,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });


    let swiper3 = new Swiper(".instagram-section .mySwiper", {
        slidesPerView: 1.2,
        spaceBetween: 10,
        loop: true,
        breakpoints: {
            640: {
                slidesPerView: 2.2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3.2,
                spaceBetween: 20,
            },
            1240: {
                slidesPerView: 4.2,
                spaceBetween: 20,
            },
        },
    });


    let swiper4 = new Swiper(".testimonials .swiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: false,
        navigation: {
            nextEl: ".testimonials .button-next",
            prevEl: ".testimonials .button-prev",
        },
        scrollbar: {
            el: ".testimonials .swiper-scrollbar",
            hide: false,
            draggable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1240: {
                slidesPerView: 2.5,
                spaceBetween: 20,
            },
        },
    });


    let swiper5 = new Swiper(".icon-with-text .swiper", {
        slidesPerView: 3,
        spaceBetween: 10,
        loop: false,
        breakpoints: {
            640: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
            1240: {
                slidesPerView: 6,
                spaceBetween: 20,
            },
        },
    });




    let swiper8 = new Swiper(".new-arrivals .swiper", {
        slidesPerView: 1.3,
        spaceBetween: 0,
        loop: false,
        breakpoints: {
            640: {
                slidesPerView: 2.3,
            },
            968: {
                slidesPerView: 3.3,
            },
            1240: {
                slidesPerView: 4,
            },
        },
    });

    let swiper9 = new Swiper(".products-slider .swiper", {
        slidesPerView: 1.3,
        spaceBetween: 0,
        loop: false,
        breakpoints: {
            640: {
                slidesPerView: 2.3,
            },
            968: {
                slidesPerView: 3.3,
            },
            1240: {
                slidesPerView: 4,
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

<?php get_footer(); ?>