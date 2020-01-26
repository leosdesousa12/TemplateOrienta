<?php /* Template name: equipe */?>
<?php get_header(); ?>


  <!-- Contact Section -->
  <section class="page-section mt-4" id="contact">
    <div class="container mt-4">
    <h1 class="text-center text-primary mb-2 mt-4 font-weight-normal ">EQUIPE</h1>

      <!-- Contact Section Form -->
      <div class="row justify-content-md-center ">
        <div class="col-auto mx-auto  justify-content-md-center ">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <?php query_posts('post_type=equipe&post_per_page=-1'); ?>
                        <?php $quant = 0; if(have_posts()): while(have_posts()): the_post();  $quant++?>

                        <?php if($quant %2 !=0 ):  ?>
                        <div class="card mb-4  mt-0 pt-0 mb-0 pb-0 border-0 rounded-0 " style="max-width: 100%; margin-bottom:0px !important;">
                            <div class="row no-gutters  mt-0 pt-0 mb-0 pb-0 border-0 rounded-0 ">
                                <div class="col-md-4">
                                <img  class="card-img  mt-0 pt-0 mb-0 pb-0 border-0 rounded-0 "  url="<?php echo the_post_thumbnail('full'); ?>
                                </div>
                                <div class="col-md-8" style=" background: <?php the_field('get_cor') ?>">
                                <div class="card-body text-white">
                                <h5 class="card-text text-left"><?php echo the_content();?></h5>
                                </div>
                                </div>
                            </div>
                            </div>
                            <?php else: ?>
                        <div class="card mb-3  mt-0 pt-0 mb-0 pb-0 border-0 rounded-0 " style="max-width: 100%; margin-bottom:0px !important;">
                          <div class="row no-gutters ">
                              <div class="col-md-8"  style=" background: <?php the_field('get_cor') ?>">
                              <div class="card-body text-white">
                              <h5 class="card-text text-right"><?php echo the_content();?></h5>
                              </div>
                              </div>
                              <div class="col-md-4">
                              <img  class="card-img  mt-0 pt-0 mb-0 pb-0 border-0 rounded-0  url="<?php echo the_post_thumbnail('medium_large'); ?>
                              </div>
                          </div>
                          </div>
                            <?php endif ?>

                        <?php endwhile; ?>


                        <?php else: ?>
                        <?php endif ?>
                    <?php wp_reset_query();?>

      
    </div>



        </div>
      </div>

    </div>
  </section>


<?php get_footer(); ?>