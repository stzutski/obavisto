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


$app->get('/perfil', function(){

    $page = new Page();
    $page->setTpl("edit-profile");
  
});

$app->get('/suporte', function(){

    $page = new Page();
    $page->setTpl("duvidas-frequentes");
  
});

$app->get('/cadastre-se', function(){

    $page = new Page([
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl("cadastre-se");
  
});

$app->get('/confirmar-seu-cadastro', function(){

    $page = new Page([
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl("confirme-seu-cadastro");
  
});

$app->get('/confirmacao-de-cadastro', function(){

    $page = new Page([
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl("cadastro-confirmado-com-sucesso");
  
});

$app->get('/teste', function(){

    $page = new Page([
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl("contratar-servico-inicial");
  
});





$app->run();

?>
