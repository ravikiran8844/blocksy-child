<?php
/*
Template Name: Home Page
*/
get_header(); ?>
<link rel="stylesheet"
    href="<?php echo get_stylesheet_directory_uri(); ?>/assets/InfiniteMarquee/infinite-marquee.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<main>

    <section>
        <div>
            <a href="#">
                <picture>
                    <source media="(min-width: 768px)"
                        srcset="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/hero.jpg">
                    <source media="(max-width: 768px)"
                        srcset="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/hero-mobile.jpg">
                    <img class="w-full h-auto"
                        src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/hero-mobile.jpg" alt="main banner">
                </picture>
            </a>
        </div>
    </section>













    <!-- <section class="ct-container py-8 md:py-12 lg:py-16">
        <div class="text-center space-y-2">
            <div class="text-2xl lg:text-3xl text-deep-forest italic lora">Choose by style</div>
            <div class="text-sage">Where every piece tells a tale.</div>
        </div>

        <div>
            <div class="flex flex-col justify-center items-center gap-2 min-w-32">
                <div class="rounded-full overflow-hidden border border-deep-forest p-1">
                    <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/image.png" alt="">
                </div>
                <div>
                    Idols
                </div>
            </div>
        </div>
       
    </section> -->




    <section class="section4">
        <div class="ct-container py-8 md:py-12 lg:py-16 max-lg:hidden">
            <div class="grid grid-cols-2 gap-8 bg-white">
                <div class="rounded-tr-[60px] overflow-hidden rounded-br-[60px]">
                    <img class="!h-full object-cover w-full" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection-banner.jpg" alt="">
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
                                href="#">Explore Now <svg xmlns="http://www.w3.org/2000/svg" width="15" height="7"
                                    viewBox="0 0 15 7" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.867 3.1633L12.0177 0.135906C11.9763 0.0928365 11.927 0.058775 11.8725 0.0354241C11.8181 0.0120731 11.7597 0 11.7007 0C11.6417 0 11.5833 0.0120731 11.5289 0.0354241C11.4745 0.058775 11.4251 0.0928365 11.3838 0.135906C11.3016 0.22712 11.2559 0.346646 11.2559 0.470731C11.2559 0.594817 11.3016 0.714342 11.3838 0.805557L13.4764 3.02399H0.463565C0.34063 3.02399 0.222728 3.074 0.135799 3.16296C0.0488709 3.25192 0 3.37266 0 3.49847C0 3.62427 0.0488709 3.74467 0.135799 3.83363C0.222728 3.92259 0.34063 3.9726 0.463565 3.9726H13.4764L11.3838 6.19104C11.3016 6.28225 11.2559 6.40178 11.2559 6.52586C11.2559 6.64995 11.3016 6.76947 11.3838 6.86069C11.4246 6.90472 11.4737 6.93959 11.5282 6.96355C11.5827 6.98752 11.6414 7 11.7007 7C11.76 7 11.8187 6.98752 11.8732 6.96355C11.9277 6.93959 11.9768 6.90472 12.0177 6.86069L14.867 3.83329C14.9523 3.74368 15 3.62355 15 3.49847C15 3.37338 14.9523 3.25291 14.867 3.1633Z"
                                        fill="#667B68"></path>
                                </svg></a>
                        </div>
                    </div>

                    <div class="mt-5">
                        <div class="flex justify-end items-center gap-1 relative">

                            <button class="button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z" clip-rule="evenodd" />
                                </svg>

                            </button>
                            <button class="button-next">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
                                </svg>

                            </button>
                        </div>

                        <div class="swiper mySwiper mt-5">




                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="rounded-3xl bg-[#F4F5F4] p-4 w-full shadow-md">
                                        <div class="grid gap-4 grid-cols-[40%_auto]">
                                            <div class="rounded-xl overflow-hidden">
                                                <img class="w-full max-h-40 object-cover"
                                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/shop-by-2.png" alt="">
                                            </div>
                                            <div class="flex flex-col justify-between">
                                                <div>
                                                    <div class="text-deep-forest text-md">Express your love with</div>
                                                    <div class="text-lg lg:text-xl text-sage italic lora font-medium">Women’s
                                                        Jewellery</div>
                                                </div>
                                                <div>
                                                    <a class="text-sage border text-sm border-sage rounded-full px-4 py-2 flex gap-1 items-center w-fit"
                                                        href="#">Explore Now <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                            height="7" viewBox="0 0 15 7" fill="none">
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
                                                <img class="w-full max-h-40 object-cover"
                                                    src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/shop-by-2.png" alt="">
                                            </div>
                                            <div class="flex flex-col justify-between">
                                                <div>
                                                    <div class="text-deep-forest text-md">Express your love with</div>
                                                    <div class="text-lg lg:text-xl text-sage italic lora font-medium">Women’s
                                                        Jewellery</div>
                                                </div>
                                                <div>
                                                    <a class="text-sage border text-sm border-sage rounded-full px-4 py-2 flex gap-1 items-center w-fit"
                                                        href="#">Explore Now <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                            height="7" viewBox="0 0 15 7" fill="none">
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
    </section>





    <section class="ct-container py-8 md:py-12 lg:py-16">
        <div class="text-center space-y-2">
            <div class="text-2xl lg:text-3xl text-deep-forest italic lora">Our Collection</div>
            <div class="text-sage">Discover our latest jewellery collection!</div>
        </div>
        <div class="grid mt-10 grid-cols-2 sm:grid-cols-3 gap-4 lg:gap-8">
            <div class="rounded-2xl overflow-hidden col-span-2 sm:col-span-1">
                <a href="#">
                    <img class="w-full" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection1.jpg"
                        alt="">
                </a>
            </div>
            <div class="rounded-2xl overflow-hidden">
                <a href="#">
                    <img class="w-full" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection2.jpg"
                        alt="">
                </a>
            </div>
            <div class="rounded-2xl overflow-hidden">
                <a href="#">
                    <img class="w-full" src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/collection3.jpg"
                        alt="">
                </a>
            </div>
        </div>

    </section>



    <section class="ct-container py-8 md:py-12 lg:py-16">
        <div class="text-center space-y-2">
            <div class="text-2xl lg:text-3xl text-deep-forest italic lora">Shop by Gender</div>
        </div>
        <div class="grid mt-10 grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-6">
            <div class="rounded-2xl bg-white p-3 max-w-lg w-full mx-auto">
                <div class="grid gap-3 grid-cols-[40%_auto]">
                    <div class="rounded-xl overflow-hidden">
                        <img class="w-full max-h-28 object-cover"
                            src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/shop-by-1.png" alt="">
                    </div>
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="text-deep-forest text-sm">Express your love with</div>
                            <div class="text-lg lg:text-lg text-sage italic lora font-medium">Men’s Jewellery</div>
                        </div>
                        <div>
                            <a class="text-sage border text-sm border-sage rounded-full px-4 py-1 flex gap-1 items-center w-fit"
                                href="#">Explore Now <svg xmlns="http://www.w3.org/2000/svg" width="15" height="7"
                                    viewBox="0 0 15 7" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.867 3.1633L12.0177 0.135906C11.9763 0.0928365 11.927 0.058775 11.8725 0.0354241C11.8181 0.0120731 11.7597 0 11.7007 0C11.6417 0 11.5833 0.0120731 11.5289 0.0354241C11.4745 0.058775 11.4251 0.0928365 11.3838 0.135906C11.3016 0.22712 11.2559 0.346646 11.2559 0.470731C11.2559 0.594817 11.3016 0.714342 11.3838 0.805557L13.4764 3.02399H0.463565C0.34063 3.02399 0.222728 3.074 0.135799 3.16296C0.0488709 3.25192 0 3.37266 0 3.49847C0 3.62427 0.0488709 3.74467 0.135799 3.83363C0.222728 3.92259 0.34063 3.9726 0.463565 3.9726H13.4764L11.3838 6.19104C11.3016 6.28225 11.2559 6.40178 11.2559 6.52586C11.2559 6.64995 11.3016 6.76947 11.3838 6.86069C11.4246 6.90472 11.4737 6.93959 11.5282 6.96355C11.5827 6.98752 11.6414 7 11.7007 7C11.76 7 11.8187 6.98752 11.8732 6.96355C11.9277 6.93959 11.9768 6.90472 12.0177 6.86069L14.867 3.83329C14.9523 3.74368 15 3.62355 15 3.49847C15 3.37338 14.9523 3.25291 14.867 3.1633Z"
                                        fill="#667B68" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-2xl bg-white p-3 max-w-lg w-full mx-auto">
                <div class="grid gap-3 grid-cols-[40%_auto]">
                    <div class="rounded-xl overflow-hidden">
                        <img class="w-full max-h-28 object-cover"
                            src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/shop-by-2.png" alt="">
                    </div>
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="text-deep-forest text-sm">Express your love with</div>
                            <div class="text-lg lg:text-lg text-sage italic lora font-medium">Women’s Jewellery</div>
                        </div>
                        <div>
                            <a class="text-sage border text-sm border-sage rounded-full px-4 py-1 flex gap-1 items-center w-fit"
                                href="#">Explore Now <svg xmlns="http://www.w3.org/2000/svg" width="15" height="7"
                                    viewBox="0 0 15 7" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.867 3.1633L12.0177 0.135906C11.9763 0.0928365 11.927 0.058775 11.8725 0.0354241C11.8181 0.0120731 11.7597 0 11.7007 0C11.6417 0 11.5833 0.0120731 11.5289 0.0354241C11.4745 0.058775 11.4251 0.0928365 11.3838 0.135906C11.3016 0.22712 11.2559 0.346646 11.2559 0.470731C11.2559 0.594817 11.3016 0.714342 11.3838 0.805557L13.4764 3.02399H0.463565C0.34063 3.02399 0.222728 3.074 0.135799 3.16296C0.0488709 3.25192 0 3.37266 0 3.49847C0 3.62427 0.0488709 3.74467 0.135799 3.83363C0.222728 3.92259 0.34063 3.9726 0.463565 3.9726H13.4764L11.3838 6.19104C11.3016 6.28225 11.2559 6.40178 11.2559 6.52586C11.2559 6.64995 11.3016 6.76947 11.3838 6.86069C11.4246 6.90472 11.4737 6.93959 11.5282 6.96355C11.5827 6.98752 11.6414 7 11.7007 7C11.76 7 11.8187 6.98752 11.8732 6.96355C11.9277 6.93959 11.9768 6.90472 12.0177 6.86069L14.867 3.83329C14.9523 3.74368 15 3.62355 15 3.49847C15 3.37338 14.9523 3.25291 14.867 3.1633Z"
                                        fill="#667B68" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-2xl bg-white p-3 max-w-lg w-full mx-auto">
                <div class="grid gap-3 grid-cols-[40%_auto]">
                    <div class="rounded-xl overflow-hidden">
                        <img class="w-full max-h-28 object-cover"
                            src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/05/shop-by-3.png" alt="">
                    </div>
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="text-deep-forest text-sm">Express your love with</div>
                            <div class="text-lg lg:text-lg text-sage italic lora font-medium">Kids’s Jewellery</div>
                        </div>
                        <div>
                            <a class="text-sage border text-sm border-sage rounded-full px-4 py-1 flex gap-1 items-center w-fit"
                                href="#">Explore Now <svg xmlns="http://www.w3.org/2000/svg" width="15" height="7"
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


</main>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".section4 .mySwiper", {
        navigation: {
            nextEl: ".section4 .button-next",
            prevEl: ".section4 .button-prev",
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