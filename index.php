

<?php get_header();

?>

  <!-- Masthead --> 
  <header class="text-white text-center mt-5">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/1722.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/1722.jpg" class="d-block w-100"   alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/1722.jpg" class="d-block w-100"  alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </header>



<?php 
  $args = array('post_type' => 'profissao_e_carreira');
  $query = new WP_Query( $args );

  while($query->have_posts()): $query->the_post();
?>
  <?php the_title();?>

<?php endwhile?>


  <!-- equipe Section -->
  <section class="page-section equipe" id="equipe">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h1 class="text-center text-primary pb-3">EQUIPE</h1>
        <div class="container">
          <div class="row justify-content-md-center">
              <?php query_posts('post_type=equipe&post_per_page=-1'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
               
                  <div class="col-md-auto  p-0 border-0 rounded-0">
                    <div class="card text-white font-weight-bold  p-0 border-0 rounded-0" style="width: 23rem;">
                      <img class="card-img  p-0 border-0 rounded-0 " style="height: 355px;" url="<?php  the_post_thumbnail(); ?>" alt="Card image cap">
                      <div class="card-img-overlay d-flex flex-column capa">
                          <div class="text-center mt-auto ">
                          <h4><?php echo the_title();?></h4>
                          </div>
                      </div>
                      </div>
                    </div>

                <?php endwhile; ?>


                <?php else: ?>
                  Equipe não cadastrada
                <?php endif ?>
              <?php wp_reset_query();?>
            </div>
        </div>

   <!--   <div class="container">
        <div class="row justify-content-md-center">
             <div class="col-md-auto  p-0 border-0 rounded-0">
                <div class="card text-white font-weight-bold  p-0 border-0 rounded-0" style="width: 23rem;">
                  <img class="card-img  p-0 border-0 rounded-0" style="height: 355px;" src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/1722.jpg" alt="Card image cap">
                  <div class="card-img-overlay d-flex flex-column">
                      <div class="text-center mt-auto">
                      <h4>Atriana Marinho</h4>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-md-auto  p-0 border-0 rounded-0">
              <div class="card text-white font-weight-bold  p-0 border-0 rounded-0" style="width: 23rem;">
                  <img class="card-img  p-0 border-0 rounded-0" style="height: 355px;" src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/1722.jpg" alt="Card image cap">
                  <div class="card-img-overlay d-flex flex-column">
                      <div class="text-center mt-auto">
                        <h4>Atriana Marinho</h4>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-md-auto  p-0 border-0 rounded-0">
              <div class="card text-white font-weight-bold  p-0 border-0 rounded-0" style="width: 23rem;">
                  <img class="card-img  p-0 border-0 rounded-0" style="height: 355px;" src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/1722.jpg" alt="Card image cap">
                  <div class="card-img-overlay d-flex flex-column">
                      <div class="text-center mt-auto">
                      <h4>Atriana Marinho</h4>
                      </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </div>-->
  </section>

    <!-- equipe Section -->
    <section class="page-section equipe" id="equipe">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h1 class="text-center text-primary pb-3">EQUIPE</h1>
      <div class="container">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/Home.png" alt=""/></a>
                                </div>    
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/Home.png" alt=""/></a>    
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/Home.png" alt=""/></a>    
                                </div> 
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>    
        </div>
    </div>
  </section>


  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>


<?php get_footer(); ?>
