<?php

use stzutski\Page;


$app->get('/', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("home");
  
});


$app->get('/login', function(){

    $page = new Page([
        "titleApp"=>TITLEAPP,
        "urlApp"=>URLAPP,
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl("login");
  
});

$app->get('/logout', function(){

    $page = new Page([
        "titleApp"=>TITLEAPP,
        "urlApp"=>URLAPP,
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl("login");
  
});


$app->get('/cadastre-se', function(){

    $page = new Page([
        "titleApp"=>TITLEAPP,
        "urlApp"=>URLAPP,
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl("cadastre-se");
  
});

$app->get('/confirmar-seu-cadastro', function(){

    $page = new Page([
        "titleApp"=>TITLEAPP,
        "urlApp"=>URLAPP,
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl("confirme-seu-cadastro");
  
});

$app->get('/confirmacao-de-cadastro', function(){

    $page = new Page([
        "titleApp"=>TITLEAPP,
        "urlApp"=>URLAPP,
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl("cadastro-confirmado-com-sucesso");
  
});


?>