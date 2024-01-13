<?php



/**
 * 
 * Shortocode for telaeris partner carousel
 * 
 */

function melli_pricing_loop_shortcode($atts, $content = null)
{

    shortcode_atts(array(
        'post_type' => 'product',
        'posts_per_page' => -1,
    ), $atts);

    $the_query = new WP_Query(
        [
            'post_type' => 'product',
            'posts_per_page' => -1,
            'post_status' => 'publish',
			'order' => 'ASC',
			'tax_query' => array(
    array(
        'taxonomy' => 'product_cat',
        'terms' => 'btl',
        'field' => 'slug',
        'include_children' => true,
        'operator' => 'IN'
    )
),
			
        ]
    );
    ob_start();
?>
    <div class="melli_slider_container">
        <div class="container">
            <div class="row">
                <?php
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                        global $product;
                        $sale_price = $product->get_sale_price();
                        $regular_price = $product->get_regular_price();
                        if ($sale_price) {
                            $saved_price = $regular_price - $sale_price;
                        }
                        // Carbon fields get post meta
                        // $melli_metas = carbon_get_post_meta(get_the_ID(), 'melli_card_features'); 
                        ?>
                        <div class="col-lg-2">
                            <button class="melli-single-pricing-cards" data-id="<?php echo get_the_ID(); ?>" data-rprice="<?php echo $regular_price ? $regular_price : '0'; ?>" data-sprice="<?php echo $sale_price ? $sale_price : '0'; ?>" data-savedprice="<?php echo $saved_price ? $saved_price : '0'; ?>">
									<i class="fa fa-check"></i>
                                <h4><?php echo carbon_get_post_meta(get_the_ID(), 'melli_cart_title'); ?></h4>
                                <div class="sale-price-wrap">
                                    <?php 
                                    $is_percentage_present = melli_show_sale_percentage_loop();
                                    if( null != $is_percentage_present ) {
                                        echo $is_percentage_present;
                                    }else{
                                        echo __('0% off', 'melli_pricing');
                                    }

                                    ?>
                                </div>
                            </button>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_query();
                ?>

                <div class="melli-price-and-buy-btn">
                    <div class="price">
                        <?php if (! empty( $sale_price ) ) : ?>
                            <div class="price__top"><strong id="salePrice"></strong>
                                <span>
                                    <strike id="regularPrice"></strike>
                                </span>
                            </div>
                            <div class="price__bottom"><i class="fa fa-check"></i>You Saved <span id="youSaved"></span></div>
                        <?php else : ?>
                            <div class="price__top">
                                <!-- <strong id="salePrice"></strong> -->
                                <span id="regularPrice">
                                </span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php //  echo do_shortcode('[add_to_cart id=' . '13257' . ']'); 
                    ?>
                    <a id="melliAddtoCart" href="" data-quantity="1" class="add_to_cart_button product_type_simple single_add_to_cart_button btn btn-outline-primary btn-block ajax_add_to_cart elementor-button-link elementor-button elementor-size-md" data-product_id="" rel="nofollow"> Buy Now</a>
                </div>
            </div>
        </div>
    </div>
<?php
    return ob_get_clean();
}

// Views 
// 

function melli_pricing_loop_shortcode_views($atts, $content = null)
{

    shortcode_atts(array(
        'post_type' => 'product',
        'posts_per_page' => -1,
    ), $atts);

    $the_query = new WP_Query(
        [
            'post_type' => 'product',
            'posts_per_page' => -1,
            'post_status' => 'publish',
			'order' => 'ASC',
			'tax_query' => array(
    array(
        'taxonomy' => 'product_cat',
        'terms' => 'btv',
        'field' => 'slug',
        'include_children' => true,
        'operator' => 'IN'
    )
),
			
        ]
    );
    ob_start();
?>
    <div class="melli_slider_container">
        <div class="container">
            <div class="row">
               
            </div>

            <div class="row">
                <?php
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                        global $product;
                        $sale_price = $product->get_sale_price();
                        $regular_price = $product->get_regular_price();
                        if ($sale_price) {
                            $saved_price = $regular_price - $sale_price;
                        }
                        // Carbon fields get post meta
                        // $melli_metas = carbon_get_post_meta(get_the_ID(), 'melli_card_features'); 
                        ?>
                        <div class="col-lg-2">
                            <button class="melli-single-pricing-cards" data-id="<?php echo get_the_ID(); ?>" data-rprice="<?php echo $regular_price ? $regular_price : '0'; ?>" data-sprice="<?php echo $sale_price ? $sale_price : '0'; ?>" data-savedprice="<?php echo $saved_price ? $saved_price : '0'; ?>">
									<i class="fa fa-check"></i>
                                <h4><?php echo carbon_get_post_meta(get_the_ID(), 'melli_cart_title'); ?></h4>
                                <div class="sale-price-wrap">
                                    <?php 
                                    $is_percentage_present = melli_show_sale_percentage_loop();
                                    if( null != $is_percentage_present ) {
                                        echo $is_percentage_present;
                                    }else{
                                        echo __('0% off', 'melli_pricing');
                                    }

                                    ?>
                                </div>
                            </button>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_query();
                ?>

                <div class="melli-price-and-buy-btn">
                    <div class="price">
                        <?php if (! empty( $sale_price ) ) : ?>
                            <div class="price__top"><strong id="salePrice"></strong>
                                <span>
                                    <strike id="regularPrice"></strike>
                                </span>
                            </div>
                            <div class="price__bottom"><i class="fa fa-check"></i>You Saved <span id="youSaved"></span></div>
                        <?php else : ?>
                            <div class="price__top">
                                <!-- <strong id="salePrice"></strong> -->
                                <span id="regularPrice">
                                </span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php //  echo do_shortcode('[add_to_cart id=' . '13257' . ']'); 
                    ?>
                    <a id="melliAddtoCart" href="" data-quantity="1" class="add_to_cart_button product_type_simple single_add_to_cart_button btn btn-outline-primary btn-block ajax_add_to_cart elementor-button-link elementor-button elementor-size-md" data-product_id="" rel="nofollow"> Buy Now</a>
                </div>
            </div>
        </div>
    </div>
<?php
    return ob_get_clean();
}

// Followers 
// 

function melli_pricing_loop_shortcode_followers($atts, $content = null)
{

    shortcode_atts(array(
        'post_type' => 'product',
        'posts_per_page' => -1,
    ), $atts);

    $the_query = new WP_Query(
        [
            'post_type' => 'product',
            'posts_per_page' => -1,
            'post_status' => 'publish',
			'order' => 'ASC',
			'tax_query' => array(
    array(
        'taxonomy' => 'product_cat',
        'terms' => 'btf',
        'field' => 'slug',
        'include_children' => true,
        'operator' => 'IN'
    )
),
			
        ]
    );
    ob_start();
?>
    <div class="melli_slider_container">
        <div class="container">
            <div class="row">
               
            </div>

            <div class="row">
                <?php
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                        global $product;
                        $sale_price = $product->get_sale_price();
                        $regular_price = $product->get_regular_price();
                        if ($sale_price) {
                            $saved_price = $regular_price - $sale_price;
                        }
                        // Carbon fields get post meta
                        // $melli_metas = carbon_get_post_meta(get_the_ID(), 'melli_card_features'); 
                        ?>
                        <div class="col-lg-2">
                            <button class="melli-single-pricing-cards" data-id="<?php echo get_the_ID(); ?>" data-rprice="<?php echo $regular_price ? $regular_price : '0'; ?>" data-sprice="<?php echo $sale_price ? $sale_price : '0'; ?>" data-savedprice="<?php echo $saved_price ? $saved_price : '0'; ?>">
									<i class="fa fa-check"></i>
                                <h4><?php echo carbon_get_post_meta(get_the_ID(), 'melli_cart_title'); ?></h4>
                                <div class="sale-price-wrap">
                                    <?php 
                                    $is_percentage_present = melli_show_sale_percentage_loop();
                                    if( null != $is_percentage_present ) {
                                        echo $is_percentage_present;
                                    }else{
                                        echo __('0% off', 'melli_pricing');
                                    }

                                    ?>
                                </div>
                            </button>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_query();
                ?>

                <div class="melli-price-and-buy-btn">
                    <div class="price">
                        <?php if (! empty( $sale_price ) ) : ?>
                            <div class="price__top"><strong id="salePrice"></strong>
                                <span>
                                    <strike id="regularPrice"></strike>
                                </span>
                            </div>
                            <div class="price__bottom"><i class="fa fa-check"></i>You Saved <span id="youSaved"></span></div>
                        <?php else : ?>
                            <div class="price__top">
                                <!-- <strong id="salePrice"></strong> -->
                                <span id="regularPrice">
                                </span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php //  echo do_shortcode('[add_to_cart id=' . '13257' . ']'); 
                    ?>
                    <a id="melliAddtoCart" href="" data-quantity="1" class="add_to_cart_button product_type_simple single_add_to_cart_button btn btn-outline-primary btn-block ajax_add_to_cart elementor-button-link elementor-button elementor-size-md" data-product_id="" rel="nofollow"> Buy Now</a>
                </div>
            </div>
        </div>
    </div>
<?php
    return ob_get_clean();
}

add_shortcode('mellilipricing', 'melli_pricing_loop_shortcode');
add_shortcode('mellilipricingv', 'melli_pricing_loop_shortcode_views');
add_shortcode('mellilipricingf', 'melli_pricing_loop_shortcode_followers');

/**
 * Change add to cart button text 
 */

// To change add to cart text on single product page
add_filter('woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text');
function woocommerce_custom_single_add_to_cart_text()
{
    return __('Buy Now', 'woocommerce');
}

// To change add to cart text on product archives(Collection) page
add_filter('woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text');
function woocommerce_custom_product_add_to_cart_text()
{
    return __('Buy Now', 'woocommerce');
}



/**
 * Discount percentage WC 
 * 
 */

// add_action( 'woocommerce_before_shop_loop_item_title', 'melli_show_sale_percentage_loop', 25 );

function melli_show_sale_percentage_loop()
{
    global $product;
    if (!$product->is_on_sale()) return;
    if ($product->is_type('simple')) {
        $max_percentage = (($product->get_regular_price() - $product->get_sale_price()) / $product->get_regular_price()) * 100;
    } elseif ($product->is_type('variable')) {
        $max_percentage = 0;
        foreach ($product->get_children() as $child_id) {
            $variation = wc_get_product($child_id);
            $price = $variation->get_regular_price();
            $sale = $variation->get_sale_price();
            if ($price != 0 && !empty($sale)) $percentage = ($price - $sale) / $price * 100;
            if ($percentage > $max_percentage) {
                $max_percentage = $percentage;
            }
        }
    }
    if ($max_percentage > 0) return "<div class='sale-perc'> " . round($max_percentage) . "% off</div>";
}
