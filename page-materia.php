<div ng-controller="MateriaCtrl">
<?php /* Template name: materia */?>
<?php get_header(); ?>


<section class="page-section mt-8" id="contact">
    <div ng-controller="MateriaCtrl">
        <div class="container mt-8 ">
            <h1 class="text-center text-primary mb-2 mt-4" ng-bind="titleProfissao"></h1>
  
            <div class="row  justify-content-md-center">
                <div ng-if="visivel" class="col-sm-11 pt-2 pb-4  text-center">
                    <div class="col-md-auto   text-center mr-0 ml-0 ">
                    <h1 class="text-center  text-primary pb-3 ml-6 pl-6">NOTÍCIAS</h1>

                        <div class="row  justify-content-center">
                            <div class="row">
                                <div class="col-sm-8 pt-4 mt-3" style=" background: #fff;  min-width:50%;">
                                    <div ng-repeat="materia in materias">
                                      <a href="{{materia.link}}">
                                          <img ng-src="{{materia.photo[0]}}"
                                              class=" card-img img-fluid img-thumbnail card-img-top pt-0 bt-0 rounded-0 border-0"
                                              alt="..." style="whidth: 100%;">
                                          <h6 class="text-dark font-weight-bold  text-left " ng-bind="materia.title"></h6>
                                          <h6 class="text-color font-weight-normal  text-left " ng-bind="materia.data">
                                          </h6>

                                          <h5 class="text-color text-justify font-weight-normal pb-4"
                                              ng-bind-html="materia.post_excerpt"></h5>
                                          <hr class="pt-4 mt-4 pb-4">
                                      </a>
                                    </div>
                                </div>

                                <div class="col-sm-4 pl-4 text-left pt-4 mt-3">
                                    <div class="card border-0 rounded-0" style="max-width: 100%;">
                                        <div class="card-header border-0 rounded-0">

                                            <h5 class="text-left text-dark">Categorias</h5>
                                            <div class="text-left " ng-repeat="category in categorys | limitTo: 4">
                                                <p class="text-left text-color text-normal">-
                                                    {{category.post_category.name}}</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>



   
</section>


<?php get_footer(); ?> </div>
