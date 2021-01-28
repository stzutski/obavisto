<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- start page-body -->
<div class="page-body p-t-30">
  <div class="container-fluid">
    <!-- start container-fluid -->

    <!-- start card header -->
    <div class="card">
      <div class="card-header">
        <h5>Gateways de Pagamento</h5>
        <span>
          Gateways de Pagamento os sistemas responsáveis pelo receber pagamentos online em cartão, transferência ou
          boleto.<br />
          <b>NOTA:</b> Não é possível adicionar novos gateways de pagamento através deste painel de administração, entretanto é
          possível alterar as configurações já existentes.<br />
        </span>
        <h6 class="font-primary"><small>* Para alterar / visualizar um cadastro clique sobre o nome do Gateway.</small>
        </h6>
      </div>
      <!-- end card header  -->
      <!-- start view content  -->


      <div class="card-body">
        <div class="table-responsive">
        <table class="display" id="basic-8">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Site</th>
              <th>Modo</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="gateways/configurar/1">Stripe</a></td>
              <td><a href="https://stripe.com/br">https://stripe.com/br</a></td>
              <td>PRODUÇÃO</td>
              <td><b>ATIVO</b></td>
            </tr>
            <tr>
              <td><a href="gateways/configurar/2">BS2</a></td>
              <td><a href="https://empresas.bancobs2.com.br/">https://empresas.bancobs2.com.br/</a></td>
              <td>HOMOLOGAÇÃO</td>
              <td><b>INATIVO</b></td>
            </tr>
            <tr>
              <td><a href="gateways/configurar/3">Paypal</a></td>
              <td><a href="https://www.paypal.com/br/">https://www.paypal.com/br/</a></td>
              <td>PRODUÇÃO</td>
              <td><b>ATIVO</b></td>
            </tr>
            <tr>
              <td><a href="gateways/configurar/4">Koin</a></td>
              <td><a href="https://www.koin.com.br">https://www.koin.com.br</a></td>
              <td>HOMOLOGAÇÃO</td>
              <td><b>INATIVO</b></td>
            </tr>
            <tr>
              <td><a href="gateways/configurar/5">Parcelex</a></td>
              <td><a href="https://www.parcelex.com.br/">https://www.parcelex.com.br/</a></td>
              <td>PRODUÇÃO</td>
              <td><b>ATIVO</b></td>
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