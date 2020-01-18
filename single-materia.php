<div ng-controller="MateriaInternaCtrl">

    <?php
//Template Name: Single materia
?>
    <?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["postId"]=get_the_ID();
?>


    <?php


get_header();


?>


    <section class="page-section mt-8" id="contact" >
        <div class="container mt-8 ">
            <h1 class="text-center text-primary mb-2 mt-4" ng-bind="titleProfissao"></h1>

            <div class="row  justify-content-md-center">
                <div class="col-sm-11 pt-2 pb-4  text-center">
                    <div class="col-md-auto   text-center mr-0 ml-0 ">
                        <div class="row  justify-content-center" ng-if="visivel">
                            <div class="row">
                                <div  class="col-sm-8 pt-4 mt-4" style=" background: #fff;  min-width:50%;">
                                    <img ng-src="{{materia.photo[0]}}"
                                        class=" card-img img-fluid img-thumbnail card-img-top pt-0 bt-0 rounded-0 border-0"
                                        alt="..." style="whidth: 100%;">
                                    <h6 class="text-dark font-weight-bold  text-left " ng-bind="materia.title"></h6>

                                    <h5 class="text-color text-justify font-weight-normal "
                                        ng-bind-html="materia.post_content"></h5>


                                </div>

                                <div class="col-sm-4 pl-4 text-left pt-4 mt-4">
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


    <?php
get_footer();?>

</div>