<?php
if (! defined('ABSPATH')) {
  exit;
}
?>

<div class="flex justify-between items-center gap-4 max-md:mb-2 md:!mb-0">
  <h1 class="!text-2xl !m-0"><?php the_title(); ?></h1>

  <div class="flex items-center gap-3 max-md:hidden ">
    <!-- Wishlist -->
    <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>

    <div x-data="{ open: false }" class="relative inline-block text-left">
      <!-- Share Button -->
      <button @click="open = !open"
        class="!text-sage !bg-white cursor-pointer shadow h-10 w-10 rounded-sm flex justify-center items-center"
        aria-label="Share">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6" fill="none" viewBox="0 0 24 24"
          stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
        </svg>
      </button>

      <!-- Dropdown -->
      <div x-show="open" x-cloak @click.outside="open = false"
        x-transition
        class="absolute -left-full mt-2 w-28 bg-white border rounded shadow-lg z-50 p-2 space-y-2">
        <a :href="`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}`" target="_blank"
          class="block text-sm text-gray-700 hover:text-sage">Facebook</a>
        <a :href="`https://twitter.com/intent/tweet?url=${encodeURIComponent(window.location.href)}`" target="_blank"
          class="block text-sm text-gray-700 hover:text-sage">Twitter</a>
        <a :href="`https://api.whatsapp.com/send?text=${encodeURIComponent(window.location.href)}`" target="_blank"
          class="block text-sm text-gray-700 hover:text-sage">WhatsApp</a>
        <a :href="`https://www.linkedin.com/shareArticle?url=${encodeURIComponent(window.location.href)}`" target="_blank"
          class="block text-sm text-gray-700 hover:text-sage">LinkedIn</a>
      </div>
    </div>




  </div>
</div>



<div class="text-sm text-[#A32C31]">Product Sub Title</div>