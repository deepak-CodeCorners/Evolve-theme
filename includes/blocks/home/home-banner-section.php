<?php 

$hbs_text=get_field('hbs_text');
$hbs_button=get_field('hbs_button');
$hbs_image=get_field('hbs_image');

?>
<!-- banner -->
<section class="banner_main">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="text-bg">
                     <div class="padding_lert">
                        <h1>GYM AND FITNESS</h1>
                        <span>Landing Page 2019</span>
                        <p><?php echo $hbs_text; ?></p>
                        <a class="read_more" href="<?php     echo $hbs_button['url'];?>">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="text-img">
                     <figure>
                     <?php
                     if(!empty($hbs_image)){
                         ?>
                         <img src="<?php echo $hbs_image;?>" alt="#"/>
                        <?php
                     }
                     ?> 
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->