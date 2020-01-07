<?php wp_footer(); ?>


  <!-- Footer -->
  <footer class="footer fixed-bottom text-center ">
    <div class="col container">
      <div class="row">
        
        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
        <img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/logo_branca.png" width="300" height="auto" alt="">

       
        </div>

        <!-- Footer Social Icons
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div> -->

        <!-- Footer About Text -->
        <div class="col-lg-8">
          <h4 class="text-uppercase mb-8">Como chegar</h4>
          <p class="lead mb-0 text-left">Empresarial Albert Einstein, sala 209</p>
          <p class="lead mb-0 text-left">R. Frei Matias Teves, 208, Recife, PE 50070-410</p>
        </div>

      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="<?php echo  get_stylesheet_directory_uri();?>/assets/js/app.js"></script>
  <script src="<?php echo  get_stylesheet_directory_uri();?>/assets/js/services.js"></script>
  <script src="<?php echo  get_stylesheet_directory_uri();?>/assets/js/controller.js"></script>


  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo  get_stylesheet_directory_uri();?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo  get_stylesheet_directory_uri();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Plugin JavaScript -->
  <script src="<?php echo  get_stylesheet_directory_uri();?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <script>
jQuery(document).ready(function() {

jQuery('.mais-noticias').on('click', function(e) {
    e.preventDefault();

    var dados_envio = {
      'mais_noticias_nonce': js_global.mais_noticias_nonce,
        'paged': 2,
        'action': 'mais_noticias'
    }

    jQuery.ajax({
        url: js_global.xhr_url,
        type: 'POST',
        data: dados_envio,
        dataType: 'JSON',
        success: function(response) {
            if (response == '401'  ){
                console.log('Requisição inválida')
            }
            else if (response == 402) {
                console.log('Todos os posts já foram mostrados')
            } else {
                console.log(response)
            }
        }
    });


});

})
  </script>
  <!-- Contact Form JavaScript -->
  <script src="<?php echo  get_stylesheet_directory_uri();?>/assets/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo  get_stylesheet_directory_uri();?>/assets/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo  get_stylesheet_directory_uri();?>/assets/js/freelancer.js"></script>

</body>

</html>