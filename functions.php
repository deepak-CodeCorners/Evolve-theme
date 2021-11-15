<?php

function wpdocs_theme_name_scripts() {

    wp_enqueue_script( 'script-1', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-2', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-3', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-4', get_template_directory_uri() . '/js/jquery-3.0.0.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-5', get_template_directory_uri() . '/js/plugin.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-6', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-7', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-8', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', array(),'1.0.0', true );

    wp_enqueue_style( 'style-name-1', get_template_directory_uri().'/css/bootstrap.min.css', array(), '', "all");
    wp_enqueue_style( 'style-name-2', get_template_directory_uri().'/css/style.css', array(), '', "all");
    wp_enqueue_style( 'style-name-3', get_template_directory_uri().'/css/responsive.css', array(), '',"all");
    wp_enqueue_style( 'style-name-4', get_template_directory_uri().'/css/jquery.mCustomScrollbar.min.css', array(), 'all');
    wp_enqueue_style( 'style-name-4','https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array(), 'all');
    wp_enqueue_style( 'style-name-4','https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', array(), 'all');   
    
   }
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

function custom_new_menu(){
    register_nav_menu('primary-menu',_('My Custom Menu'));
}
add_action('init','custom_new_menu');
?>
