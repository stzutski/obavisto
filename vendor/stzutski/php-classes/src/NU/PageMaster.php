<?php
/*
arquivo loader dos templates para as pags do usuario (MASTER) do sistema
ex: cadastro de admins, empresas e configuracoes gerais do sistema
*/

namespace stzutski;


class PageMaster extends Page {

	public function __construct($opts = array(), $tpl_dir = "/labs/obavisto/views/")
	{

		parent::__construct($opts, $tpl_dir);

	}

}


?>