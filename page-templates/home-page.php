<?php
// Template Name: Home page Template   

    $image = get_field('image');
    ?>
   <img src="<?php echo $image;?>">
      
    <?php 
    echo get_field('text');
    get_field('button');
    

?>
      <section class="banner_main">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="text-bg">
                     <div class="padding_lert">
                        <h1>GYM AND FITNESS</h1>
                        <span>Landing Page 2019</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it</p>
                        <a class="read_more" href="#">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="text-img">
                     <figure><img src="<?php echo $image; ?>" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php get_footer(); ?>