<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="page-body">

  <div class="container-fluid">

    <!-- start card header -->
    <div class="card">
      <div class="card-header">
        <h5>Administradores da Empresa</h5>
        <span>
          Administradores de empresa, são usuário com privilégios de gestão de clientes, empresa e os serviços
          oferecidos.<br />
          Podem criar sub administradores apenas com permissão de trabalho <code>"EX: FUNCIONÁRIOS DA EMPRESA"</code>.
        </span>
        <h6 class="font-danger"><small>* Informe os dados do formulário e clique em <b>SALVAR DADOS</b>, ou <button type="button" class="btn btn-danger btn-xs">Clique aqui para excluir</button></small></h6>
        
      </div>
      <div class="card-body">
          <!-- end card header  -->

          


          <form class="form-horizontal">
            <fieldset>

              <!-- Form Name -->
              <h6 class="m-t-10">Cadastro de Administradores</h6>
              <hr>


              <!-- Text input-->
              <div class="form-group row">
                <label class="col-lg-12 control-label text-lg-left" for="textinput">Nome do Administrador</label>
                <div class="col-lg-12">
                  <input id="textinput" name="textinput" type="text" placeholder="Nome do administrador"
                    class="form-control btn-square input-md">

                </div>
              </div>


              <!-- Text input-->
              <div class="form-group row">
                <label class="col-lg-12 control-label text-lg-left" for="email">E-mail do Administrador</label>
                <div class="col-lg-12">
                  <input id="email" name="email" type="text" placeholder="E-mail"
                    class="form-control btn-square input-md">

                </div>
              </div>


              <!-- Text input-->
              <div class="form-group row">
                <label class="col-lg-12 control-label text-lg-left" for="textinput">Telefone</label>
                <div class="col-lg-12">
                  <input id="textinput" name="textinput" type="text" placeholder="+XX 99999999999999"
                    class="form-control btn-square input-md">

                </div>
              </div>

              <!-- Select Basic -->
              <div class="form-group row">
                <label class="col-lg-12 control-label text-lg-left" for="selectbasic">Empresa</label>
                <div class="col-lg-12">
                  <select id="selectbasic" name="selectbasic" class="form-control btn-square">
                    <option value="">Selecione</option>
                    <option value="1">MATRIZ</option>
                    <option value="2">XXX</option>
                    <option value="3">YYYY</option>
                    <option value="4">ZZZZ</option>
                    <option value="5">HHHH</option>
                  </select>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group row">
                <label class="col-lg-12 control-label text-lg-left" for="textinput">Senha</label>
                <div class="col-lg-12">
                  <input id="textinput" name="textinput" type="text" placeholder="*******"
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



          <!-- start card footer  -->
      </div>
    </div>
    <!-- end card footer  -->



  </div>

</div>