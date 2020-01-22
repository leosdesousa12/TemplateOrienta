<div ng-controller="mainCtrl">
    <?php get_header();

?>

    <!-- Masthead -->
    <header class="text-white text-center mt-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/1722.jpg" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/1722.jpg" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/1722.jpg" class="d-block w-100"
                        alt="...">
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

    <!-- equipe Section -->
    <section class="page-section equipe" id="equipe">
        <div class="container">

            <!-- Portfolio Section Heading -->
            <h1 class="text-center font-weight-normal text-primary pb-3">EQUIPE</h1>
            <div class="container">
                <div class="row justify-content-md-center">
                    <?php query_posts('post_type=equipe&post_per_page=-1'); ?>
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>

                    <div class="col-md-auto  p-0 border-0 rounded-0">
                        <div class="card text-white font-weight-bold  p-0 border-0 rounded-0" style="width: 23rem;">
                            <img class="card-img  p-0 border-0 rounded-0 " style="height: 355px;"
                                url="<?php  the_post_thumbnail(); ?>" alt="Card image cap">
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
    </section>
    <div class="container text-center pb-3 ">

        <!-- Portfolio Section Heading -->
        <h1 class="text-center font-weight-normal text-primary pb-2">PROPOSTAS</h1>
        <div class="container text-center">
            <div class="row  ">
                <div class="col-md-12 text-center">
                    <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                            <!--<div class="carousel-item active">
                                <div class="col-lg-4 col-md-6">
                                    <img class="img-fluid" src="http://placehold.it/350x180?text=1">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-4 col-md-6">
                                    <img class="img-fluid" src="http://placehold.it/350x180?text=2">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-4 col-md-6">
                                    <img class="img-fluid" src="http://placehold.it/350x180?text=3">
                                </div>
                            </div>-->

                            <div class="carousel-item " ng-class="{'active text-primary':(($index ) == 0)}"
                                ng-repeat="post in posts">

                                <div class="col-lg-4 col-md-6">
                                <img class="img-fluid" ng-src="{{post.image[0]}}">
                                </div>
                            </div>
                           
                        </div>


                        <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next bg-dark w-auto" href="#myCarousel" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container text-center ">

        <!-- Portfolio Section Heading -->
        <h1 class="text-center font-weight-normal text-primary pb-2">MATÉRIAS</h1>
        <div class="container">
            <div class="row  justify-content-center">
                <div class="card border-0 rounded-0 pt-2 mt-2" style="max-width: 550px; "
                    ng-repeat="materia in materias | limitTo: 4">
                    <a href="{{materia.link}}" class="pr-1">
                        <img ng-src="{{materia.photo[0]}}"
                            class=" card-img img-fluid img-thumbnail card-img-top pt-0 bt-0 rounded-0 border-0"
                            alt="..." style="width: 723px; height:300px ">
                        <h5 class="text-left text-dark" ng-bind="materia.title"></h5>
                        <h6 class="text-color text-justify font-weight-normal pb-1" ng-bind-html="materia.post_excerpt">
                        </h6>
                    </a>

                </div>


            </div>
            <div ng-if="materias.length > 4">
                <a href="<?php echo get_permalink( get_page_by_title( 'MATÉRIAS' ) );?>"><button type="button"
                        class=" btn btn-primary btn-lg border-0 rounded-0 text-dark font-weight-normal"
                        style=" background: #eceeed;">ver todas as matérias</button></a>
            </div>
        </div>
    </div>




    <?php get_footer(); ?>
</div>