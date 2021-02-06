<?php
namespace stzutski\model;

use \stzutski\DB\Sql;
use \stzutski\Model;

class User extends Model {

  const SESSION = "obsys";

  // confere se usuario tem permissao de acesso para o modulo
  public static function checkLevel($userLevel,$modLevel){
    if($userLevel!=$modLevel){
      header("Location: ". URLAPP ."permissao-necessaria");
      exit;
    }
  }



  // realiza o login do usuario
  public static function login($login,$password)
  {

      $sql = new Sql();
      $results = $sql->select("SELECT * FROM users WHERE email_user = :LOGIN", array(
       ":LOGIN"=>$login
      ));

      if(count($results) === 0){

          throw new \Exception("Usuário inexistente ou senha inválida. 000", 1);
      }

      $data = $results[0];

      //if( password_verify($password, $data['pwd_user']) === true )
      if( $password == $data['pwd_user'] )
      {

          $user = new User();
          $user->setData($data);

          $_SESSION[User::SESSION] = $user->getValues();

          return $user;

      }else{

        throw new \Exception("Usuário inexistente ou senha inválida. 001", 1);

      }


  }


  public static function verifyLoginAdmin($permissaoUser = 'cliente')
  {
    if(
      !isSet($_SESSION[User::SESSION])||
      !$_SESSION[User::SESSION]||
      (int)$_SESSION[User::SESSION]['id_user'] > 0 ||
      (string)$_SESSION[User::SESSION]['id_user']['permissao_user'] === 'cliente' ||
      (string)$_SESSION[User::SESSION]['id_user']['permissao_user'] === ''
      ){
          header("location: ". URLAPP. "login");
          exit;
      }
  }


  public static function verifyLoginCliente($permissaoUser = 'cliente')
  {
    if(
      !isSet($_SESSION[User::SESSION])
      ||
      !$_SESSION[User::SESSION]
      ||
      (int)$_SESSION[User::SESSION]['id_user'] > 0
      ||
      (string)$_SESSION[User::SESSION]['id_user']['permissao_user'] === ''
      ){
          header("location: ". URLAPP. "login");
          exit;
      }
  }


  // faz o logout
  public static function logout()
  {
      $_SESSION[User::SESSION] = NULL;
      header("location: ". URLAPP. "login");
      exit;

  }

  //lista todos usuarios cadastrados
  public static function listAllAdmins()
	{

		$sql = new Sql();

		//return $sql->select("SELECT * FROM users WHERE permissao_user = 'admin' ORDER BY nome_user");
		return $sql->select("SELECT * FROM
                        users as a, empresas as b
                        WHERE
                        a.permissao_user = 'admin'
                        AND a.id_user = b.id_user
                        ORDER BY nome_user");

	}

  //retorna dados de um administradores
  public static function getAdminData($uid){

    $sql = new Sql();

    return $sql->select("SELECT * FROM
                        users as a, empresas as b
                        WHERE
                        a.id_user = :UID
                        AND a.permissao_user = 'admin'
                        AND a.id_user = b.id_user
                        ORDER BY nome_user",array('UID'=>$uid));

  }


  //lista empresas
  // TODO: MOVER PARA CLASSE EMPRESAS
  public static function listaEmpresas($args=array()){

    $tag    = '';
    $sql    = new Sql();
    $dados  = $sql->select("SELECT * FROM empresas ORDER BY desc_empresa");
    if($args['combo']==true){

      $tag = Html::comboBox($dados,
        [
        'campo'=>$args['campo'],
        'value'=>$args['value'],
        'selected'=>$args['selected']
        ]
      );

      return $tag;

    }else{

      return $dados;
    }

  }







}



?>
