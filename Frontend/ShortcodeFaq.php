<?php

function melli_faqs_likes_loop_shortcode($atts, $content = null)
{

    shortcode_atts(array(
        'post_type' => 'faqs',
        'posts_per_page' => -1,
    ), $atts);

    $the_query = new WP_Query(
        [
            'post_type' => 'faqs',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'faqpage',
                    'terms' => 'likes',
                    'field' => 'slug',
                    'include_children' => true,
                    'operator' => 'IN'
                )
            ),

        ]
    );
    ob_start();
?>
    <div class="melli-faqs">
        <div class="container">
            <div class="row">
                <div class="questions">
                    <div class="melli-faq-top-arrows">
<!-- //                      <img src="<?php // echo MELLI_PLUGIN_URL . 'assets/images/blogDesign.png' ?>" alt=""> -->
                    </div>
                    <ul>
                        <?php
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) :
                                $the_query->the_post(); ?>
                                <li>
                                    <div class="question"><svg class="svg-icon svg-icon--boxQuestion" width="51" height="50" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="26" cy="27" r="16" fill="#FF553C"></circle>
                                            <path d="M50.5945 23.4937L48 19.0138V14.0539C48 12.9337 47.4054 11.9207 46.4327 11.334L42.0544 8.82727L39.4057 4.45331C38.865 3.49349 37.784 2.90682 36.649 2.90682H31.4596L27.027 0.400119C26.0542 -0.133373 24.8107 -0.133373 23.8379 0.400119L19.4053 2.90682H14.3242C13.1888 2.90682 12.1622 3.49351 11.5675 4.45331L9.02696 8.77327L4.48653 11.3332C3.51375 11.8667 2.91915 12.9333 2.91915 14.0531V19.1734L0.43248 23.4402C0.162133 23.9201 0 24.4536 0 24.9867C0 25.5202 0.162133 26.0533 0.43248 26.5332L2.91915 30.8V35.9203C2.91915 37.0405 3.51377 38.0534 4.48653 38.6402L9.02696 41.2001L11.5675 45.5201C12.1082 46.4799 13.1892 47.0666 14.3242 47.0666H19.4053L23.8379 49.5733C24.3243 49.84 24.8651 50 25.4053 50C25.946 50 26.4863 49.84 26.9727 49.5733L31.4053 47.0666L36.7029 47.0673C37.8382 47.0673 38.8648 46.4806 39.4595 45.5208L42.054 41.0941L46.4323 38.5874C47.4051 38.0539 47.9997 36.9873 47.9997 35.8675V30.9076L50.5942 26.4277C51.1352 25.6271 51.1352 24.4536 50.5945 23.4938L50.5945 23.4937ZM27.5676 35.8139H23.5135V32.4005H27.5676V35.8139ZM27.6215 27.8138V29.787H23.5135V24.0805H25.5676C27.2432 24.0805 28.6489 22.6939 28.6489 21.0403C28.6489 19.387 27.2436 18 25.5676 18C23.892 18 22.4864 19.3866 22.4864 21.0403H18.3783C18.3783 17.147 21.6218 13.9469 25.5675 13.9469C29.5134 13.9469 32.7567 17.1471 32.7567 21.0403C32.7563 24.2405 30.5944 26.9603 27.6213 27.8138H27.6215Z" fill="#FFB6AB"></path>
                                        </svg>
                                        <div class="question__inner">
                                            <h3 class="question__title"><?php the_title(); ?></h3>
                                            <div class="question__entry">
                                           <?php the_content(); ?>
											</div><button type="button" class="btn-more question__btn"><span></span></button>
                                        </div>
                                    </div>
                                </li>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata();
?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
    return ob_get_clean();
}

/**
 * Views
 *
 * @param [type] $atts
 * @param [type] $content
 * @return HTML
 */


function melli_faqs_views_loop_shortcode($atts, $content = null)
{

    shortcode_atts(array(
        'post_type' => 'faqs',
        'posts_per_page' => -1,
    ), $atts);

    $the_query = new WP_Query(
        [
            'post_type' => 'faqs',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'faqpage',
                    'terms' => 'views',
                    'field' => 'slug',
                    'include_children' => true,
                    'operator' => 'IN'
                )
            ),

        ]
    );
    ob_start();
?>
    <div class="melli-faqs">
        <div class="container">
            <div class="row">
                <div class="questions">
                    <div class="melli-faq-top-arrows">
<!-- //                      <img src="<?php // echo MELLI_PLUGIN_URL . 'assets/images/blogDesign.png' ?>" alt=""> -->
                    </div>
                    <ul>
                        <?php
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) :
                                $the_query->the_post(); ?>
                                <li>
                                    <div class="question"><svg class="svg-icon svg-icon--boxQuestion" width="51" height="50" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="26" cy="27" r="16" fill="#FF553C"></circle>
                                            <path d="M50.5945 23.4937L48 19.0138V14.0539C48 12.9337 47.4054 11.9207 46.4327 11.334L42.0544 8.82727L39.4057 4.45331C38.865 3.49349 37.784 2.90682 36.649 2.90682H31.4596L27.027 0.400119C26.0542 -0.133373 24.8107 -0.133373 23.8379 0.400119L19.4053 2.90682H14.3242C13.1888 2.90682 12.1622 3.49351 11.5675 4.45331L9.02696 8.77327L4.48653 11.3332C3.51375 11.8667 2.91915 12.9333 2.91915 14.0531V19.1734L0.43248 23.4402C0.162133 23.9201 0 24.4536 0 24.9867C0 25.5202 0.162133 26.0533 0.43248 26.5332L2.91915 30.8V35.9203C2.91915 37.0405 3.51377 38.0534 4.48653 38.6402L9.02696 41.2001L11.5675 45.5201C12.1082 46.4799 13.1892 47.0666 14.3242 47.0666H19.4053L23.8379 49.5733C24.3243 49.84 24.8651 50 25.4053 50C25.946 50 26.4863 49.84 26.9727 49.5733L31.4053 47.0666L36.7029 47.0673C37.8382 47.0673 38.8648 46.4806 39.4595 45.5208L42.054 41.0941L46.4323 38.5874C47.4051 38.0539 47.9997 36.9873 47.9997 35.8675V30.9076L50.5942 26.4277C51.1352 25.6271 51.1352 24.4536 50.5945 23.4938L50.5945 23.4937ZM27.5676 35.8139H23.5135V32.4005H27.5676V35.8139ZM27.6215 27.8138V29.787H23.5135V24.0805H25.5676C27.2432 24.0805 28.6489 22.6939 28.6489 21.0403C28.6489 19.387 27.2436 18 25.5676 18C23.892 18 22.4864 19.3866 22.4864 21.0403H18.3783C18.3783 17.147 21.6218 13.9469 25.5675 13.9469C29.5134 13.9469 32.7567 17.1471 32.7567 21.0403C32.7563 24.2405 30.5944 26.9603 27.6213 27.8138H27.6215Z" fill="#FFB6AB"></path>
                                        </svg>
                                        <div class="question__inner">
                                            <h3 class="question__title"><?php the_title(); ?></h3>
                                            <div class="question__entry">
                                           <?php the_content(); ?>
											</div><button type="button" class="btn-more question__btn"><span></span></button>
                                        </div>
                                    </div>
                                </li>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
    return ob_get_clean();
}

/**
 * Followers
 *
 * @param [type] $atts
 * @param [type] $content
 * @return HTML 
 */

function melli_faqs_followers_loop_shortcode($atts, $content = null)
{

    shortcode_atts(array(
        'post_type' => 'faqs',
        'posts_per_page' => -1,
    ), $atts);

    $the_query = new WP_Query(
        [
            'post_type' => 'faqs',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'faqpage',
                    'terms' => 'followers',
                    'field' => 'slug',
                    'include_children' => true,
                    'operator' => 'IN'
                )
            ),

        ]
    );
    ob_start();
?>
    <div class="melli-faqs">
        <div class="container">
            <div class="row">
                <div class="questions">
                    <div class="melli-faq-top-arrows">
<!-- //                      <img src="<?php // echo MELLI_PLUGIN_URL . 'assets/images/blogDesign.png' ?>" alt=""> -->
                    </div>
                    <ul>
                        <?php
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) :
                                $the_query->the_post(); ?>
                                <li>
                                    <div class="question"><svg class="svg-icon svg-icon--boxQuestion" width="51" height="50" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="26" cy="27" r="16" fill="#FF553C"></circle>
                                            <path d="M50.5945 23.4937L48 19.0138V14.0539C48 12.9337 47.4054 11.9207 46.4327 11.334L42.0544 8.82727L39.4057 4.45331C38.865 3.49349 37.784 2.90682 36.649 2.90682H31.4596L27.027 0.400119C26.0542 -0.133373 24.8107 -0.133373 23.8379 0.400119L19.4053 2.90682H14.3242C13.1888 2.90682 12.1622 3.49351 11.5675 4.45331L9.02696 8.77327L4.48653 11.3332C3.51375 11.8667 2.91915 12.9333 2.91915 14.0531V19.1734L0.43248 23.4402C0.162133 23.9201 0 24.4536 0 24.9867C0 25.5202 0.162133 26.0533 0.43248 26.5332L2.91915 30.8V35.9203C2.91915 37.0405 3.51377 38.0534 4.48653 38.6402L9.02696 41.2001L11.5675 45.5201C12.1082 46.4799 13.1892 47.0666 14.3242 47.0666H19.4053L23.8379 49.5733C24.3243 49.84 24.8651 50 25.4053 50C25.946 50 26.4863 49.84 26.9727 49.5733L31.4053 47.0666L36.7029 47.0673C37.8382 47.0673 38.8648 46.4806 39.4595 45.5208L42.054 41.0941L46.4323 38.5874C47.4051 38.0539 47.9997 36.9873 47.9997 35.8675V30.9076L50.5942 26.4277C51.1352 25.6271 51.1352 24.4536 50.5945 23.4938L50.5945 23.4937ZM27.5676 35.8139H23.5135V32.4005H27.5676V35.8139ZM27.6215 27.8138V29.787H23.5135V24.0805H25.5676C27.2432 24.0805 28.6489 22.6939 28.6489 21.0403C28.6489 19.387 27.2436 18 25.5676 18C23.892 18 22.4864 19.3866 22.4864 21.0403H18.3783C18.3783 17.147 21.6218 13.9469 25.5675 13.9469C29.5134 13.9469 32.7567 17.1471 32.7567 21.0403C32.7563 24.2405 30.5944 26.9603 27.6213 27.8138H27.6215Z" fill="#FFB6AB"></path>
                                        </svg>
                                        <div class="question__inner">
                                            <h3 class="question__title"><?php the_title(); ?></h3>
                                            <div class="question__entry">
                                           <?php the_content(); ?>
											</div><button type="button" class="btn-more question__btn"><span></span></button>
                                        </div>
                                    </div>
                                </li>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
    return ob_get_clean();
}

add_action('init', function(){
        add_shortcode('mellifaqslikes', 'melli_faqs_likes_loop_shortcode');
        add_shortcode('mellifaqsviews', 'melli_faqs_views_loop_shortcode');
        add_shortcode('mellifaqsfollowers', 'melli_faqs_followers_loop_shortcode');    
});

