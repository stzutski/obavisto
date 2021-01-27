<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- start page-body -->
<div class="page-body p-t-30">
  <div class="container-fluid">
    <!-- start container-fluid -->

    <!-- start card header -->
    <div class="card">
      <div class="card-header">
        <h5>Configurar Gateway de Pagamento</h5>
        <span>
          IMPORTANTE A CONFIGURAÇÃO DEVE SER FEITA DE ACORDO COM OS PARÂMETROS INFORMADOS PELO GATEWAY 
          QUALQUER PODE INTERROMPER AS ROTINAS DE RECEBIMENTO DE VALORES <code>"CONSULTE SEU DESENVOLVEDOR"</code>.
        </span>
        <h6 class="font-primary"><small>* Informe os dados do formulário e clique em <b>SALVAR DADOS</b>, ou <button
              type="button" class="btn btn-primary btn-xs">Clique aqui para INATIVAR O GATEWAY</button></small></h6>
      </div>
      <!-- end card header  -->
      <!-- start view content  -->

      <div class="card-body">

      <form class="form-horizontal">
        <fieldset>

          <!-- Form Name -->
          <h6 class="m-t-10">CONFIGURAÇÕES DO GATEWAY: XXXXXX</h6>
          <hr>


          <!-- Text input-->
          <div class="form-group row">
            <label class="col-lg-12 control-label text-lg-left" for="textinput">E-mails cadastrado na plataforma</label>
            <div class="col-lg-12">
              <input id="textinput" name="textinput" type="text" placeholder="E-mails cadastrado na plataforma"
                class="form-control btn-square input-md">

            </div>
          </div>


          <!-- Text input-->
          <div class="form-group row">
            <label class="col-lg-12 control-label text-lg-left" for="email">API-KEY</label>
            <div class="col-lg-12">
              <input id="email" name="email" type="text" placeholder="API-KEY" class="form-control btn-square input-md">

            </div>
          </div>


          <!-- Text input-->
          <div class="form-group row">
            <label class="col-lg-12 control-label text-lg-left" for="textinput">API-PASSWORD</label>
            <div class="col-lg-12">
              <input id="textinput" name="textinput" type="text" placeholder="API-PASSWORD"
                class="form-control btn-square input-md">

            </div>
          </div>


          <!-- Text input-->
          <div class="form-group row">
            <label class="col-lg-12 control-label text-lg-left" for="textinput">URL de Retorno</label>
            <div class="col-lg-12">
              <input id="textinput" name="textinput" type="text" placeholder="https://url-de-retorno"
                class="form-control btn-square input-md">

            </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group row">
            <label class="col-lg-12 control-label text-lg-left" for="selectbasic">MODO</label>
            <div class="col-lg-12">
              <select id="selectbasic" name="selectbasic" class="form-control btn-square">
                <option value="">Selecione</option>
                <option value="1">PRODUCÃO</option>
                <option value="2">SANDBOX</option>
                <option value="3">PRODUÇÃO</option>
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



      <!-- end view content  -->
      <!-- start card footer  -->
    </div>
    <!-- end card footer  -->


    <!-- end container-fluid -->
  </div>
</div>
<!-- end page-body -->