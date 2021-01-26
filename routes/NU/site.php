<?php
use stzutski\Page;


$app->get('/', function(){

    $page = new Page();
    $page->setTpl("home", array());
  
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


?>