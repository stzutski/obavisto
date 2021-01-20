<?php 
require_once("vendor/autoload.php");

use \Slim\Slim;
use \stzutski\DB\Sql;

$app = new Slim();

$app->config('debug',true);

$app->get('/', function(){

    echo "OK,,,<br />";
    $sql = new Sql();
    $results = $sql->select("SELECT * FROM usuarios");

    echo json_encode($results);
  
});

$app->run();

?>
