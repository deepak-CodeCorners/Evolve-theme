<?php

function wpdocs_theme_name_scripts() {

    wp_enqueue_script( 'script-1', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-2', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-3', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-4', get_template_directory_uri() . '/js/jquery-3.0.0.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-5', get_template_directory_uri() . '/js/plugin.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-6', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-7', get_template_directory_uri() . '/js/custom.js', array(), '', true );
    

    wp_enqueue_style( 'style-name-1', get_template_directory_uri().'/css/bootstrap.min.css', array(), '', "screen"  );
    wp_enqueue_style( 'style-name-2', get_template_directory_uri().'/css/style.css', array(), '', "screen" );
    wp_enqueue_style( 'style-name-3', get_template_directory_uri().'/css/responsive.css', array(), '',"screen"  );
    wp_enqueue_style( 'style-name-5', get_template_directory_uri().'/css/jquery.mCustomScrollbar.min.css', array(), '', "screen");
    
    
   }

add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
?>
