<?php /* Template name: equipe */?>
<?php get_header(); ?>


  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Form -->
      <div class="row justify-content-md-center ">
        <div class="col-auto mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
         



          <?php query_posts('post_type=equipe&post_per_page=-1'); ?>
                        <?php $quant = 0; if(have_posts()): while(have_posts()): the_post();  $quant++?>

                        <?php if($quant %2 !=0 ):  ?>
                        <div class="row justify-content-md-center mb-0 pb-0 border-0 rounded-0 ">
                                <div class="card mb-3 mb-0 pb-0 border-0 rounded-0" style="width: 90%; height:290px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img  class="card-img  p-0 border-0 rounded-0" alt="..." style="height:313px;"  url="<?php echo the_post_thumbnail(); ?>
                                        </div>
                                        <div class="col-md-8   mb-0 pb-0 border-0 rounded-0 " style="position: relative; height:313px; background: <?php the_field('get_cor') ?>">
                                            <div class="card-body text-white">
                                                <h5 class="card-text"><?php echo the_content();?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="row justify-content-md-center mt-0 pt-0 mb-0 pb-0 border-0 rounded-0 ">
                                <div class="card mb-3 mb-0 pb-0 border-0 rounded-0" style="width: 90%; height:290px;">
                                    <div class="row no-gutters"  style="height:313px;">
                                    <div class="col-md-8  mb-0 pb-0 border-0 rounded-0 "  style="position: relative; height:313px; background: <?php the_field('get_cor') ?>">
                                        <div class="card-body text-white">
                                            <h5 class="card-text text-right"><?php echo the_content();?></h5>
                                        </div>
                                        </div>
                                        <div class="col-md-4 "> 
                                        <img  class="card-img  p-0 border-0 rounded-0" alt="..." style="height:313px;"  url="<?php echo the_post_thumbnail(); ?>
                                        </div>
                                    
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
  </section>


<?php get_footer(); ?>