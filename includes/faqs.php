<?php 
if(! function_exists( 'melli_cpt_faqs' ) ) {

add_action( 'init', 'melli_cpt_faqs' );
/**
 * Register Post Type POST Faq
 *
 * @return void
 **/
    function melli_cpt_faqs() {
        $labels = array(
            'name'               => __( 'FAQ', 'melli' ),
            'singular_name'      => __( 'FAQ', 'melli' ),
            'add_new'            => __( 'Add New FAQ', 'melli' ),
            'add_new_item'       => __( 'Add New FAQ', 'melli' ),
            'edit_item'          => __( 'Edit FAQ', 'melli' ),
            'new_item'           => __( 'New FAQ', 'melli' ),
            'view_item'          => __( 'View FAQ', 'melli' ),
            'search_items'       => __( 'Search FAQ', 'melli' ),
            'not_found'          => __( 'Not found FAQ', 'melli' ),
            'not_found_in_trash' => __( 'Not found FAQ in trash', 'melli' ),
        );
        $args   = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_rest'       => true, // Adds gutenberg support.
            'query_var'          => true,
            'rewrite'            => array(
                'slug'       => _x( 'faq', 'slug', 'melli' ),
                'with_front' => true,
            ),
            'has_archive'        => true,
            'capability_type'    => 'post',
            'hierarchical'       => false,
            'menu_position'      => 5,
            'menu_icon'          => 'dashicons-book', // https://developer.wordpress.org/resource/dashicons/.
            'supports'           => array( 'title', 'editor', 'revisions' ),
        );
        register_post_type( 'faqs', $args );
    }
}