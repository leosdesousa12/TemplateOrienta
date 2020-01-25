<div ng-controller="MateriaCtrl">
    <?php /* Template name: materia */?>
    <?php get_header(); ?>


    <section class="page-section mt-8 pb-0 mb-0" id="contact">
        <div ng-controller="MateriaCtrl">
            <div class="container mt-8 ">
                <h1 class="text-center text-primary mb-2 mt-4" ng-bind="titleProfissao"></h1>

                <div class="row  justify-content-md-center">
                    <div ng-if="visivel" class="col-sm-11 pt-4 pb-4  text-center">
                        <div class="col-md-auto   text-center mr-0 ml-0 ">
                            <h1 class="text-center font-weight-normal text-primary pb-3 ">MATÉRIAS</h1>

                            <div class="row  justify-content-center">
                                <div class="row">
                                    <div class="col-sm-8 pt-4 mt-3" style=" background: #fff;  min-width:50%;">
                                        <div ng-repeat="materia in lista">
                                            <a href="{{materia.link}}">
                                                <img ng-src="{{materia.photo[0]}}"
                                                    class=" card-img img-fluid img-thumbnail card-img-top pt-0 bt-0 rounded-0 border-0"
                                                    alt="..." style="whidth: 100%;">
                                                <h6 class="text-dark font-weight-bold  text-left "
                                                    ng-bind="materia.title"></h6>
                                                <h6 class="text-color font-weight-normal  text-left "
                                                    ng-bind="materia.data">
                                                </h6>

                                                <h5 class="text-color text-justify font-weight-normal pb-4"
                                                    ng-bind-html="materia.post_excerpt"></h5>
                                                <hr class="pt-4 mt-4 pb-4">
                                            </a>
                                        </div>
                                        <div class="col-sm-10 pt-2 pb-4  text-center" ng-if="pagina.length > 1">
                                            <div class="col-md-auto   text-center mr-0 ml-0 ">

                                                <div class="row  justify-content-center">
                                                    <div class="col-md-2  text-center mr-0 ml-0 ">
                                                        <hr class="align-middle mt-4 pt-5">

                                                    </div>
                                                    <nav aria-label="...">

                                                        <ul class="pagination pagination-lg rounded-0">

                                                            <li class="page-item disabled rounded-0">
                                                            <li ng-if="(pageAtual) >0"
                                                                ng-click="loadListPagination(pageAtual-1)"
                                                                class="page-item rounded-0"><a
                                                                    class="page-link rounded-0 ml-2 mr-2 border-2 border border-page"
                                                                    href="#">
                                                                    < </a>
                                                            </li>

                                                            <li ng-class="{active:(($index ) == pageAtual)}"
                                                                class="page-item rounded-0" ng-repeat="p in pagina">
                                                                <a ng-bind="$index + 1" ng-if="$index < 3 "
                                                                    ng-click="loadListPagination($index)"
                                                                    class="page-link rounded-0 ml-2 mr-2 border-2 border border-page"
                                                                    href="#">

                                                                </a>


                                                            </li>

                                                            <li class=" active page-item rounded-0"
                                                                ng-if="(pageAtual + 1) > 3 ">
                                                                <a ng-bind="pageAtual + 1"
                                                                    class=" page-link rounded-0 ml-2 mr-2 border-2 border border-page"
                                                                    href="#">

                                                                </a>
                                                            </li>
                                                            <li class="page-item rounded-0"
                                                                ng-if="(pageAtual + 1) <= 3 && (pageAtual + 1) > 1 &&(pagina.length ) > 3 ">
                                                                <a class="page-link rounded-0 ml-2 mr-2 border-2 border border-page"
                                                                    href="#">
                                                                    ...
                                                                </a>
                                                            </li>
                                                            <li ng-click="loadListPagination(pagina.length-1 )"
                                                                class="page-item rounded-0"
                                                                ng-if="(pagina.length ) > 3 && (pageAtual+1) <pagina.length">
                                                                <a class="page-link rounded-0 ml-2 mr-2 border-2 border border-page"
                                                                    href="#" ng-bind="pagina.length">

                                                                </a>
                                                            </li>

                                                            <li ng-if="(pageAtual +1) <pagina.length "
                                                                ng-click="loadListPagination(pageAtual+1)"
                                                                class="page-item rounded-0"><a
                                                                    class="page-link rounded-0 ml-2 mr-2 border-2 border border-page"
                                                                    href="#">></a></li>

                                                            </li>

                                                        </ul>
                                                    </nav>
                                                    <div class="col-md-2  text-center mr-0 ml-0 ">
                                                        <hr class="align-middle mt-4 pt-5 ">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-4 pl-4 text-left pt-4 mt-3">
                                        <div class="card border-0 rounded-0" style="max-width: 100%;">
                                            <div class="card-header border-0 rounded-0 bd-cinza">

                                                <h5 class="text-left text-cinza">Categorias</h5>
                                                <div class="text-left bd-cinza " ng-repeat="category in categorys | limitTo: 4">
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