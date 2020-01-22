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

                        <div class="col-md-6 col-md-offset-3">
<div class="carousel slide" id="myCarousel">
  <div class="carousel-inner">
    <div class="item active">
      <div class="col-xs-6"><a href="#"><img src="http://placehold.it/500/bbbbbb/fff&amp;text=1" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-6"><a href="#"><img src="http://placehold.it/500/CCCCCC/fff&amp;text=2" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-6"><a href="#"><img src="http://placehold.it/500/eeeeee/fff&amp;text=3" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-6"><a href="#"><img src="http://placehold.it/500/f4f4f4/fff&amp;text=4" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-6"><a href="#"><img src="http://placehold.it/500/fcfcfc/333&amp;text=5" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-6"><a href="#"><img src="http://placehold.it/500/f477f4/fff&amp;text=6" class="img-responsive"></a></div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
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