<?php


get_header(); ?>
<br><br>
<br>
<br>
<br>
<br>

<div class="wrap">
    <div id="primary" class="content-area">
        <div ng-controller="mainCtrl">
            <div ng-repeat="x in lista">
                {{x}}
            </div>


            <div class="col-sm-10 pt-2 pb-4  text-center">
                <div class="col-md-auto   text-center mr-0 ml-0 ">

                    <div class="row  justify-content-center">
                        <!--<div class="col-md-2  text-center mr-0 ml-0 ">
                            <hr class="align-middle mt-4 pt-5">

                        </div>
                        <nav aria-label="...">

                            <ul class="pagination pagination-lg rounded-0">

                                <li class="page-item disabled rounded-0">
                                <li ng-if="(pageAtual) >0" ng-click="loadListPagination(pageAtual-1)" class="page-item rounded-0"><a class="page-link rounded-0 ml-2 mr-2 border-2 border border-page" href="#"><</a></li>

                                <li ng-class="{active:(($index ) == pageAtual)}" class="page-item rounded-0" ng-repeat="p in pagina">
                                    <a  ng-bind="$index + 1" ng-if="$index < 3 "
                                        ng-click="loadListPagination($index)"
                                        class="page-link rounded-0 ml-2 mr-2 border-2 border border-page" href="#">
                                        
                                    </a>


                                </li>

                                <li  class=" active page-item rounded-0" ng-if="(pageAtual + 1) > 3 ">
                                    <a ng-bind="pageAtual + 1"
                                        
                                        class=" page-link rounded-0 ml-2 mr-2 border-2 border border-page" href="#">
                                        
                                    </a>
                                </li>
                                <li class="page-item rounded-0" ng-if="(pageAtual + 1) <= 3 && (pageAtual + 1) > 1 ">
                                    <a
                                        
                                        class="page-link rounded-0 ml-2 mr-2 border-2 border border-page" href="#">
                                        ...
                                    </a>
                                </li>
                                <li  ng-click="loadListPagination(pagina.length-1 )" class="page-item rounded-0" ng-if="(pagina.length ) > 1 && (pageAtual+1) <pagina.length">
                                    <a
                                        
                                        class="page-link rounded-0 ml-2 mr-2 border-2 border border-page" href="#" ng-bind="pagina.length">
                                        
                                    </a>
                                </li>

                                <li ng-if="(pageAtual +1) <pagina.length " ng-click="loadListPagination(pageAtual+1)" class="page-item rounded-0"><a class="page-link rounded-0 ml-2 mr-2 border-2 border border-page" href="#">></a></li>

                                </li>

                            </ul>
                        </nav>
                        <div class="col-md-2  text-center mr-0 ml-0 ">
                            <hr class="align-middle mt-4 pt-5 ">

                        </div>-->
                      
                        <div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-3 active">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=2" alt="slide 2">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=3" alt="slide 3">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=4" alt="slide 4">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=5" alt="slide 5">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=6" alt="slide 6">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=7" alt="slide 7">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=8" alt="slide 7">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-lg text-muted"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-lg text-muted"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();