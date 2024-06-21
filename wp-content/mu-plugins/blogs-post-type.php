<?php 

function blog_post_type() {
    register_post_type('event', array(
        // 'show_in_rest' => true,
        // 'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
        // 'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event',
        ),
        'menu_icon' => 'dashicons-calendar',
    ));
    // register_post_type('event',array(
    //     'show_in_rest' => true,
    //     'supports' => array('title','editor','excerpt','custom-fields'),
    //     'rewrite'=>array('slug'=>'events'),
    //     'has_archive'=>true,
    //     'public' =>true,
    //     'show_in_rest' => true,
    //     'labels' => array(
    //         'name'=> 'Events',
    //         'add_new_item'=> 'Add New Event',
    //         'edit_item' =>'Edit Event',
    //         'all_items' => 'All Events',
    //         'singular_name'=>'Event',
    //     ),
    //     'menu_icon'=>'dashicons-calendar', 

    // ));

    // Professor  post type
    register_post_type('program',array(
        'show_in_rest' => true,
        'supports' => array('title','editor','custom-fields'),
        'rewrite'=>array('slug'=>'programs'),
        'has_archive'=>true,
        'public' =>true,
        'show_in_rest' => true,
        'labels' => array(
            'name'=> 'Programs',
            'add_new_item'=> 'Add New Programs',
            'edit_item' =>'Edit Programs',
            'all_items' => 'All Programs',
            'singular_name'=>'Programs',
        ),
        'menu_icon'=>'dashicons-awards', 

    ));


// Professor  post type
    register_post_type('professor',array(
        'show_in_rest' => true,
        'supports' => array('title','editor','excerpt','custom-fields'),
        'public' =>true,
        'show_in_rest' => true,
        'labels' => array(
            'name'=> 'Professors',
            'add_new_item'=> 'Add New Professor',
            'edit_item' =>'Edit Professor',
            'all_items' => 'All Professor',
            'singular_name'=>'Professor',
        ),
        'menu_icon'=>'dashicons-welcome-learn-more', 

    ));
}
add_action( 'init', 'blog_post_type' ); ?>