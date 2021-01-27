<?php

use stzutski\Page;


$app->get('/', function(){


    if(!isSet($_SESSION['usersys']) || $_SESSION['usersys']==''){

    $page = new Page([
        "titleApp"=>TITLEAPP,
        "urlApp"=>URLAPP,
        "header"=>false,
        "footer"=>false,
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






// if(!isSet($_SESSION['usersys']) || $_SESSION['usersys']==''){

//     $app->get('/', function(){

//         $page = new Page([
//             "titleApp"=>TITLEAPP,
//             "urlApp"=>URLAPP,
//             "header"=>false,
//             "footer"=>false
//         ]);
//         $page->setTpl("login");
    
//     });

// }else{


//     header('location:' . URLAPP);

//     $app->get('/', function(){

//         $page = new Page([
//             "data"=>array(
//                     "titleApp"=>TITLEAPP . ' - ' . $_SESSION['TITAPP'],
//                     "urlApp"=>URLAPP,
//                     "NAVLEVEL"=>$_SESSION['usersys'])
//         ]);
//         $page->setTpl("home-".$_SESSION['usersys']);
      
//     });



// }


$app->post('/', function(){


    if($_POST['userlogin']=='cliente' && $_POST['pwdlogin']=='cliente')
    {
        $_SESSION['usersys'] = $_POST['userlogin'];
        $_SESSION['TITAPP']  = 'Painel do Cliente';
        

        $page = new Page([
            "data"=>array(
                    "titleApp"=>TITLEAPP . $_SESSION['TITAPP'],
                    "urlApp"=>URLAPP,
                    "NAVLEVEL"=>$_POST['userlogin'])
        ]);
        $page->setTpl("home-" . $_POST['userlogin']);    

    }  

    elseif($_POST['userlogin']=='admin' && $_POST['pwdlogin']=='admin')
    {

        $_SESSION['usersys'] = $_POST['userlogin'];
        $_SESSION['TITAPP']  = 'Painel do Administrador';

        $page = new Page([
            "data"=>array(
                    "titleApp"=>TITLEAPP . $_SESSION['TITAPP'],
                    "urlApp"=>URLAPP,
                    "NAVLEVEL"=>$_POST['userlogin'])
        ]);
        $page->setTpl("home-" . $_POST['userlogin']);        


    } 

    elseif($_POST['userlogin']=='master' && $_POST['pwdlogin']=='master')
    {

        $_SESSION['usersys'] = $_POST['userlogin'];
        $_SESSION['TITAPP']  = 'MASTER ADMIN';

        $page = new Page([
            "data"=>array(
                    "titleApp"=>TITLEAPP . $_SESSION['TITAPP'],
                    "urlApp"=>URLAPP,
                    "NAVLEVEL"=>$_POST['userlogin'])
        ]);
        $page->setTpl("home-" . $_POST['userlogin']);        


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




$app->get('/', function(){

    $page = new Page($data);
    $page->setTpl($startPage);

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