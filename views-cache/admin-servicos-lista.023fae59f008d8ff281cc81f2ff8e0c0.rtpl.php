<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- start page-body -->
<div class="page-body p-t-30">
  <div class="container-fluid">
    <!-- start container-fluid -->

    <!-- start card header -->
    <div class="card">
      <div class="card-header">
        <h5>Lista de Serviços Disponíveis</h5>
        <span>
          Os serviços aqui cadastrados irão estar disponíveis no painel de controle dos administradores da empresa
          a ativação do serviço fica condicionada ao administrador da empresa. Só o<code>"USUÁRIO MASTER"</code> pode configurar
          os tipos de serviços que estarão disponíveis para as empresas.
        </span>
        <h6 class="font-primary"><small>* Para alterar um cadastro clique sobre o nome do serviço.</small></h6>

      </div>
      <!-- end card header  -->

      <!-- start view content  -->

      <div class="card-body">
        <div class="table-responsive">
          <table class="display" id="basic-8">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Plano</th>
                <th>Valor</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="servicos/cadastro/1">VISTO B-2 USA</a></td>
                <td>Assessoria emissão visto B-2 USA</td>
                <td>Individual</td>
                <td>R$ 585,00</td>
                <td>Disponível</td>
              </tr>
              <tr>
                <td><a href="servicos/cadastro/1">VISTO B-2 USA</a></td>
                <td>Assessoria emissão visto B-2 USA</td>
                <td>2 ~ 5 pessoas</td>
                <td>R$ 350,00 p/pessoa</td>
                <td>Disponível</td>
              </tr>
              <tr>
                <td><a href="servicos/cadastro/1">VISTO E-1 USA</a></td>
                <td>Assessoria emissão visto E-1 USA</td>
                <td>Individual</td>
                <td>R$ 1.080,00</td>
                <td>Disponível</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Plano</th>
                <th>Valor</th>
                <th>Status</th>
              </tr>
            </tfoot>
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