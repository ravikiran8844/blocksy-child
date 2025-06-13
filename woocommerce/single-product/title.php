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
        class="absolute left-0 mt-2 w-fit bg-white  rounded shadow-lg z-1 p-2 space-y-3">
        <a :href="`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}`" target="_blank"
          class="block text-sm text-gray-700 hover:text-sage"><svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook-icon lucide-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
        <a :href="`https://twitter.com/intent/tweet?url=${encodeURIComponent(window.location.href)}`" target="_blank"
          class="block text-sm text-gray-700 hover:text-sage">
          <svg xmlns="http://www.w3.org/2000/svg" class="size-6" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter-icon lucide-twitter"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg></a>
        <!-- <a :href="`https://api.whatsapp.com/send?text=${encodeURIComponent(window.location.href)}`" target="_blank"
          class="block text-sm text-gray-700 hover:text-sage">WhatsApp</a> -->
        <a :href="`https://www.linkedin.com/shareArticle?url=${encodeURIComponent(window.location.href)}`" target="_blank"
          class="block text-sm text-gray-700 hover:text-sage">
          <svg xmlns="http://www.w3.org/2000/svg" class="size-6" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin-icon lucide-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg></a>
      </div>
    </div>




  </div>
</div>



<?php
$product_subtitle = get_field('product_subtitle');

if ($product_subtitle) {
    ?>
    <div class="text-sm text-[#A32C31]">
        <?php echo esc_html($product_subtitle); ?>
    </div>
    <?php
}
?>



