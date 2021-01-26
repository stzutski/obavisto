<?php if(!class_exists('Rain\Tpl')){exit;}?>

<li class="sidebar-list">
  <a class="sidebar-link sidebar-title link-nav" href="<?php echo htmlspecialchars( $urlApp, ENT_COMPAT, 'UTF-8', FALSE ); ?>#">
    <i data-feather="home"></i><span>Dashboard</span></a>
</li>


<li class="sidebar-list"><a class="sidebar-link sidebar-title cursor-pointer"><i
      data-feather="users"></i><span>Administradores</span></a>
  <ul class="sidebar-submenu">
    <li><a href="administradores">Listar</a></li>
    <li><a href="administradores/cadastro">Cadastro</a></li>
  </ul>
</li>

<li class="sidebar-list"><a class="sidebar-link sidebar-title cursor-pointer">
  <i data-feather="home"></i><span>Empresas</span></a>
  <ul class="sidebar-submenu">
    <li><a href="empresas">Listar</a></li>
    <li><a href="empresas/cadastro">Cadastro</a></li>
  </ul>
</li>


<li class="sidebar-list">
  <a class="sidebar-link sidebar-title link-nav" href="configuracoes-globais">
    <i data-feather="settings"></i><span>Configurar</span></a>
</li>



<li class="sidebar-list"><a class="sidebar-link sidebar-title cursor-pointer">
  <i data-feather="users"></i><span>Gateways de
      Pgto.</span></a>
  <ul class="sidebar-submenu">
    <li><a href="gateways">Listar</a></li>
    <li><a href="gateways/configurar">Configurar</a></li>
  </ul>
</li>



<li class="sidebar-list"><a class="sidebar-link sidebar-title cursor-pointer"><i
      data-feather="briefcase"></i><span>Serviços</span></a>
  <ul class="sidebar-submenu">
    <li><a href="servicos">Listar</a></li>
    <li><a href="servicos/cadastro">Cadastro</a></li>
  </ul>
</li>