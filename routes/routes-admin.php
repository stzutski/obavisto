<?php
use stzutski\Page;
use stzutski\model\User;

//
// if(!isset($_SESSION['obsys']['permissao_user']) || $_SESSION['obsys']['permissao_user']!='admin'){
//   header("Location: ". URLAPP ."permissao-necessaria");
//   exit;
// }


$app->get('/', function(){

    //User::verifyLoginAdmin();
    User::checkLevel($_SESSION[User::SESSION]['permissao_user'],'admin');

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("home-admin");

});


$app->get('/dashboard/admin', function(){

    //User::verifyLoginAdmin();
    User::checkLevel($_SESSION[User::SESSION]['permissao_user'],'admin');

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("home-admin");

});
//
//
// $app->get('/financeiro/pedidos', function(){
//
//     User::verifyLoginAdmin();
//
//     $page = new Page([
//         "data"=>array(
//                 "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
//                 "urlApp"=>URLAPP,
//                 "NAVLEVEL"=>$_SESSION['usersys'])
//     ]);
//     $page->setTpl("admin/admin-financeiro-pedidos");
//
// });
//
// $app->get('/financeiro/lista-filtro/:filtro/:uid', function($filtro, $uid){
//
//     User::verifyLoginAdmin();
//
//     $page = new Page([
//         "data"=>array(
//                 "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
//                 "urlApp"=>URLAPP,
//                 "NAVLEVEL"=>$_SESSION['usersys'],
//                 "filtro"=>strtoupper($filtro),
//                 "uid"=>$uid
//                 )
//     ]);
//     $page->setTpl("admin/admin-financeiro-lista-pedidos");
//
// });
//
//
// $app->get('/servicos/listar', function(){
//
//     User::verifyLoginAdmin();
//
//     $page = new Page([
//         "data"=>array(
//                 "titleApp"=>TITLEAPP . ' - Serviços Disponíveis' . ' - ' . $_SESSION['TITAPP'],
//                 "urlApp"=>URLAPP,
//                 "NAVLEVEL"=>$_SESSION['usersys'])
//     ]);
//     $page->setTpl("admin/admin-servicos-lista");
//
// });
//
//
// $app->get('/servicos/cadastro/:uid', function(){
//
//     User::verifyLoginAdmin();
//
//     $page = new Page([
//         "data"=>array(
//                 "titleApp"=>TITLEAPP . ' - Serviços Disponíveis' . ' - ' . $_SESSION['TITAPP'],
//                 "urlApp"=>URLAPP,
//                 "NAVLEVEL"=>$_SESSION['usersys'])
//         ]);
//
//
//
//     $page->setTpl("admin/admin-servicos-detalhes");
//
// });
//
//
// $app->get('/clientes', function(){
//
//     User::verifyLoginAdmin();
//
//     $page = new Page([
//         "data"=>array(
//                 "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
//                 "urlApp"=>URLAPP,
//                 "NAVLEVEL"=>$_SESSION['usersys'])
//     ]);
//     $page->setTpl("admin/admin-clientes-lista");
//
// });
//
//
// $app->get('/clientes/cadastro/:uid', function(){
//
//     User::verifyLoginAdmin();
//
//     $page = new Page([
//         "data"=>array(
//                 "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
//                 "urlApp"=>URLAPP,
//                 "NAVLEVEL"=>$_SESSION['usersys'])
//     ]);
//     $page->setTpl("admin/admin-clientes-cadastro");
//
// });
//
//
// $app->get('/suporte/chat', function(){
//
//     User::verifyLoginAdmin();
//
//     $page = new Page([
//         "data"=>array(
//                 "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
//                 "urlApp"=>URLAPP,
//                 "NAVLEVEL"=>$_SESSION['usersys'])
//     ]);
//     $page->setTpl("admin/admin-suporte-chat");
//
// });
//
//
// $app->get('/suporte/tickets', function(){
//
//     User::verifyLoginAdmin();
//
//     $page = new Page([
//         "data"=>array(
//                 "titleApp"=>TITLEAPP . ' - Administradores do Sistema' . ' - ' . $_SESSION['TITAPP'],
//                 "urlApp"=>URLAPP,
//                 "NAVLEVEL"=>$_SESSION['usersys'])
//     ]);
//     $page->setTpl("admin/admin-suporte-tickets");
//
// });







?>
