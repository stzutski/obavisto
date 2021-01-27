<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- start page-body -->
<div class="page-body p-t-30">
  <div class="container-fluid">
    <!-- start container-fluid -->


    <!-- start row -->
    <div class="row">

      <!-- start col -->
      <div class="col-md-6 col-sx-12">


        <!-- start card -->
        <div class="card">

          <!-- start card body  -->
          <div class="card-body">

            <form class="form-horizontal">
              <fieldset>

                <!-- Form Name -->
                <h6 class="m-t-10">Geral</h6>
                <hr>


                <!-- Text input-->
                <div class="form-group row">
                  <label class="col-lg-12 control-label text-lg-left" for="textinput">Titulo da plataforma</label>
                  <div class="col-lg-12">
                    <input id="textinput" name="textinput" type="text" placeholder="Ex: Obavisto"
                      class="form-control btn-square input-md">

                  </div>
                </div>


                <!-- Text input-->
                <div class="form-group row">
                  <label class="col-lg-12 control-label text-lg-left" for="email">Url da sistema</label>
                  <div class="col-lg-12">
                    <input id="email" name="email" type="text" placeholder="ex: https://site.com.br"
                      class="form-control btn-square input-md">

                  </div>
                </div>


                <!-- Text input-->
                <div class="form-group row">
                  <label class="col-lg-12 control-label text-lg-left" for="textinput">Url Pol. de Prividade</label>
                  <div class="col-lg-12">
                    <input id="textinput" name="textinput" type="text" placeholder="ex: https://site.com.br/politicas"
                      class="form-control btn-square input-md">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                  <label class="col-lg-12 control-label text-lg-left" for="textinput">Copyright no Rodapé</label>
                  <div class="col-lg-12">
                    <input id="textinput" name="textinput" type="text"
                      placeholder="ex: Copyright 2020 © obavisto.com.br." class="form-control btn-square input-md">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                  <label class="col-lg-12 control-label text-lg-left" for="textinput">Permitir tema escuro</label>
                  <div class="col-lg-12">
                    <select id="selectbasic" name="selectbasic" class="form-control btn-square">
                      <option value="">Selecione</option>
                      <option value="1">SIM</option>
                      <option value="2">NÃO</option>
                    </select>
                  </div>
                </div>



                <div class="form-group row">
                  <div class="col-lg-12">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">SALVAR DADOS</button>
                  </div>
                </div>


              </fieldset>
            </form>




          </div>
          <!-- end card body  -->
        </div>
        <!-- end card  -->





      </div>
      <!-- end col -->


      <!-- start col -->
      <div class="col-md-6 col-sx-12">


        <!-- start card -->
        <div class="card">

          <!-- start card body  -->
          <div class="card-body">


            <form class="form-horizontal">
              <fieldset>

                <!-- Form Name -->
                <h6 class="m-t-10">Configurações de E-mail</h6>
                <hr>

                <!-- Text input-->
                <div class="form-group row">
                  <label class="col-lg-12 control-label text-lg-left" for="textinput">Remetente padrão</label>
                  <div class="col-lg-12">
                    <input id="textinput" name="textinput" type="text" placeholder="Ex: site@email.com.br"
                      class="form-control btn-square input-md">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                  <label class="col-lg-12 control-label text-lg-left" for="email">Servidor de envio SMTP</label>
                  <div class="col-lg-12">
                    <input id="email" name="email" type="text" placeholder="ex: mail.email.com.br"
                      class="form-control btn-square input-md">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                  <label class="col-lg-12 control-label text-lg-left" for="textinput">Porta servidor de SMTP</label>
                  <div class="col-lg-12">
                    <input id="textinput" name="textinput" type="text" placeholder="ex: 587"
                      class="form-control btn-square input-md">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                  <label class="col-lg-12 control-label text-lg-left" for="textinput">Usuário do SMTP</label>
                  <div class="col-lg-12">
                    <input id="textinput" name="textinput" type="text" placeholder="ex: 587"
                      class="form-control btn-square input-md">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                  <label class="col-lg-12 control-label text-lg-left" for="textinput">Senha do usuário do SMTP</label>
                  <div class="col-lg-12">
                    <input id="textinput" name="textinput" type="password" placeholder="******"
                      class="form-control btn-square input-md">

                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-lg-12">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">SALVAR DADOS</button>
                  </div>
                </div>


              </fieldset>
            </form>


            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Etapa</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Pré-Requisito</th>
                    <th scope="col">Responsável</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Cadastro online</td>
                    <td>Cadastro do cliente no site</td>
                    <td>NÃO</td>
                    <td>Cliente</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          




          </div>
          <!-- end card body  -->
        </div>
        <!-- end card  -->





      </div>
      <!-- end col -->


    </div>
    <!-- end row -->


    <!-- start row  -->
    <div class="row">
      <!-- start col  -->
      <div class="col-12">


        <!-- start card -->
        <div class="card">

          <!-- start card body  -->
          <div class="card-body">


            <form class="form-horizontal">
              <fieldset>

                <!-- Form Name -->
                <h6 class="m-t-10">Mensagem LGPD no Rodapé</h6>
                <hr>

                <!-- Textarea -->
                <div class="form-group row mb-0">
                  <label class="col-lg-12 control-label text-lg-left" for="textarea">Text Area</label>
                  <div class="col-lg-12">
                    <textarea class="form-control btn-square" id="textarea" name="textarea">O Obavisto utiliza cookies e outras tecnologias semelhantes para melhorar a sua experiência, de acordo com a nossa Política de Privacidade e, ao continuar navegando, você concorda com estas condições.
                    </textarea>
                  </div>
                </div>



                <div class="form-group row">
                  <div class="col-lg-12">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">SALVAR DADOS</button>
                  </div>
                </div>


              </fieldset>
            </form>





          </div>
          <!-- end card body  -->
        </div>
        <!-- end card  -->




      </div>
      <!-- end col  -->
    </div>
    <!-- end row  -->







  </div>
  <!-- end row -->









</div>
<!-- end container-fluid -->

</div>
<!-- end page-body -->