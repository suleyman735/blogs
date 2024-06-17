<?php function blog_post_type() {
    register_post_type('event',array(
        'show_in_rest' => true,
        'supports' => array('title','editor','excerpt','custom-fields'),
        'rewrite'=>array('slug'=>'events'),
        'has_archive'=>true,
        'public' =>true,
        'show_in_rest' => true,
        'labels' => array(
            'name'=> 'Events',
            'add_new_item'=> 'Add New Event',
            'edit_item' =>'Edit Event',
            'all_items' => 'All Events',
            'singular_name'=>'Event',
        ),
        'menu_icon'=>'dashicons-calendar', 

    ));
}
add_action( 'init', 'blog_post_type' ); ?>