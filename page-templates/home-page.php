<?php
// Template Name: Home page Template   
get_header();
    $image = get_field('image');
    $Text=get_field('text');
    $button=get_field('button');

    $dc_text=get_field('dc_text');
    $dc_link=get_field('dc_link');

    $req_text=get_field('req_text');
    $req_image=get_field('req_image');

    $people_text=get_field('people_text');
    $carousel_text=get_field('carousel_text');
    //$Carousel_item=get_field('carousel-item');
   
    $fs_text = get_field('fs_text');
    $fs_features = get_field('fs_features');
    $fs_link = get_field('fs_link');
?>
   <!-- Banner-main -->
      <section class="banner_main">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="text-bg">
                     <div class="padding_lert">
                        <h1>GYM AND FITNESS</h1>
                        <span>Landing Page 2019</span>
                        <p><?php echo $Text;?></p>
                        <a class="read_more" href="<?php echo $button['url']; ?>">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="text-img">
                     <figure>
                     <?php if(!empty($image)){
                          ?>
                          <img src="<?php echo $image;?>">
                          <?php
                          }?> 
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
       <!-- Banner end -->
       <!-- features field -->
       <div class="Features">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <span><?php echo $fs_text;?></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php foreach($fs_features as $feature): ?>
                  <div class="col-md-4">
                     <div class="Our_box">
                        <i><img src="<?php echo $feature['image']; ?>" alt="#"/></i>
                        <h4><?php echo $feature['text']; ?></h4>
                     </div>
                  </div>
               <?php endforeach; ?>
               <div class="col-md-12">
                  <a class="read_more" href="<?php echo $fs_link['url'] ?>">Read More</a>
               </div>
            </div>
         </div>
      </div>
       <!-- Discount field -->
      <div class="discount">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <span><?php echo $dc_text;?></span>
                     <a class="read_more" href='<?php echo $dc_link['url'] ?>'>Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Discount field end -->
      <!-- Request field -->
      <div class="request">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <span><?php echo $req_text; ?></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 main_form">
                  <div class="row">
                     <?php 
                     echo do_shortcode ('[contact-form-7 id="239" title="Contact form 1"]');
                     ?>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="back_img">
                     <figure>
                        <?php 
                         if(!empty($req_image)){
                           ?>
                           <img src="<?php echo $req_image;?>">
                           <?php
                           }
                          ?>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Request field -->
      <!-- people -->
      <div class="people">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                    <span><?php echo $people_text; ?></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide people_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">

                     <?php foreach($carousel_text as $key => $carousel):?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="<?php echo $key == 0 ? 'active' : '';?>"></li>
                     <?php endforeach; ?>
                     </ol>
                     <div class="carousel-inner">
                     <?php foreach($carousel_text as $key => $carousel):?>
                        <div class="carousel-item <?php echo $key == 0 ? 'active' : '';?>">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                       <div class="test_box">
                                          <h4>Duis aute</h4>
                                          <p><?php echo $carousel['inner_text'] ; ?></p>   
                                       </div>
                                    </div> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php endforeach;?>
                     </div> 
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end people -->
<?php get_footer(); ?>