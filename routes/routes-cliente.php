<?php
use stzutski\Page;
use stzutski\model\User;



$app->get('/dashboard', function(){

    //User::verifyLoginAdmin();

    $page = new Page([
        "data"=>array(
                "titleApp"=>TITLEAPP . ' - ' . TITLEAPP,
                "urlApp"=>URLAPP,
                "NAVLEVEL"=>$_SESSION[User::SESSION]['permissao_user'])
    ]);
    $page->setTpl("home-cliente");

});

?>
