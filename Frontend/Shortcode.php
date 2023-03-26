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
                <div class="col-lg-12">
                    <div class="flex-row lg-cols-2 md-cols-2 sm-cols-2 xs-cols-2">
                        <div class="flex-col">
                            <div class="plan__type is-active">
                                <div class="plan__type-head">
                                    <h6>High Quality
                                        <!-- --> <br> <!-- -->likes
                                    </h6><i class="svg-blob svg-blob--blobPhone"><svg width="103" height="101" viewBox="0 0 103 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M71.3998 77.7153C76.3721 73.6779 79.2107 67.5775 79.0969 61.1735L78.5226 28.8568C78.3182 17.3537 68.8274 8.1944 57.3243 8.39882C45.8213 8.60325 36.662 18.094 36.8664 29.5971L36.9679 35.3104L37.3032 78.1227L53.6301 81.852C59.8743 83.2783 66.4275 81.7527 71.3998 77.7153Z" fill="url(#paint0_linear_47_1771)"></path>
                                            <path d="M71.3998 77.7153C76.3721 73.6779 79.2107 67.5775 79.0969 61.1735L78.5226 28.8568C78.3182 17.3537 68.8274 8.1944 57.3243 8.39882C45.8213 8.60325 36.662 18.094 36.8664 29.5971L36.9679 35.3104L37.3032 78.1227L53.6301 81.852C59.8743 83.2783 66.4275 81.7527 71.3998 77.7153Z" fill="#D1DAE1"></path>
                                            <path d="M51.353 19.5227C52.6932 22.2366 55.871 21.7274 56.7568 19.5005M59.4811 19.3311C60.8213 22.045 63.9991 21.5358 64.8849 19.309M49.9385 24.7844C55.7485 31.2932 62.2478 29.8758 66.1684 23.0757" stroke="#5F5F5F" stroke-width="1.13296" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <rect x="70.6993" y="19.1041" width="11.6769" height="20.7" rx="3.4811" transform="rotate(16.165 70.6993 19.1041)" fill="#5F5F5F"></rect>
                                            <rect opacity="0.4" x="67.1367" y="46.0889" width="12.2077" height="29.5156" rx="6.10386" transform="rotate(-8.3767 67.1367 46.0889)" fill="#5F5F5F"></rect>
                                            <rect x="69.2581" y="38.6539" width="12.2077" height="29.5156" rx="6.10386" transform="rotate(-8.3767 69.2581 38.6539)" fill="#D1DAE1"></rect>
                                        </svg></i>
                                </div>
                                <div class="plan__type-body">
                                    <ul>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>REAL</strong> likes from <br> <strong>REAL</strong> people</div>
                                            <div class="tooltip"><a>What’s the difference?</a></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Guaranteed <br> <strong>Instant Delivery</strong></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Option to <strong>split likes</strong> <br> on multiple pictures</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Includes video views</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>No password</strong> <br> required</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Fast Delivery <br> <strong>(gradual or instant)</strong></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>24/7</strong> support</div>
                                        </li>
                                    </ul>
                                </div>
                                <span class="plan__type-checkbox"><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="flex-col">
                            <div class="plan__type plan__type--premium" title="Currently unavailable">
                                <div class="plan__type-head">
                                    <h6>Premium
                                        <!-- --> <br> <!-- -->likes
                                    </h6><i class="svg-blob svg-blob--blobCrown"><svg width="183" height="198" viewBox="0 0 183 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M121.632 8.47342C121.632 7.20394 122.627 6.17374 123.851 6.17374C125.078 6.17374 126.07 7.20393 126.07 8.47379C126.07 9.74327 125.077 10.7735 123.851 10.7735C123.717 10.7735 123.585 10.7593 123.458 10.7352L116.669 32.0172C105.276 28.7114 99.3442 29.0452 89.2248 32.0168L82.4357 10.7348C82.3077 10.7586 82.1769 10.7731 82.0421 10.7731C80.8173 10.7731 79.8234 9.74328 79.8234 8.47342C79.8234 7.20394 80.8174 6.17374 82.0429 6.17374C83.2677 6.17374 84.2616 7.20356 84.2616 8.47342C84.2616 9.39557 83.7361 10.1883 82.9809 10.5554C85.2176 13.0129 90.8895 18.9211 93.7168 18.9211C98.702 18.9211 101.478 9.09237 102.495 4.55142C101.486 4.33476 100.727 3.409 100.727 2.29967C100.727 1.03019 101.722 0 102.947 0C104.173 0 105.166 1.02981 105.166 2.29967C105.166 3.40938 104.408 4.3352 103.399 4.55142C104.415 9.09275 107.192 18.9211 112.176 18.9211C115.004 18.9211 120.677 13.0129 122.913 10.5554C122.157 10.1883 121.632 9.3955 121.632 8.47342Z" fill="#FFB6AB"></path>
                                            <path d="M126.782 156.023C135.626 148.842 140.675 137.991 140.472 126.6L139.451 69.1171C139.087 48.6562 122.206 32.3642 101.745 32.7278C81.2842 33.0915 64.9921 49.973 65.3558 70.4338L65.5364 80.5963L66.1327 156.748L95.174 163.381C106.281 165.918 117.937 163.205 126.782 156.023Z" fill="url(#paint0_linear_441_3801)"></path>
                                            <path d="M126.782 156.023C135.626 148.842 140.675 137.991 140.472 126.6L139.451 69.1171C139.087 48.6562 122.206 32.3642 101.745 32.7278C81.2842 33.0915 64.9921 49.973 65.3558 70.4338L65.5364 80.5963L66.1327 156.748L95.174 163.381C106.281 165.918 117.937 163.205 126.782 156.023Z" fill="#FFB6AB"></path>
                                            <path d="M91.1235 52.5144C93.5073 57.3417 99.1599 56.4359 100.735 52.4749M105.581 52.1736C107.965 57.0009 113.618 56.0951 115.193 52.1342M88.6075 61.8735C98.9419 73.451 110.502 70.9298 117.476 58.8342" stroke="#FF553C" stroke-width="2.01524" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></i>
                                </div>
                                <div class="plan__type-body">
                                    <ul>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>REAL</strong> likes from <br> <strong>ACTIVE</strong> people</div>
                                            <div class="tooltip"><a>What’s the difference?</a></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><span><strong>Increased chance <br> to reach explore page</strong></span></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Guaranteed <br> <strong>Instant Delivery</strong></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Option to <strong>split likes</strong> <br> on multiple pictures</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Includes video views</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>No password</strong> <br> required</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Fast Delivery <br> <strong>(gradual or instant)</strong></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>

                                            </svg>

                                            <div><strong>24/7</strong> support</div>
                                        </li>
                                    </ul>
                                </div>
                                <span class="plan__type-checkbox"><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <h4><?php echo '+' . carbon_get_post_meta(get_the_ID(), 'melli_cart_title'); ?></h4>
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
                <div class="col-lg-12">
                    <div class="flex-row lg-cols-2 md-cols-2 sm-cols-2 xs-cols-2">
                        <div class="flex-col">
                            <div class="plan__type is-active">
                                <div class="plan__type-head">
                                    <h6>High Quality
                                        <!-- --> <br> <!-- -->likes
                                    </h6><i class="svg-blob svg-blob--blobPhone"><svg width="103" height="101" viewBox="0 0 103 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M71.3998 77.7153C76.3721 73.6779 79.2107 67.5775 79.0969 61.1735L78.5226 28.8568C78.3182 17.3537 68.8274 8.1944 57.3243 8.39882C45.8213 8.60325 36.662 18.094 36.8664 29.5971L36.9679 35.3104L37.3032 78.1227L53.6301 81.852C59.8743 83.2783 66.4275 81.7527 71.3998 77.7153Z" fill="url(#paint0_linear_47_1771)"></path>
                                            <path d="M71.3998 77.7153C76.3721 73.6779 79.2107 67.5775 79.0969 61.1735L78.5226 28.8568C78.3182 17.3537 68.8274 8.1944 57.3243 8.39882C45.8213 8.60325 36.662 18.094 36.8664 29.5971L36.9679 35.3104L37.3032 78.1227L53.6301 81.852C59.8743 83.2783 66.4275 81.7527 71.3998 77.7153Z" fill="#D1DAE1"></path>
                                            <path d="M51.353 19.5227C52.6932 22.2366 55.871 21.7274 56.7568 19.5005M59.4811 19.3311C60.8213 22.045 63.9991 21.5358 64.8849 19.309M49.9385 24.7844C55.7485 31.2932 62.2478 29.8758 66.1684 23.0757" stroke="#5F5F5F" stroke-width="1.13296" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <rect x="70.6993" y="19.1041" width="11.6769" height="20.7" rx="3.4811" transform="rotate(16.165 70.6993 19.1041)" fill="#5F5F5F"></rect>
                                            <rect opacity="0.4" x="67.1367" y="46.0889" width="12.2077" height="29.5156" rx="6.10386" transform="rotate(-8.3767 67.1367 46.0889)" fill="#5F5F5F"></rect>
                                            <rect x="69.2581" y="38.6539" width="12.2077" height="29.5156" rx="6.10386" transform="rotate(-8.3767 69.2581 38.6539)" fill="#D1DAE1"></rect>
                                        </svg></i>
                                </div>
                                <div class="plan__type-body">
                                    <ul>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>REAL</strong> likes from <br> <strong>REAL</strong> people</div>
                                            <div class="tooltip"><a>What’s the difference?</a></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Guaranteed <br> <strong>Instant Delivery</strong></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Option to <strong>split likes</strong> <br> on multiple pictures</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Includes video views</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>No password</strong> <br> required</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Fast Delivery <br> <strong>(gradual or instant)</strong></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>24/7</strong> support</div>
                                        </li>
                                    </ul>
                                </div>
                                <span class="plan__type-checkbox"><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="flex-col">
                            <div class="plan__type plan__type--premium" title="Currently unavailable">
                                <div class="plan__type-head">
                                    <h6>Premium
                                        <!-- --> <br> <!-- -->likes
                                    </h6><i class="svg-blob svg-blob--blobCrown"><svg width="183" height="198" viewBox="0 0 183 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M121.632 8.47342C121.632 7.20394 122.627 6.17374 123.851 6.17374C125.078 6.17374 126.07 7.20393 126.07 8.47379C126.07 9.74327 125.077 10.7735 123.851 10.7735C123.717 10.7735 123.585 10.7593 123.458 10.7352L116.669 32.0172C105.276 28.7114 99.3442 29.0452 89.2248 32.0168L82.4357 10.7348C82.3077 10.7586 82.1769 10.7731 82.0421 10.7731C80.8173 10.7731 79.8234 9.74328 79.8234 8.47342C79.8234 7.20394 80.8174 6.17374 82.0429 6.17374C83.2677 6.17374 84.2616 7.20356 84.2616 8.47342C84.2616 9.39557 83.7361 10.1883 82.9809 10.5554C85.2176 13.0129 90.8895 18.9211 93.7168 18.9211C98.702 18.9211 101.478 9.09237 102.495 4.55142C101.486 4.33476 100.727 3.409 100.727 2.29967C100.727 1.03019 101.722 0 102.947 0C104.173 0 105.166 1.02981 105.166 2.29967C105.166 3.40938 104.408 4.3352 103.399 4.55142C104.415 9.09275 107.192 18.9211 112.176 18.9211C115.004 18.9211 120.677 13.0129 122.913 10.5554C122.157 10.1883 121.632 9.3955 121.632 8.47342Z" fill="#FFB6AB"></path>
                                            <path d="M126.782 156.023C135.626 148.842 140.675 137.991 140.472 126.6L139.451 69.1171C139.087 48.6562 122.206 32.3642 101.745 32.7278C81.2842 33.0915 64.9921 49.973 65.3558 70.4338L65.5364 80.5963L66.1327 156.748L95.174 163.381C106.281 165.918 117.937 163.205 126.782 156.023Z" fill="url(#paint0_linear_441_3801)"></path>
                                            <path d="M126.782 156.023C135.626 148.842 140.675 137.991 140.472 126.6L139.451 69.1171C139.087 48.6562 122.206 32.3642 101.745 32.7278C81.2842 33.0915 64.9921 49.973 65.3558 70.4338L65.5364 80.5963L66.1327 156.748L95.174 163.381C106.281 165.918 117.937 163.205 126.782 156.023Z" fill="#FFB6AB"></path>
                                            <path d="M91.1235 52.5144C93.5073 57.3417 99.1599 56.4359 100.735 52.4749M105.581 52.1736C107.965 57.0009 113.618 56.0951 115.193 52.1342M88.6075 61.8735C98.9419 73.451 110.502 70.9298 117.476 58.8342" stroke="#FF553C" stroke-width="2.01524" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></i>
                                </div>
                                <div class="plan__type-body">
                                    <ul>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>REAL</strong> likes from <br> <strong>ACTIVE</strong> people</div>
                                            <div class="tooltip"><a>What’s the difference?</a></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><span><strong>Increased chance <br> to reach explore page</strong></span></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Guaranteed <br> <strong>Instant Delivery</strong></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Option to <strong>split likes</strong> <br> on multiple pictures</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Includes video views</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>No password</strong> <br> required</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Fast Delivery <br> <strong>(gradual or instant)</strong></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>

                                            </svg>

                                            <div><strong>24/7</strong> support</div>
                                        </li>
                                    </ul>
                                </div>
                                <span class="plan__type-checkbox"><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <h4><?php echo '+' . carbon_get_post_meta(get_the_ID(), 'melli_cart_title'); ?></h4>
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
                <div class="col-lg-12">
                    <div class="flex-row lg-cols-2 md-cols-2 sm-cols-2 xs-cols-2">
                        <div class="flex-col">
                            <div class="plan__type is-active">
                                <div class="plan__type-head">
                                    <h6>High Quality
                                        <!-- --> <br> <!-- -->likes
                                    </h6><i class="svg-blob svg-blob--blobPhone"><svg width="103" height="101" viewBox="0 0 103 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M71.3998 77.7153C76.3721 73.6779 79.2107 67.5775 79.0969 61.1735L78.5226 28.8568C78.3182 17.3537 68.8274 8.1944 57.3243 8.39882C45.8213 8.60325 36.662 18.094 36.8664 29.5971L36.9679 35.3104L37.3032 78.1227L53.6301 81.852C59.8743 83.2783 66.4275 81.7527 71.3998 77.7153Z" fill="url(#paint0_linear_47_1771)"></path>
                                            <path d="M71.3998 77.7153C76.3721 73.6779 79.2107 67.5775 79.0969 61.1735L78.5226 28.8568C78.3182 17.3537 68.8274 8.1944 57.3243 8.39882C45.8213 8.60325 36.662 18.094 36.8664 29.5971L36.9679 35.3104L37.3032 78.1227L53.6301 81.852C59.8743 83.2783 66.4275 81.7527 71.3998 77.7153Z" fill="#D1DAE1"></path>
                                            <path d="M51.353 19.5227C52.6932 22.2366 55.871 21.7274 56.7568 19.5005M59.4811 19.3311C60.8213 22.045 63.9991 21.5358 64.8849 19.309M49.9385 24.7844C55.7485 31.2932 62.2478 29.8758 66.1684 23.0757" stroke="#5F5F5F" stroke-width="1.13296" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <rect x="70.6993" y="19.1041" width="11.6769" height="20.7" rx="3.4811" transform="rotate(16.165 70.6993 19.1041)" fill="#5F5F5F"></rect>
                                            <rect opacity="0.4" x="67.1367" y="46.0889" width="12.2077" height="29.5156" rx="6.10386" transform="rotate(-8.3767 67.1367 46.0889)" fill="#5F5F5F"></rect>
                                            <rect x="69.2581" y="38.6539" width="12.2077" height="29.5156" rx="6.10386" transform="rotate(-8.3767 69.2581 38.6539)" fill="#D1DAE1"></rect>
                                        </svg></i>
                                </div>
                                <div class="plan__type-body">
                                    <ul>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>REAL</strong> likes from <br> <strong>REAL</strong> people</div>
                                            <div class="tooltip"><a>What’s the difference?</a></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Guaranteed <br> <strong>Instant Delivery</strong></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Option to <strong>split likes</strong> <br> on multiple pictures</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Includes video views</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>No password</strong> <br> required</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Fast Delivery <br> <strong>(gradual or instant)</strong></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>24/7</strong> support</div>
                                        </li>
                                    </ul>
                                </div>
                                <span class="plan__type-checkbox"><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="flex-col">
                            <div class="plan__type plan__type--premium" title="Currently unavailable">
                                <div class="plan__type-head">
                                    <h6>Premium
                                        <!-- --> <br> <!-- -->likes
                                    </h6><i class="svg-blob svg-blob--blobCrown"><svg width="183" height="198" viewBox="0 0 183 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M121.632 8.47342C121.632 7.20394 122.627 6.17374 123.851 6.17374C125.078 6.17374 126.07 7.20393 126.07 8.47379C126.07 9.74327 125.077 10.7735 123.851 10.7735C123.717 10.7735 123.585 10.7593 123.458 10.7352L116.669 32.0172C105.276 28.7114 99.3442 29.0452 89.2248 32.0168L82.4357 10.7348C82.3077 10.7586 82.1769 10.7731 82.0421 10.7731C80.8173 10.7731 79.8234 9.74328 79.8234 8.47342C79.8234 7.20394 80.8174 6.17374 82.0429 6.17374C83.2677 6.17374 84.2616 7.20356 84.2616 8.47342C84.2616 9.39557 83.7361 10.1883 82.9809 10.5554C85.2176 13.0129 90.8895 18.9211 93.7168 18.9211C98.702 18.9211 101.478 9.09237 102.495 4.55142C101.486 4.33476 100.727 3.409 100.727 2.29967C100.727 1.03019 101.722 0 102.947 0C104.173 0 105.166 1.02981 105.166 2.29967C105.166 3.40938 104.408 4.3352 103.399 4.55142C104.415 9.09275 107.192 18.9211 112.176 18.9211C115.004 18.9211 120.677 13.0129 122.913 10.5554C122.157 10.1883 121.632 9.3955 121.632 8.47342Z" fill="#FFB6AB"></path>
                                            <path d="M126.782 156.023C135.626 148.842 140.675 137.991 140.472 126.6L139.451 69.1171C139.087 48.6562 122.206 32.3642 101.745 32.7278C81.2842 33.0915 64.9921 49.973 65.3558 70.4338L65.5364 80.5963L66.1327 156.748L95.174 163.381C106.281 165.918 117.937 163.205 126.782 156.023Z" fill="url(#paint0_linear_441_3801)"></path>
                                            <path d="M126.782 156.023C135.626 148.842 140.675 137.991 140.472 126.6L139.451 69.1171C139.087 48.6562 122.206 32.3642 101.745 32.7278C81.2842 33.0915 64.9921 49.973 65.3558 70.4338L65.5364 80.5963L66.1327 156.748L95.174 163.381C106.281 165.918 117.937 163.205 126.782 156.023Z" fill="#FFB6AB"></path>
                                            <path d="M91.1235 52.5144C93.5073 57.3417 99.1599 56.4359 100.735 52.4749M105.581 52.1736C107.965 57.0009 113.618 56.0951 115.193 52.1342M88.6075 61.8735C98.9419 73.451 110.502 70.9298 117.476 58.8342" stroke="#FF553C" stroke-width="2.01524" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></i>
                                </div>
                                <div class="plan__type-body">
                                    <ul>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>REAL</strong> likes from <br> <strong>ACTIVE</strong> people</div>
                                            <div class="tooltip"><a>What’s the difference?</a></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><span><strong>Increased chance <br> to reach explore page</strong></span></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Guaranteed <br> <strong>Instant Delivery</strong></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Option to <strong>split likes</strong> <br> on multiple pictures</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Includes video views</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div><strong>No password</strong> <br> required</div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                            </svg>
                                            <div>Fast Delivery <br> <strong>(gradual or instant)</strong></div>
                                        </li>
                                        <li><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>

                                            </svg>

                                            <div><strong>24/7</strong> support</div>
                                        </li>
                                    </ul>
                                </div>
                                <span class="plan__type-checkbox"><svg class="svg-icon svg-icon--planCheck" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.27434 11.0391L0 6.96866L1.50311 5.20007L4.67896 7.65149L9.32546 0.561035L11.3512 1.76532L5.27434 11.0391Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <h4><?php echo '+' . carbon_get_post_meta(get_the_ID(), 'melli_cart_title'); ?></h4>
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
