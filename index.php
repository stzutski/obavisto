<?php 
require_once("vendor/autoload.php");

use \Slim\Slim;
use \stzutski\DB;

$app = new Slim();

$app->config('debug',true);

$app->get('/', function(){

    //echo "OK";
    $sql = new Sql();
    $results = $sql->select("SELECT * FROM usuarios");
  
});

$app->run();

?>
