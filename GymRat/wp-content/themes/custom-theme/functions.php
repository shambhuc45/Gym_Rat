<?php
// Styles
function my_custom_theme_style(){
    wp_enqueue_style('main_style',get_stylesheet_uri());
    wp_enqueue_style('my-css',get_stylesheet_uri());
}
add_action("wp_enqueue_scripts","my_custom_theme_style");


function my_theme_scripts()
{
//script
    wp_enqueue_script( 'my-js', get_template_directory_uri().'/assets/js/script.js',array(),'1.1',true);
}
add_action("wp_enqueue_scripts","my_theme_scripts");
function register_custom_menu(){
    // menu register code
    register_nav_menus(
        array(
            'primary-menu'=>__('primary Menu'),
            'footer-menu'=>__('footer Menu')
        )
        );
}
add_action('init','register_custom_menu');

// To Appear Featured Image Section
add_theme_support('post-thumbnails');

// To Appear Header Image/Logo
add_theme_support('custom-header');


add_post_type_support('page', 'excerpt');



