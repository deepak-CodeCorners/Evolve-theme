<?php

$hgs_text=get_field('hgs_text');
$hgs_grids=get_field('hgs_grids');
$hgs_button=get_field('hgs_button');

?>
<!-- features -->
      <div class="Features">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                    <?php echo  $hgs_text; ?>
                  </div>
               </div>
            </div>
            <div class="row">
            <?php foreach($hgs_grids as $hgs_grid):
            ?>
               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img src="<?php echo $hgs_grid['hgs_image'] ;?>" alt="#"/></i>
                     <h4><?php echo $hgs_grid['hgs_inner_text']?></h4>
                  </div>
                </div>
                <?php endforeach;?>
               <div class="col-md-12">
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end Features -->