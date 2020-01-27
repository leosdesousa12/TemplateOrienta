<?php /* Template name: proposta */?>

<?php get_header(); ?>

<!-- Contact Section -->
<section class="page-section pb-3 mb-3 mt-4" id="contact">
    <div ng-controller="HomeCtrl" class="container mt-4">
        <h1 class="text-center font-weight-normal  text-primary mb-2 mt-4" ng-bind="postPrincipal.title"></h1>

        <div class="row justify-content-md-center ">
            <div class="col-auto mx-auto  justify-content-md-center text-center ">
                <div class="duas-colunas">
                    <h4 class="text-color text-justify font-weight-normal  " ng-bind-html="postPrincipal.post_content">
                    </h4>
                </div>
                <div class="card mb-4  mt-4 pt-4 mb-0 pb-0 border-0 rounded-0 "
                    style="max-width: 100%; margin-bottom:0px !important;">
                    <div class="row no-gutters  mt-0 pt-0 mb-0 pb-0 border-0 rounded-0 ">
                        <div class="col-md-4 text-center" style="background: #6ebbbc;">
                            <img class="card-img img-fluid img-thumbnail pt-4 mt-0 pt-0 mb-0 pb-0 border-0 rounded-0  "
                                style="width: 200px; background: #6ebbbc;" ng-src="{{postPrincipal.image[0]}}" />
                            <div class="card-body "
                                style=" background: <?php /*the_field('get_cor')*/ echo "#6ebbbc;"; ?>">
                                <h5 class="card-text text-center text-white" ng-bind="postPrincipal.title"></h5>
                            </div>
                        </div>
                        <div class="col-md-8  bd-cinza">
                            <div class="card-body text-white h-100 card-proposta">
                                <h5 class="card-text text-justify text-color font-weight-normal  "
                                    ng-bind="postPrincipal.post_excerpt"></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  justify-content-center">
                    <div ng-repeat="post in posts" class="ng-scope-card text-center  col-auto mx-auto   ">
                        <div ng-if="post.post_id != postPrincipal.post_id">
                            <img ng-click="principal(post)"
                                class="card-img text-center img-fluid img-thumbnail pt-4 mt-4 pt-0 mb-0 pb-0 border-0 rounded-0  "
                                style="width: 200px; " ng-src="{{post.image[0]}}" />
                        </div>
                    </div>
                </div>
            </div>
</section>






<?php get_footer(); ?>