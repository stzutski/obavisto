<?php 
require_once("config.php");
require_once("vendor/autoload.php");

use \Slim\Slim;
// use \stzutski\DB\Sql;

$app = new Slim();



require_once("routes/routes-site.php");//contem as rotas comuns ao site (login logout esqueci a senha)
require_once("routes/routes-clientes.php");//contem as rotas comuns ao cliente final
require_once("routes/routes-master.php");//contem as rotas comuns ao cliente final






$app->run();

?>
