<?php 
/* Template Name: Full Width Template */   
get_header();
?>
<?php
    echo get_field('about_us');
    
    wp_nav_menu( array(
    'theme_location' => 'my-custom-menu',
    'container_class' => 'custom-menu-class' ) );

?>
<?php get_footer(); ?>