<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="page-body p-t-30">

  <div class="container-fluid">

    <div class="card">
      <div class="card-header">
        <h5>Administradores da Empresa</h5>
        <span>
          Administradores de empresa, são usuário com privilégios de gestão de clientes, empresa e os serviços oferecidos.<br />
          Podem criar sub administradores apenas com permissão de trabalho <code>"EX: FUNCIONÁRIOS DA EMPRESA"</code>.
        </span>
        <h6 class="font-danger"><small>* Para alterar um cadastro clique sobre o nome do administrador.</small></h6>
      </div>



      <div class="card-body">
        <div class="table-responsive">
          <table class="display" id="basic-8">
            <thead>
              <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Empresa</th>
                <th>Desde</th>
                <th>Ult.Login</th>
              </tr>
            </thead>
            <tbody>
              <?php $counter1=-1;  if( isset($admins) && ( is_array($admins) || $admins instanceof Traversable ) && sizeof($admins) ) foreach( $admins as $key1 => $value1 ){ $counter1++; ?>

              <tr>
                <td><a href="dashboard/master/administradores/cadastro/<?php echo htmlspecialchars( $value1["id_user"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome_user"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php echo htmlspecialchars( $value1["sobrenome_user"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></td>
                <td><?php echo htmlspecialchars( $value1["email_user"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["telefone_user"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><a href="dashboard/master/empresas/cadastro/<?php echo htmlspecialchars( $value1["id_empresa"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desc_empresa"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></td>
                <td><?php echo date('d/m/Y H:i:s', $value1["dt_user"]); ?></td>
                <td><?php echo date('d/m/Y H:i:s', $value1["lst_login_user"]); ?></td>
              </tr>
              <?php } ?>


              <!-- <tr>
                <td><a href="dashboard/master/administradores/cadastro/1">Fernando de Jesus</a></td>
                <td>admin@obavisto.com.br</td>
                <td>+55 11 99999-9999</td>
                <td><b>MATRIZ</b></td>
                <td>06/02/2021</td>
                <td>Nunca</td>
              </tr>
                <td><a href="dashboard/master/administradores/cadastro/2">Rebecca Abravanel</a></td>
                <td>beca@obavisto.com.br</td>
                <td>+55 11 99888-9988</td>
                <td>Filial Interlagos</td>
                <td>06/02/2021</td>
                <td>Nunca</td>
              </tr>
              <tr>
                <td><a href="dashboard/master/administradores/cadastro/3">Maximus Decimus Meridius</a></td>
                <td>roma1@obavisto.com.br</td>
                <td>+39 06 49159999</td>
                <td>Desp. Itália</td>
                <td>06/02/2021</td>
                <td>Nunca</td>
              </tr>
              <tr>
                <td><a href="dashboard/master/administradores/cadastro/4">Joseph Robinette (Biden)</a></td>
                <td>eua@obavisto.com.br</td>
                <td>+1 202-456-1111</td>
                <td>White House</td>
                <td>20/01/2021</td>
                <td>Nunca</td>
              </tr> -->
            </tbody>
            <tfoot>
              <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Empresa</th>
                <th>Desde</th>
                <th>Ult.Login</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>



    </div>

  </div>

</div>
