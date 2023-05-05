<?php

add_theme_support('post-formats',['aside', 'image', 'video', 'quote', 'gallery']);

add_theme_support('post-thumbnails');


//menu setup
function custom5_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init','custom5_theme_setup');



function food_post_type()
{
    $labels = [
        'name' => 'Foods',
        'singular_name' => 'Food',
        'add_new' => 'Add food item',
        'all_items' => 'All foods',
        'add_new_item' => 'Edit food Item',
        'new_item' => 'New food item',
        'view_item' => 'View item',
        'search_item' => 'Search food',
        'not_found' => 'No food item found',
        'not_found_in_trash' => ' No food items found in trash',
        'parent_item_colon' => 'Parent Item'
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability' => 'post',
        'hierachichal' => false,
        'supports' => [
            'title', 'thumbnail', 'editor', 'excerpt', 'custom-fields'

        ],
        'taxonomies' => [
            'category',
            'post_tag',
            'menu_position' => 7
        ],
    ];
    register_post_type('food', $args);
}
add_action('init', 'food_post_type');
