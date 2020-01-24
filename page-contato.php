<?php /* Template name: contato */?>

<?php

get_header();

?>


<section class="page-section mt-8" id="contact">
    <div ng-controller="ContatoCtrl">
        <div class="container mt-8 ">
            <h1 class="text-center text-primary mb-2 mt-4 pt-4" ng-bind="titleProfissao"></h1>

            <div class="row  justify-content-md-left">
                <div class="col-sm-11 pt-2 pb-4  text-center">
                    <div class="col-md-auto   text-center mr-0 ml-0 ">
                        <div class="row  justify-content-center">
                            <div class="row">
                                <div class="col-sm-8 pt-4 mt-4" style=" background: #fff;  min-width:60%;">
                                    <h6 class="text-cinza text-left font-weight-normal">Para entrar em contato conosco,
                                        preencha os
                                        dados abaixo que iremos retornar </h6>
                                    <div class="row mt-4 pt-4">
                                        <div class="col-sm-6 " style=" background: #fff;">
                                            <form>
                                                <div class="form-group ">
                                                    <h6 class="text-cinza text-left font-weight-normal">Nome</h6> <input
                                                        type="email" class="  form-control border-0 bd-cinza"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>

                                                <div class="form-group ">
                                                    <h6 class="text-cinza text-left font-weight-normal pt-3">Telefone
                                                    </h6>
                                                    <input type="email" class="  form-control border-0 bd-cinza"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>

                                            </form>
                                        </div>
                                        <div class="col-sm-6" style=" background: #fff;">
                                            <form>
                                                <div class="form-group ">
                                                    <h6 class="text-cinza text-left font-weight-normal ">E-mail</h6>
                                                    <input type="email" class="  form-control border-0 bd-cinza"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>

                                                <div class="form-group ">
                                                    <h6 class="text-cinza text-left font-weight-normal pt-3">Assunto</h6>
                                                    <input type="email" class="  form-control border-0 bd-cinza"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <h6 class="text-cinza text-left font-weight-normal pt-3">Mensagem</h6>
                                            <textarea class="form-control border-0 bd-cinza" id="exampleFormControlTextarea1"
                                                rows="3" style=" min-height:200px; resize: none;"></textarea>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="text-cinza font-weight-normal text-left">Verificacao de segurança
                                            </h6>
                                            <h6 class="text-cinza font-weight-bold text-left">Qual o resultado da
                                                operação</h6>

                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group text-cinza">
                                                <input type="contato" class="form-control text-cinza border-0 text-center contato bd-cinza" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" ng-model="result" placeholder="{{a +' + '+b}}" style=" color: #000000 !important; ">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-right">
                                            <button ng-disabled="!(result == (a+b))" type="submit" class="btn btn-primary btn-lg text-center "
                                                style="background: #25bcbd; min-width:120px;">enviar</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 pl-4 text-left pt-4 mt-4">
                                    <div class="card border-0 rounded-0 " style="max-width: 100%;">
                                        <h5 class="text-left text-cinza">Equipe <span class="text-color  font-weight-normal">
                                                | Conheça nossa equipe</span></h5>
                                        <a class="border-0 pr-0" href="{{membroEquipe.link}}">
                                            <img ng-src="{{membroEquipe.photo[0]}}"
                                                class=" card-img img-fluid img-thumbnail card-img-top pt-0 bt-0 rounded-0 border-0"
                                                alt="..." style="whidth: 100%;">
                                        </a>
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