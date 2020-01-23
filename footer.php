<?php wp_footer(); ?>


  <!-- Footer -->
  <footer class="footer fixed-bottom text-center ">
    <div class="col container">
      <div class="row text-center">
        
        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0 text-center">
          <img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/logo_branca.png" width="300" height="auto" alt="">
          
          <div class="col-auto mx-auto  justify-content-md-center ">
          <a class=" ml-5 btn btn-outline-light btn-social mx-1 bg-white" href="https://www.facebook.com/orientaescolhaprofissionaledecarreiras/">
            <i class="fa  fa-facebook  "style="color: #25bcbd; background-color: white;"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1 bg-white"  href="https://www.instagram.com/orientaescolhaprofissional/">
            <i class="fa fa-instagram  "style="color: #25bcbd; background-color: white;"></i>
          </a>
              
          </div>
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
          <h4 class=" ml-4 text-uppercase mb-8 text-left font-weight-normal ">Como chegar</h4>
          <div class="col-md-auto  p-0 border-0 rounded-0 text-left ml-4 ">
                       <iframe class="txt-left"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987.591868126975!2d-34.89641797083325!3d-8.063948499637108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18d0072b8c47%3A0xc52fecca2d67fdb8!2sCondom%C3%ADnio%20do%20Ed%20Empresarial%20Albert%20Einstein!5e0!3m2!1spt-BR!2sbr!4v1579738643366!5m2!1spt-BR!2sbr" frameborder="0" style="border:0; width: 90%; height:300px;" allowfullscreen=""></iframe>

          </div>
         <!-- <iframe class="txt-left"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987.591868126975!2d-34.89641797083325!3d-8.063948499637108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18d0072b8c47%3A0xc52fecca2d67fdb8!2sCondom%C3%ADnio%20do%20Ed%20Empresarial%20Albert%20Einstein!5e0!3m2!1spt-BR!2sbr!4v1579738643366!5m2!1spt-BR!2sbr" width="800" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>-->
          <p class="lead mb-0 text-left font-weight-normal ml-4 ">Empresarial Albert Einstein, sala 209</p>
          <p class="lead mb-0 text-left ml-4 ">R. Frei Matias Teves, 208, Recife, PE 50070-410</p>
        </div>

      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular-sanitize.min.js"></script>

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