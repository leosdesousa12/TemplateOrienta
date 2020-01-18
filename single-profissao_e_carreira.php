<?php
//Template Name: Single profissao_e_carreira
?>
<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["postId"]=get_the_ID();
?>


<?php


get_header();


?>


<section class="page-section mt-8" id="contact">
    <div ng-controller="ProfissaoIternaCtrl">
        <div class="container mt-8 ">
            <h1 class="text-center text-primary mb-2 mt-4" ng-bind="titleProfissao"></h1>

            <div class="row  justify-content-md-center">
                <div class="col-sm-11 pt-2 pb-4  text-center">
                    <div class="col-md-auto   text-center mr-0 ml-0 ">
                        <div class="row  justify-content-center">
                            <div class="row">
                                <div class="col-sm-8 pt-4 mt-4" style=" background: #fff;  min-width:50%;">
                                    <img ng-src="{{post.photo[0]}}"
                                        class=" card-img img-fluid img-thumbnail card-img-top pt-0 bt-0 rounded-0 border-0"
                                        alt="..." style="whidth: 100%;">
                                    <h6 class="text-dark font-weight-bold  text-left " ng-bind="post.title"></h6>

                                    <h5 class="text-color text-justify font-weight-normal "
                                        ng-bind-html="post.post_content"></h5>


                                </div>

                                <div class="col-sm-4 pl-4 text-left pt-4 mt-4">
                                    <div class="card border-0 rounded-0" style="max-width: 100%;">
                                        <div class="card-header border-0 rounded-0">

                                            <h5 class="text-left text-dark">Categorias</h5>
                                            <div class="text-left " ng-repeat="category in categorys | limitTo: 3">
                                                <p class="text-left text-color text-normal">-
                                                    {{category.post_category.name}}</p>
                                            </div>

                                        </div>

                                        <form style="background: #399ea0;">
                                            <div class="form-row align-items-left pt-0 float-left"
                                                style=" min-width:100%;">
                                                <div class="col-auto text-left pr-0 mr-0" style=" min-width:100%;">
                                                    <div class="input-group">
                                                        <input type="text" ng-model="pesquisa"
                                                            class="form-control text-center text-white border-0 rounded-0"
                                                            id="inlineFormInputGroup"
                                                            placeholder="PESQUISAR PROFISSÕES..."
                                                            style="background: #25bcbd; min-width:20%;">

                                                        <div class="input-group-prepend float-right"
                                                            style="background: #25bcbd; ">
                                                            <div class="input-group-text text-white border-0 "
                                                                style="background: #399ea0;">
                                                                ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
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