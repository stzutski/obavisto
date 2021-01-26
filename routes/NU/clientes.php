<?php
use stzutski\Page;

$app->get('/perfil', function(){

    $page = new Page();
    $page->setTpl("edit-profile");

});

$app->get('/suporte', function(){

    $page = new Page();
    $page->setTpl("duvidas-frequentes");

});

?>
