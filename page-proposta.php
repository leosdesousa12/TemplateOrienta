<?php /* Template name: proposta */?>
<?php get_header(); ?>

  <!-- Contact Section -->
  <section class="page-section mt-4" id="contact">
    <div class="container mt-4">
    <h1 class="text-center text-primary mb-2 mt-4">PROPOSTAS</h1>

      <!-- Contact Section Form -->
      <div class="row justify-content-md-center ">
        <div class="col-auto mx-auto  justify-content-md-center ">
                    <?php
                // query for the about page
                $your_query = new WP_Query( 'pagename=propostas' );
                // "loop" through query (even though it's just one page) 
                while ( $your_query->have_posts() ) : $your_query->the_post();
                    the_content();?>
                    <?php
                endwhile;
                // reset post data (important!)
                wp_reset_postdata();
            ?>

      
    </div>



        </div>
      </div>

    </div>

<?php get_footer(); ?>