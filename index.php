<?php 
require_once("vendor/autoload.php");

use \Slim\Slim;
use \stzutski\DB\Sql;
use stzutski\Page;

$app = new Slim();

$app->config('debug',false);



$app->get('/', function(){

    $page = new Page();
    $page->setTpl("index");
  
});


$app->get('/login', function(){

    $page = new Page([
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl("login");
  
});

$app->get('/logout', function(){

    $page = new Page([
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl("login");
  
});


$app->get('/cadastre-se', function(){

    $page = new Page([
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl("cadastre-se");
  
});





$app->run();

?>
