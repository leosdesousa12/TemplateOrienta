<?php /* Template name: contato */?>

<?php

get_header();

?>


<section class="page-section mb-2 pb-2 mt-8" id="contact">
    <div ng-controller="ContatoCtrl">
        <div class="container mt-8 ">
            <h1 class="text-center text-primary mb-2 mt-4 pt-4" ng-bind="titleProfissao"></h1>

            <div class="row  justify-content-md-left">
                <div class="col-sm-12 pt-2 pb-4  text-center">
                    <div class="col-md-auto   text-center mr-0 ml-0 ">
                        <div class="row  justify-content-center">
                            <div class="row">
                                <div class="col-sm-8 pt-4 mt-4" style=" background: #fff;  min-width:60%;">
                                    <h5 class="text-cinza text-left font-weight-bold">Para entrar em contato conosco,
                                        preencha os
                                        dados abaixo que iremos retornar </h5>
                                    <form action="<?php echo get_permalink( get_page_by_title( 'CONTATO' ) );?>" name="form_contato" method="post" >
                                        <div class="row mt-4 pt-4">


                                            <div class="col-sm-6 " style=" background: #fff;">
                                                <div class="form-group ">
                                                    <h5 class="text-cinza text-left font-weight-bold">Nome <sup class="asteristico">*</sup></h5> <input
                                                    type="text" name="nome" maxlength="40" class="  form-control border-0 bd-cinza"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>

                                                <div class="form-group ">
                                                    <h5 class="text-cinza text-left font-weight-bold pt-3">Telefone
                                                    </h5>
                                                    <input type="text" name="telefone" maxlength="14" class="  form-control border-0 bd-cinza"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>

                                            </div>
                                            <div class="col-sm-6" style=" background: #fff;">
                                                <div class="form-group ">
                                                    <h5 class="text-cinza text-left font-weight-bold ">E-mail</h5>
                                                    <input type="email" name="email" maxlength="30" class="  form-control border-0 bd-cinza"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>

                                                <div class="form-group ">
                                                    <h5 class="text-cinza text-left font-weight-bold pt-3">Assunto</h5>
                                                    <input type="text" name="assunto" class="  form-control border-0 bd-cinza"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>

                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-cinza text-left font-weight-bold pt-3">Mensagem</h5>
                                            <textarea class="form-control border-0 bd-cinza"
                                                type="text" name="mensagem" rows="3"
                                                style=" min-height:200px; resize: none;"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h5 class="text-color  font-weight-normal text-left">Verificacao de
                                                    segurança
                                                </h5>
                                                <h5 class="text-cinza font-weight-bold text-left">Qual o resultado da
                                                    operação</h5>

                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group text-cinza">
                                                    <input type="contato"
                                                        class="form-control text-cinza border-0 text-center contato bd-cinza"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        ng-model="result" placeholder="{{a +' + '+b}}"
                                                        style=" color: #000000 !important; ">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 text-right">
                                                <button ng-disabled="!(result == (a+b))" type="submit"
                                                    class="btn btn-primary btn-lg text-center "
                                                    style="background: #6ebbbc; min-width:120px;">enviar</button>

                                            </div>

                                        </div>
                                    </form>

                                </div>
                                <div class="col-sm-4 pl-4 text-left pt-4 mt-4">
                                    <div class="card border-0 rounded-0 " style="max-width: 100%;">
                                        <h5 class="text-left text-cinza">Equipe <span
                                                class="text-color  font-weight-normal">
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
//Variáveis
 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$assunto = $_POST['assunto'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
echo "formulario\n";
echo $nome;

// Compo E-mail
$arquivo = "
<style type='text/css'>
body {
margin:0px;
font-family:Verdane;
font-size:12px;
color: #666666;
}
a{
color: #666666;
text-decoration: none;
}
a:hover {
color: #FF0000;
text-decoration: none;
}
</style>
  <html>
      <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
          <tr>
            <td>
<tr>
               <td width='500'>Nome:$nome</td>
              </tr>
              <tr>
                <td width='320'>E-mail:<b>$email</b></td>
   </tr>
    <tr>
                <td width='320'>Telefone:<b>$telefone</b></td>
              </tr>
   <tr>
              </tr>
              <tr>
                <td width='320'>Mensagem:$nome</td>
              </tr>
          </td>
        </tr>  
        <tr>
          <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
        </tr>
      </table>
  </html>
";

   
  // emails para quem será enviado o formulário
  $emailenviar = "leosdesousa@gmail.com";
  $destino = $emailenviar;
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  echo $enviaremail;
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=".get_permalink( get_page_by_title( 'CONTATO' ) )."'>";
  } else {
     $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>

<?php
get_footer();?>

