<?php /* Template name: proposta */?>
<?php get_header(); ?>

  <!-- Contact Section -->
  <section class="page-section mt-4" id="contact">
    <div ng-controller="HomeCtrl" class="container mt-4">
    <h1 class="text-center text-primary mb-2 mt-4">PROPOSTAS</h1>

      <!-- Contact Section Form -->
      <div class="row justify-content-md-center ">
        <div class="col-auto mx-auto  justify-content-md-center text-center ">

        <?php query_posts('post_type=propostas&posts_per_page=-1'); ?>
                        <?php $quant = 0; if(have_posts()): while(have_posts()): the_post(); $quant = $quant +1; ?>
                        
                        <?php if($quant==1):?>
                        <h4 class="text-color text-justify"><?php the_content();?></h4>

                        <div class="card mb-4  mt-0 pt-0 mb-0 pb-0 border-0 rounded-0 " style="max-width: 100%; margin-bottom:0px !important;">
                            <div class="row no-gutters  mt-0 pt-0 mb-0 pb-0 border-0 rounded-0 ">
                                <div class="col-md-4 text-center" style="background: #25bcbd;">
                                <img  class="card-img img-fluid img-thumbnail pt-4 mt-0 pt-0 mb-0 pb-0 border-0 rounded-0  " style="width: 200px; background: #25bcbd;"  url="<?php echo the_post_thumbnail('medium'); ?>
                                <div class="card-body "  style=" background: <?php /*the_field('get_cor')*/ echo "#25bcbd;"; ?>">
                                <h5 class="card-text text-center text-white" ><?php echo the_title();?></h5>
                                </div>  
                              </div>
                                <div class="col-md-8 " style=" background: <?php /*the_field('get_cor')*/ echo "#eceeed;"; ?>">
                                <div class="card-body text-white h-100 card-proposta">
                                <h5 class="card-text text-justify text-color  "><?php echo the_excerpt();?></h5>
                                </div>
                                </div>
                            </div>
                            </div>
                              <?php else: ?>
                              
                              <a href="<?= the_permalink();?>" ><img  class="card-img text-center img-fluid img-thumbnail pt-4 mt-4 pt-0 mb-0 pb-0 border-0 rounded-0  " style="width: 200px; "  url="<?php echo the_post_thumbnail('medium'); ?></a>
                            <?php endif; ?>


                        <?php endwhile; ?>
                        <?php else: ?>
                        <?php endif ?>
                    <?php wp_reset_query();?>

      
    </div>



        </div>
      </div>

    </div>

  
<?php get_footer(); ?>