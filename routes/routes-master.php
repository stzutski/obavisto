<?php

use stzutski\Page;


$app->get('/administradores', function(){

    $page = new Page([
        "data"=>array("NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-admins-lista");

});


$app->get('/administradores/cadastro', function(){

    $page = new Page([
        "data"=>array("NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-admins-cad");

});


$app->get('/empresas', function(){

    $page = new Page([
        "data"=>array("NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-empresas-lista");

});


$app->get('/empresas/cadastro', function(){

    $page = new Page([
        "data"=>array("NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-empresas-cad");

});




$app->get('/configuracoes-globais', function(){

    $page = new Page([
        "data"=>array("NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-configuracoes");

});



$app->get('/gateways', function(){

    $page = new Page([
        "data"=>array("NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-gateways-lista");

});



$app->get('/gateways/cadastro', function(){

    $page = new Page([
        "data"=>array("NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-gateways-cad");

});




$app->get('/servicos', function(){

    $page = new Page([
        "data"=>array("NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-servicos-lista");

});


$app->get('/servicos/cadastro', function(){

    $page = new Page([
        "data"=>array("NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-servicos-cad");

});



?>
