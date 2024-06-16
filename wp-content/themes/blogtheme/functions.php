<?php


function blogs()
{
    // css file
    

    wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'blogs_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style( 'blogs_extra_styles', get_theme_file_uri('/build/index.css'),null,'1.0');

    wp_enqueue_script('appear', get_theme_file_uri().'/build/index.js',array(),'1.0.0',true);
    
}
add_action( 'wp_enqueue_scripts', 'blogs' );


function blog_features() {
    register_nav_menu('headerMenuLocation','Header menu Location');
    register_nav_menu('footerLocationOne','Footer Location One');
    register_nav_menu('footerLocationTwo','Footer Location Two');
    add_theme_support('title-tag');
    
}

add_action( 'after_setup_theme', 'blog_features' );

?>