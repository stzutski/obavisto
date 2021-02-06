<?php
use stzutski\Page;
use stzutski\model\User;

//variaveis do template de nao logados
$tpl_vars = array(
    "titleApp"=>'ObaVisto Login do Usuário',
    "urlApp"=>URLAPP,
    "urlFormCadastro"=>URLCADASTRO,
    "urlPwdRecovery"=>URLPWDRECOVERY,
    "urlFormLogin"=>URLPROCLOGIN,
    "urlPoliticas"=>URLPPRIVACIDADE);



// rotas abertas sem login
$app->get('/', function(){

  $page = new Page([
      "header"=>false,
      "footer"=>false,
      "data"=> array(
          "titleApp"=>'ObaVisto Login do Usuário',
          "urlApp"=>URLAPP,
          "urlFormCadastro"=>URLCADASTRO,
          "urlPwdRecovery"=>URLPWDRECOVERY,
          "urlFormLogin"=>URLPROCLOGIN,
          "urlPoliticas"=>URLPPRIVACIDADE)
  ]);
  $page->setTpl("login");

});

$app->get('/login', function(){

  $page = new Page([
      "header"=>false,
      "footer"=>false,
      "data"=>array(
          "titleApp"=>'ObaVisto Login do Usuário',
          "urlApp"=>URLAPP,
          "urlFormCadastro"=>URLCADASTRO,
          "urlPwdRecovery"=>URLPWDRECOVERY,
          "urlFormLogin"=>URLPROCLOGIN,
          "urlPoliticas"=>URLPPRIVACIDADE)
  ]);
  $page->setTpl("login");

});


// rotina de processamento do login do usuario
$app->post('/proc-login', function() {
  $dashboard  = false;
  $userLOGIN  = strtolower($_POST['login']['userlogin']);
  $pwdLOGIN   = strtolower($_POST['login']['password']);

  $res = User::login($userLOGIN, $pwdLOGIN);

  //confirma se a session foi criada e se existe permissão de algum tipo
  if(isset($_SESSION['obsys']['permissao_user'])){

    if($_SESSION['obsys']['permissao_user']=='cliente'){
      $dashboard = URLAPP .'dashboard';
    }else{
      $dashboard = URLAPP .'dashboard/' . $_SESSION['obsys']['permissao_user'];
    }

  }else{
    $dashboard = URLAPP .'/';
  }

  //redireciona o usuario para a dashboard ou para a pagina de login
  if($dashboard){
  header("Location: " . $dashboard);
  }
  exit;
});


// rotina de cadastro do usuario
$app->post('/proc-cadastro', function(){

  $page = new Page([
      "header"=>false,
      "footer"=>false,
      "data"=>array(
          "titleApp"=>'ObaVisto Login do Usuário',
          "urlApp"=>URLAPP,
          "urlFormCadastro"=>URLCADASTRO,
          "urlPwdRecovery"=>URLPWDRECOVERY,
          "urlFormLogin"=>URLPROCLOGIN,
          "urlPoliticas"=>URLPPRIVACIDADE)
  ]);
  $page->setTpl("cadastro");

});

$app->get('/recuperar-senha', function(){

  $page = new Page([
      "header"=>false,
      "footer"=>false,
      "data"=>array(
          "titleApp"=>'ObaVisto Login do Usuário',
          "urlApp"=>URLAPP,
          "urlFormCadastro"=>URLCADASTRO,
          "urlPwdRecovery"=>URLPWDRECOVERY,
          "urlFormLogin"=>URLPROCLOGIN,
          "urlPoliticas"=>URLPPRIVACIDADE)
  ]);
  $page->setTpl("login");

});
