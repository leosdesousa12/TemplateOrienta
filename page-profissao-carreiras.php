<?php /* Template name: profissao-carreira */?>
<?php get_header(); ?>
<!-- Contact Section -->
<section class="page-section mt-8" id="contact">
  <div ng-controller="ProfissaoCtrl">
      <div class="container mt-8 ">
          <h1 class="text-center text-primary mb-2 mt-4" ng-bind="titleProfissao"></h1>
          <div class="row  justify-content-md-center">
              <div class="col-sm-10 pt-2 pb-4  text-center" style=" background: #eceeed;">
                  <div class="col-md-auto   text-center mr-0 ml-0 " style=" background: #eceeed;">
                      <div class="row  justify-content-center">
                          <div ng-click="lista(category)"  ng-repeat="  category in categorys | orderBy:name:false"
                              class="ng-scope-card text-center  col-auto mx-auto">
                              <div class="card mr-5 ml-5 card-profissao" style="max-width: 100px;  background: #eceeed;">
                                  <img ng-src="{{category.img}}" class="card-img-top" alt="...">
                              </div>
                              <div class="card-body text-center ml-4 " style="max-width: 150px;">
                                  <p class="card-text text-center text-dark mr-0 ml-0"
                                      ng-bind="category.post_category.name"></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class=" col-sm-10 pt-2 pb-4 text-right pr-0"  >
                  <form>
                        <div class="form-row align-items-right pt-3 float-right">
                          <div class="col-auto text-right">
                            <div class="input-group mb-6">
                              <input type="text" class="form-control text-center text-white border-0 rounded-0"
                               id="inlineFormInputGroup" placeholder="PESQUISAR PROFISSÕES..." 
                                style="background: #25bcbd; min-width:230px;" >
                              <div class="input-group-prepend mb-7" style="background: #25bcbd; " >
                                <div class="input-group-text text-white border-0 " style="background: #399ea0;">></div>
                              </div>
                            </div>
                          </div>
                        </div>
                  </form>
                </div>
                <div class=" col-sm-10 pt-2 pb-4 text-center pr-0"  >
                  w
                </div>
          </div>
      </div>
  </div>
</section>
<?php get_footer(); ?>