<?php

use stzutski\Page;


$app->get('/administradores', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-admins-lista");

});


$app->get('/administradores/cadastro/:uid', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Cadastro de Administrador' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-admins-cad");

});


$app->get('/empresas', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Empresas do Sistema' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-empresas-lista");

});


$app->get('/empresas/cadastro/:uid', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Cadastro de Empresas' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-empresas-cad");

});




$app->get('/configuracoes-globais', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Configurações Globais' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-configuracoes");

});



$app->get('/gateways', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Portais de Pagamento' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-gateways-lista");

});



$app->get('/gateways/configurar/:uid', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Configuração de Portal de Pagamento' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-gateways-conf");

});




$app->get('/servicos', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Serviços Cadastrados' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-servicos-lista");

});


$app->get('/servicos/cadastro/:uid', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Cadastro de Serviço' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-servicos-cad");

});


$app->get('/servicos/cadastro/etapas/:uid', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Cadastro de Etapas do Serviço' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>"master")
    ]);
    $page->setTpl("master-servicos-etapas-cad");

});



?>
