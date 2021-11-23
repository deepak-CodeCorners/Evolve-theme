<?php 

$hrs_text=get_field('hrs_text');
$hrs_image=get_field('hrs_image');

?>
      <!-- request -->
      <div class="request">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <?php echo $hrs_text; ?>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 main_form">
                  <div class="row">
                     <?php 
                        echo do_shortcode('[contact-form-7 id="409" title="Home Request Form"]');
                     ?>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="back_img">
                    <figure>
                        <?php
                         if(!empty($hrs_image)){ 
                            ?>
                         <img src="<?php echo $hrs_image;?>"/>
                           <?php
                         }
                         ?>
                    </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end request -->