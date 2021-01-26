<?php
use stzutski\Page;

$app->get('/perfil', function(){

    $page = new Page([
        "data"=>array("NAVLEVEL"=>"cliente")
    ]);
    $page->setTpl("cliente-edit-profile");

});

$app->get('/suporte', function(){

    $page = new Page([
        "data"=>array("NAVLEVEL"=>"cliente")
    ]);
    $page->setTpl("cliente-duvidas-frequentes");

});

?>
