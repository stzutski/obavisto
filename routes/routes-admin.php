<?php  

use stzutski\Page;


$app->get('/financeiro/pedidos', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION['usersys'])
    ]);
    $page->setTpl("admin/admin-financeiro-pedidos");

});

$app->get('/financeiro/lista-filtro/:filtro/:uid', function($filtro, $uid){

    
    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION['usersys'],
                "filtro"=>strtoupper($filtro),
                "uid"=>$uid
                )
    ]);
    $page->setTpl("admin/admin-financeiro-lista-pedidos");

});


$app->get('/servicos/listar', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Serviços Disponíveis' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION['usersys'])
    ]);
    $page->setTpl("admin/admin-servicos-lista");

});


$app->get('/servicos/cadastro/:uid', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Serviços Disponíveis' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION['usersys'])
        ]);



    $page->setTpl("admin/admin-servicos-detalhes");

});


$app->get('/clientes', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION['usersys'])
    ]);
    $page->setTpl("admin/admin-clientes-lista");

});


$app->get('/clientes/cadastro/:uid', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION['usersys'])
    ]);
    $page->setTpl("admin/admin-clientes-cadastro");

});


$app->get('/suporte/chat', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION['usersys'])
    ]);
    $page->setTpl("admin/admin-suporte-chat");

});


$app->get('/suporte/tickets', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION['usersys'])
    ]);
    $page->setTpl("admin/admin-suporte-tickets");

});







?>
