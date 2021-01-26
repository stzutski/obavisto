<?php

use stzutski\Page;


$app->get('/administradores', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema',
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-admins-lista");

});


$app->get('/administradores/cadastro', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Cadastro de Administrador',
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-admins-cad");

});


$app->get('/empresas', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Empresas do Sistema',
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-empresas-lista");

});


$app->get('/empresas/cadastro', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Cadastro de Empresas',
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-empresas-cad");

});




$app->get('/configuracoes-globais', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Configurações Globais',
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-configuracoes");

});



$app->get('/gateways', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Portais de Pagamento',
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-gateways-lista");

});



$app->get('/gateways/configurar', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Configuração de Portal de Pagamento',
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-gateways-conf");

});




$app->get('/servicos', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Serviços Cadastrados',
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-servicos-lista");

});


$app->get('/servicos/cadastro', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Cadastro de Serviço',
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-servicos-cad");

});



?>
