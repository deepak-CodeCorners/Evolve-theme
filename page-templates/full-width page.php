<?php 
/* Template Name: Full Width Template */   
get_header();
?>
<?php
    echo get_field('about_us');
    $image = get_field('image');
// echo "<pre>";
// print_r($image); 
if( !empty( $image ) ): ?>
    <img src="<?php echo $image; ?>" />
<?php endif; ?>

<?php get_footer(); ?>