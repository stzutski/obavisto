<?php
/*
arquivo loader dos templates para as pags dos (ADMINS) do sistema
ex: cadastro de clientes, pagamentos, suporte, etc...
*/

namespace stzutski;


class PageAdmin extends Page {

	public function __construct($opts = array(), $tpl_dir = "/views/admin/")
	{

		parent::__construct($opts, $tpl_dir);

	}

}


?>