<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>


	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs" role="tablist">
			<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
				<li class="<?php echo esc_attr( $key ); ?>_tab" id="tab-title-<?php echo esc_attr( $key ); ?>">
					<a href="#tab-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
						<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
		<article>
		<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
			<?php
				$classes = [
					'woocommerce-Tabs-panel',
					'woocommerce-Tabs-panel--' . esc_attr($key),
					'panel',
					'entry-content',
					'wc-tab',
					'is-layout-constrained'
				];

				if ($key === 'description' || $key === 'additional_information') {
					if (
						blocksy_get_theme_mod('woo_tabs_type', 'type-1') === 'type-4'
						||
						blocksy_get_theme_mod('woo_has_product_tabs_description', 'no') === 'yes'
					) {
						$classes[] = 'ct-has-heading';
					}
				}
			?>

			<div class="<?php echo implode(' ', $classes) ?>" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
				<?php
				if ( isset( $product_tab['callback'] ) ) {
					call_user_func( $product_tab['callback'], $key, $product_tab );
				}
				?>
			</div>
		<?php endforeach; ?>
		</article>

		<?php do_action( 'woocommerce_product_after_tabs' ); ?>
	</div>



	<section class="bg-sage mt-10">
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

<?php endif; ?>


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