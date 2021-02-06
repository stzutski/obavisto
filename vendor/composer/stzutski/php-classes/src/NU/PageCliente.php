<?php
/*
arquivo loader dos templates para as pags de usuarios (CLIENTES) no sistema
ex: meu perfil, extrato, pedidos(loja), suporte, etc
*/

namespace stzutski;


class PageCliente extends Page {

	public function __construct($opts = array(), $tpl_dir = "/labs/obavisto/views/")
	{

		parent::__construct($opts, $tpl_dir);

	}

}


?>