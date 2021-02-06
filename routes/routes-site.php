<?php

use stzutski\Page;
use stzutski\Model\User;


$app->get('/', function(){

/*
        $us = new User();
        $us->login('roberto.rsc@gmail.com','32125');

        $res = $us->getValues();

        var_dump($res);
        exit;
*/


    if(!isSet($_SESSION['usersys']) || $_SESSION['usersys']==''){

    $page = new Page([
        "header"=>false,
        "footer"=>false,
        "data"=>array(
            "titleApp"=>'ObaVisto Login do Usuário',
            "urlApp"=>URLAPP,
            "urlFormLogin"=>URLLOGIN)
    ]);
    $page->setTpl("login");

    }else{

        $page = new Page([
            "data"=>array(
                    "titleApp"=>TITLEAPP . ' - ' . $_SESSION['TITAPP'],
                    "urlApp"=>URLAPP,
                    "NAVLEVEL"=>$_SESSION['usersys'])
        ]);
        $page->setTpl("home-".$_SESSION['usersys']);

    }


});


$app->post('/', function(){

    $userLOGIN  = strtolower($_POST['login']['userlogin']);
    $pwdLOGIN   = strtolower($_POST['login']['password']);


    if($userLOGIN=='cliente' && $pwdLOGIN=='cliente')
    {
        $_SESSION['usersys'] = $userLOGIN;
        $_SESSION['TITAPP']  = 'Painel do Cliente';


        $page = new Page([
            "data"=>array(
                    "titleApp"=>TITLEAPP . $_SESSION['TITAPP'],
                    "urlApp"=>URLAPP,
                    "NAVLEVEL"=>$userLOGIN)
        ]);
        $page->setTpl("home-" . $userLOGIN);

    }

    elseif($userLOGIN=='admin' && $pwdLOGIN=='admin')
    {

        $_SESSION['usersys'] = $userLOGIN;
        $_SESSION['TITAPP']  = 'Painel do Administrador';

        $page = new Page([
            "data"=>array(
                    "titleApp"=>TITLEAPP . $_SESSION['TITAPP'],
                    "urlApp"=>URLAPP,
                    "NAVLEVEL"=>$userLOGIN)
        ]);
        $page->setTpl("home-" . $userLOGIN);


    }

    elseif($userLOGIN=='master' && $pwdLOGIN=='master')
    {

        $_SESSION['usersys'] = $userLOGIN;
        $_SESSION['TITAPP']  = 'MASTER ADMIN';

        $page = new Page([
            "data"=>array(
                    "titleApp"=>TITLEAPP . $_SESSION['TITAPP'],
                    "urlApp"=>URLAPP,
                    "NAVLEVEL"=>$userLOGIN)
        ]);
        $page->setTpl("home-" . $userLOGIN);


    }
    else{

        $page = new Page([
            "titleApp"=>TITLEAPP,
            "urlApp"=>URLAPP,
            "header"=>false,
            "footer"=>false
        ]);
        $page->setTpl("login");

    }


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

    unset($_SESSION['usersys']);
    session_destroy();

    //User::logout();
    //header("location: /login");


    $page = new Page([
        "header"=>false,
        "footer"=>false,
        "data"=>array(
            "titleApp"=>'ObaVisto Login do Usuário',
            "urlApp"=>URLAPP,
            "urlFormLogin"=>URLLOGIN)
    ]);
    $page->setTpl("login");

});


$app->get('/cadastro', function(){

    $page = new Page([
        "header"=>false,
        "footer"=>false,
        "data"=>array(
            "titleApp"=>'ObaVisto Formulário de Cadastro',
            "urlApp"=>URLAPP,
            "urlFormCadastro"=>URLCADASTRO,
            "urlFormLogin"=>URLLOGIN,
            "urlPoliticas"=>URLPPRIVACIDADE)
    ]);
    $page->setTpl("cadastro");

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
