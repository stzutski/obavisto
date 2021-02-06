<?php
/*
classe com uma coleção de metodos para html
*/

namespace stzutski\model;

class Html {


  public static function comboBox($data=array(),$args=array()){

    $formOption ='';
    $campo      = $args['campo'];
    $value      = $args['value'];
    $selected   = $args['selected'];

    if(count($data)==0){
      $formOption = '<option value="">Nenhuma opção</option>'."\n";
    }

    for ($i=0; $i < count($data); $i++) {
      // code...
      $opt          = $data[$i];
      $opcao        = $opt[$campo];
      $value        = $opt[$value];
      $att_selected = '';
      if($selected!='' && $selected==$value){$att_selected = ' selected';}
      $formOption = $formOption.'<option value="'.$value.'"'.$att_selected.'>'.$opcao.'</option>'."\n";
    }

    return $formOption;
  }





}
