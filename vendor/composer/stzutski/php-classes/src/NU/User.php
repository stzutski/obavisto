<?php 
namespace stzutski\model;

use \stzutski\DB\Sql;
use \stzutski\Model;

class User extends Model {
  
  public static function login($login,$password)
  {
    
      $sql = new Sql();
      $results = $sql->select("SELECT * FROM users WHERE email_user = :LOGIN", array(
       ":LOGIN"=>$login
      ));
      
      if(count($results) === 0){
        
          throw new \Exception("Usuário inexistente ou senha inválida.", 1);
      }
    
    
      $data = $results[0];
      
      if( password_verify($password, $data['pwd_user']))
      {
      
          $user = new User();
        
        
      }else{
        
        throw new \Exception("Usuário inexistente ou senha inválida.", 1);  
      
      }
    
    
  }
  
}



?>
