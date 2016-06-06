<?php

add_action( 'init', 'mlz_daily_quote' );
function mlz_daily_quote() {
    $labels = array(
        'name'               => __( 'Daily Quotes' ),
        'singular_name'      => __( 'Daily Quote' ),
        'menu_name'          => __( 'Daily Quotes' ),
        'name_admin_bar'     => __( 'Daily Quote' ),
        'add_new'            => __( 'Add New', 'daily_quote' ),
        'add_new_item'       => __( 'Add New Quote' ),
        'new_item'           => __( 'New Quote' ),
        'edit_item'          => __( 'Edit Quote' ),
        'view_item'          => __( 'View Quote' ),
        'all_items'          => __( 'All Quotes' ),
        'search_items'       => __( 'Search Quotes' ),
        'parent_item_colon'  => __( 'Parent Quotes:' ),
        'not_found'          => __( 'No quotes found.' ),
        'not_found_in_trash' => __( 'No quotes found in Trash.' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Management of Daily Quotes, by Dale.' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'daily_quote' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title' )
    );

    register_post_type( 'daily_quote', $args );
}

?>