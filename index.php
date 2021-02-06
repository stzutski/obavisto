<?php
require_once("config.php");
require_once("vendor/autoload.php");

use \Slim\Slim;
use stzutski\Page;

$app = new Slim();
// use \stzutski\DB\Sql;


// caso usuario não logado
if(!isset($_SESSION['obsys'])){

  require_once('routes/rotas-semlogin.php');


// caso usuario ESTEJA LOGADO
}else{

//require_once("routes/routes-site.php");//contem as rotas comuns ao site (login logout esqueci a senha)
//require_once("routes/routes-clientes.php");//contem as rotas comuns ao cliente final
require_once("routes/routes-admin.php");//contem as rotas comuns ao cliente final
require_once("routes/routes-master.php");//contem as rotas comuns ao cliente final
require_once("routes/routes-cliente.php");//contem as rotas comuns ao cliente final

}


// ROTAS GLOBAIS
// rotina de logout
$app->get('/logout', function(){
  session_destroy();
  session_start();
  header("Location: ". URLAPP ."login");
  exit;
});


// erro 403
$app->get('/permissao-necessaria', function(){
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

$page->setTpl("error-403");
});



$app->run();
?>
