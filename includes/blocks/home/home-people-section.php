<?php 

$hps_text=get_field('hps_text');
$hps_carousels=get_field('hps_carousels');

?>

<!-- people -->
      <div class="people">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <?php echo $hps_text;?>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide people_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        
                     <?php foreach ($hps_carousels as $key => $hps_carousel):?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="<?php echo $key == 0 ? 'active' : '';?>"></li>
                        <?php
                         endforeach;?>
                     </ol>

                     <div class="carousel-inner">
                        <?php foreach ($hps_carousels as $key => $hps_carousel):?>
                        <div class="carousel-item <?php echo $key == 0 ? 'active' : '';?>">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                       <div class="test_box">
                                          <h4>Duis aute</h4>
                                            <p>
                                            <?php echo $hps_carousel['carousel_text'];
                                            ?>
                                            </p>
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