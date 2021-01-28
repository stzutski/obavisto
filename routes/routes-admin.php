<?php  

use stzutski\Page;


$app->get('/financeiro/pedidos', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION['usersys'])
    ]);
    $page->setTpl("admin-financeiro-pedidos");

});


$app->get('/clientes', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION['usersys'])
    ]);
    $page->setTpl("admin-clientes-lista");

});


$app->get('/clientes/cadastro/:uid', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION['usersys'])
    ]);
    $page->setTpl("admin-clientes-cadastro");

});



$app->get('/suporte/chat', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION['usersys'])
    ]);
    $page->setTpl("admin-suporte-chat");

});


$app->get('/suporte/tickets', function(){

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION['usersys'])
    ]);
    $page->setTpl("admin-suporte-tickets");

});







?>
