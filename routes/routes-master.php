<?php
use stzutski\Page;
use stzutski\model\User;

//home do usuario master
$app->get('/dashboard/master', function(){

    //User::verifyLoginAdmin();
    User::checkLevel($_SESSION[User::SESSION]['permissao_user'],'master');

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Master Dashboard' . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("home-master");

});

//(MASTER) lista de administradores cadastrados
$app->get('/dashboard/master/administradores', function(){

    //User::verifyLoginAdmin();
    User::checkLevel($_SESSION[User::SESSION]['permissao_user'],'master');

    //retorna lista de usuarios
    $listaUsuarios = User::listAllAdmins();
    $liAdmins = $listaUsuarios[0];
     // var_dump($liAdmins);
     // exit;

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("master/master-admins-lista", [
      'admins'=>$listaUsuarios
    ]);


});

//(MASTER) detalhes do cadastro do administrador (UPDATE)
$app->get('/dashboard/master/administradores/cadastro/:uid', function($uid){

    //User::verifyLoginAdmin();
    User::checkLevel($_SESSION[User::SESSION]['permissao_user'],'master');

    if($uid!=0){
      if($uid!=0){
      $dataAdmin      = User::getAdminData($uid);
      $_data_admin    = $dataAdmin[0];
    }
    //var_dump($dataAdmin);
    //exit;
  }else{
    $_data_admin = array('nome_user'=>'','sobrenome_user'=>'','email_user'=>'','telefone_user'=>'');
  }

    $listaEmpresas = array('combo'=>true,'campo'=>'desc_empresa','value'=>'id_empresa','selected'=>'');
    $empresas       = User::listaEmpresas($listaEmpresas);

    // var_dump($empresas);
    // exit;

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("master/master-admins-cad", [
      'dataAdmin'=>$_data_admin,
      'dataEmpresa'=>$empresas
    ]);

});



//(MASTER) lista de empresas cadastradas
$app->get('/dashboard/master/empresas', function(){

    //User::verifyLoginAdmin();
    User::checkLevel($_SESSION[User::SESSION]['permissao_user'],'master');

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("master/master-empresas-lista");

});



//(MASTER) detalhes do cadastro do administrador (UPDATE)
$app->get('/dashboard/master/empresas/cadastro/:uid', function($uid){

    //User::verifyLoginAdmin();
    User::checkLevel($_SESSION[User::SESSION]['permissao_user'],'master');

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("master/master-empresas-cad");

});

//(MASTER) pagina com as configuracoes globais do sistema
$app->get('/dashboard/master/configuracoes-globais', function(){

    //User::verifyLoginAdmin();
    User::checkLevel($_SESSION[User::SESSION]['permissao_user'],'master');

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("master/master-configuracoes");

});


//(MASTER) lista de gateways cadastrados
$app->get('/dashboard/master/gateways', function(){

    //User::verifyLoginAdmin();
    User::checkLevel($_SESSION[User::SESSION]['permissao_user'],'master');

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("master/master-gateways-lista");

});

//(MASTER) configuracoes do gateway
$app->get('/dashboard/master/gateways/configurar/:uid', function($uid){

    //User::verifyLoginAdmin();
    User::checkLevel($_SESSION[User::SESSION]['permissao_user'],'master');

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("master/master-gateways-conf");

});


//(MASTER) lista de servicos cadastrados
$app->get('/dashboard/master/servicos', function(){

    //User::verifyLoginAdmin();
    User::checkLevel($_SESSION[User::SESSION]['permissao_user'],'master');

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("master/master-servicos-lista");

});

//(MASTER) detalhes do cadastro da etapa do servico (UPDATE)
$app->get('/dashboard/master/servicos/cadastro/etapas/:uid', function($uid){

    //User::verifyLoginAdmin();
    User::checkLevel($_SESSION[User::SESSION]['permissao_user'],'master');

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("master/master-servicos-etapas-cad");

});


//(MASTER) detalhes do cadastro do servico (UPDATE)
$app->get('/dashboard/master/servicos/cadastro/:uid', function($uid){

    //User::verifyLoginAdmin();
    User::checkLevel($_SESSION[User::SESSION]['permissao_user'],'master');

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("master/master-servicos-cad");

});


?>
