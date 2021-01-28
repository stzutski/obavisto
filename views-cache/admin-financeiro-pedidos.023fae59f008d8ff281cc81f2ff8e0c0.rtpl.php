<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="page-body p-t-30">

  <div class="container-fluid">

    <div class="card">
      <div class="card-header">
        <h5>Lista de Pedidos</h5>
        <span>
          Pedidos são compras realizadas em sua plataforma, a lista pedidos contém todo o histórico de pedidos já realizados.
        </span>
        <h6 class="font-danger"><small>* Para visualizar mais informações clique sobre o número do pedido.</small></h6>
      </div>
      
      
      
      <div class="card-body">
        <div class="table-responsive">
          <table class="display" id="basic-8">
            <thead>
              <tr>
                <th>#</th>
                <th>DATA</th>
                <th>CLIENTE</th>
                <th>ORIGEM</th>
                <th>ITEM</th>
                <th>VALOR</th>
                <th>M.PGTO</th>
                <th>STATUS</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="financeiro/pedido/0">001</a></td>
                <td>10/02/2021</td>
                <td><a href="clientes/detalhes/0">Raquel da Silva Soares</a></td>
                <td>Link AF.</td>
                <td><a href="servicos/detalhes/0">VISTO B-2 USA</a></td>
                <td>R$ 585,00</td>
                <td><a href="financeiro/resumo/gateway/0">Gerencianet (Boleto)</a></td>
                <td><a href="financeiro/resumo/status/0">PAGO</a></td>
              </tr>
              <tr>
                <td><a href="financeiro/pedido/0">002</a></td>
                <td>11/02/2021</td>
                <td><a href="clientes/detalhes/0">Rubia Souza</a></td>
                <td>Google</td>
                <td><a href="servicos/detalhes/0">VISTO B-2 USA</a></td>
                <td>R$ 585,00</td>
                <td><a href="financeiro/resumo/gateway/0">Gerencianet (Cartão)</a></td>
                <td><a href="financeiro/resumo/status/0">PAGO</a></td>
              </tr>
              <tr>
                <td><a href="financeiro/pedido/0">003</a></td>
                <td>11/02/2021</td>
                <td><a href="clientes/detalhes/0">Luiz Miranda Carvalho</a></td>
                <td>Instagram</td>
                <td><a href="servicos/detalhes/0">VISTO B-2 USA</a></td>
                <td>R$ 585,00</td>
                <td><a href="financeiro/resumo/gateway/0">Gerencianet (Cartão)</a></td>
                <td><a href="financeiro/resumo/status/0">N.APROVADO</a></td>
              </tr>
              <tr>
                <td><a href="financeiro/pedido/0">004</a></td>
                <td>12/02/2021</td>
                <td><a href="clientes/detalhes/0">Ludmilla Luz</a></td>
                <td>Link AF.</td>
                <td><a href="servicos/detalhes/0">VISTO E-1 USA</a></td>
                <td>R$ 1.080,00</td>
                <td><a href="financeiro/resumo/gateway/0">Gerencianet (Boleto)</a></td>
                <td><a href="financeiro/resumo/status/0">AGUARDANDO</a></td>
              </tr>
              <tr>
                <td><a href="financeiro/pedido/0">005</a></td>
                <td>13/02/2021</td>
                <td><a href="clientes/detalhes/0">Júlian Gun</a></td>
                <td>Direto</td>
                <td><a href="servicos/detalhes/0">VISTO B-2 USA</a></td>
                <td>R$ 585,00</td>
                <td><a href="financeiro/resumo/gateway/0">Gerencianet (Cartão)</a></td>
                <td><a href="financeiro/resumo/status/0">PAGO</a></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>#</th>
                <th>DATA</th>
                <th>CLIENTE</th>
                <th>ORIGEM</th>
                <th>ITEM</th>
                <th>VALOR</th>
                <th>M.PGTO</th>
                <th>STATUS</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>



    </div>

  </div>

</div>
