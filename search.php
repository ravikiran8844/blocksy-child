<?php
// search.php — custom search template for products

get_header();

if ( have_posts() ) :
    // Optional: show a banner or title
    ?>
<div class="ct-container pt-8 md:pt-10 lg:pt-12 xl:pt-15">
    <div class="!text-xl font-semibold mb-10 text-deep-forest">Search Results for: <?php echo esc_html( get_search_query() ); ?></div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 list-none">
        <?php
        while ( have_posts() ) : the_post();

            if ( get_post_type() === 'product' ) {
                wc_get_template_part( 'content', 'product' );
            }

        endwhile;
        ?>
    </div>

    <?php the_posts_pagination(); ?>
</div>
<?php
else :
    ?>
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">No results found for: <?php echo esc_html( get_search_query() ); ?></h1>
</div>
<?php
endif;

get_footer();