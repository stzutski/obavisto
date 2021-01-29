<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- start page-body -->
<div class="page-body p-t-30">
  <div class="container-fluid">
    <!-- start container-fluid -->

    <!-- start card header -->
    <div class="card">
      <div class="card-header">
        <h5>Detalhes do Serviços</h5>
        <span>
          Você tem permissão de visualização dos detalhes do serviço selecionado.<br />
          Só o<code>"USUÁRIO MASTER"</code> pode adicionar ou alterar os serviços que disponíveis para sua empresa.
        </span>
      </div>
      <!-- end card header  -->
      <!-- start view content  -->

      <div class="card-body">

        <form class="form-horizontal" editable="false">
          <fieldset>

            <!-- Form Name -->
            <h6 class="m-t-10">Detalhes</h6>
            <hr>


            <!-- Text input-->
            <div class="form-group row">
              <label class="col-lg-12 control-label text-lg-left" for="textinput">Nome do Serviço</label>
              <div class="col-lg-12">
                <input id="textinput" name="textinput" type="text" placeholder="Ex: Visto E-1"
                  class="form-control btn-square input-md">

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group row">
              <label class="col-lg-12 control-label text-lg-left" for="email">Breve Descrição do Serviço</label>
              <div class="col-lg-12">
                <input id="email" name="email" type="text" placeholder="Ex: Assessoria para emissão de visto E-1"
                  class="form-control btn-square input-md">

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group row">
              <label class="col-lg-12 control-label text-lg-left" for="textinput">Plano</label>
              <div class="col-lg-12">
                <input id="textinput" name="textinput" type="text" placeholder="ex: Individual"
                  class="form-control btn-square input-md">

              </div>
            </div>



            <!-- Text input-->
            <div class="form-group row">
              <label class="col-lg-12 control-label text-lg-left" for="textinput">Valor</label>
              <div class="col-lg-12">
                <input id="textinput" name="textinput" type="text" placeholder="1500,00"
                  class="form-control btn-square input-md">

              </div>
            </div>


            <!-- Select Basic -->
            <div class="form-group row">
              <label class="col-lg-12 control-label text-lg-left" for="selectbasic">Disponível</label>
              <div class="col-lg-12">
                <select id="selectbasic" name="selectbasic" class="form-control btn-square">
                  <option value="">Selecione</option>
                  <option value="1">SIM</option>
                  <option value="2">NÃO</option>
                </select>
              </div>
            </div>


          </fieldset>
        </form>

        <br />
        <br />

        <h5>Etapas do Serviço</h5>
        

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Etapa</th>
                <th scope="col">Descrição</th>
                <th scope="col">Responsável</th>
                <th scope="col">Pré Requisito</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Baixar E-book manual</td>
                <td>Manual do cliente</td>
                <td>CLIENTE</td>
                <td>NÃO</td>
                <td><a href="servicos/cadastro/etapas/1"><i data-feather="edit"></i> </a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Contratar Serviço</td>
                <td>Compra online no site</td>
                <td>CLIENTE</td>
                <td>NÃO</td>
                <td><a href="servicos/cadastro/etapas/2"><i data-feather="edit"></i> </a>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Confirmação do Pgto.</td>
                <td>Confirmação do Gateway de Pgto.</td>
                <td>SISTEMA</td>
                <td>SIM ETAPA(2)</td>
                <td><a href="servicos/cadastro/etapas/3"><i data-feather="edit"></i> </a>
                </td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Envio de Docs.</td>
                <td>Upload do docs.</td>
                <td>CLIENTE</td>
                <td>SIM ETAPA(3)</td>
                <td><a href="servicos/cadastro/etapas/4"><i data-feather="edit"></i> </a>
                </td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Conferência dos docs.</td>
                <td>Confirmação dos dados</td>
                <td>EQUIPE</td>
                <td>SIM ETAPA(4)</td>
                <td><a href="servicos/cadastro/etapas/5"><i data-feather="edit"></i> </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>






      </div>


      <!-- end view content  -->
      <!-- start card footer  -->
    </div>
    <!-- end card footer  -->


    <!-- end container-fluid -->
  </div>
</div>
<!-- end page-body -->
