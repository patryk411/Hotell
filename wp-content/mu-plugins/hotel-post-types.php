<?php

function hotel_post_type() {

    register_post_type('offer', array(
        'supports' => array('title','editor', 'excerpt', 'thumbnail'),
       'show_in_rest' => true,
       'rewrite' => array('slug' => 'offers'),
       'has_archive' => true,
       'public' => true,
       'labels' => array(
           'name' => 'Offers',
           'add_new_item' => 'Add New Offer',
           'edit_item' => 'Edit Offer',
           'all_items' => 'All Offers',
           'singular_name' => 'Offer'
       ),
        'menu_icon' => 'dashicons-buddicons-activity'
   ));

    register_post_type('team', array(
        'supports' => array('title','editor', 'excerpt', 'thumbnail'),
       'show_in_rest' => true,
       'rewrite' => array('slug' => 'teams'),
       'has_archive' => true,
       'public' => true,
       'labels' => array(
           'name' => 'Teams',
           'add_new_item' => 'Add New Team',
           'edit_item' => 'Edit Team',
           'all_items' => 'All Teams',
           'singular_name' => 'Team'
       ),
        'menu_icon' => 'dashicons-buddicons-buddypress-logo'
   ));

}

add_action('init', 'hotel_post_type');

?>