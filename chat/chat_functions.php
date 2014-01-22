<?php

function totalChat(){

$string_returned = "";

//conexion a la base de datos
include ("../settings/config.php");
include ("../sql/conect-sql.php");
mysql_select_db("myCloud",$conect_sql);

  $load_chat_control_Q  = "SELECT * FROM `chat_control` WHERE `id_chat` = 1 ;";
  $load_chat_control_result  = mysql_query($load_chat_control_Q);

  if (mysql_num_rows($load_chat_control_result) == 1)
    {  
	$result_control_array = mysql_fetch_array($load_chat_control_result);
	$id_linea_actual = $result_control_array["linea_actual"];
	
    $load_chat_after_Q  = "SELECT * FROM `chat` WHERE `id_linea` >= ".$id_linea_actual.";";
    $load_chat_after_result  = mysql_query($load_chat_after_Q);
      while ($row = mysql_fetch_array($load_chat_after_result)){
         $string_returned = $string_returned.makeLine($row);
      }

    $load_chat_before_Q  = "SELECT * FROM `chat` WHERE `id_linea` < ".$id_linea_actual.";";
    $load_chat_before_result  = mysql_query($load_chat_before_Q);
      while ($row = mysql_fetch_array($load_chat_before_result)){
         $string_returned = $string_returned.makeLine($row);
      }
  }

return $string_returned;
}

function chatFromTo($id_linea_ini, $id_linea_fin){

$string_returned = "";

//conexion a la base de datos
include ("../settings/config.php");
include ("../sql/conect-sql.php");
mysql_select_db("myCloud",$conect_sql);


  if ($id_linea_ini <= $id_linea_fin)
    {  
	$load_chat_lineal_Q  = "SELECT * FROM `chat` WHERE `id_linea` >= ".$id_linea_ini." AND `id_linea` <= ".$id_linea_fin.";";
    $load_chat_lineal_result  = mysql_query($load_chat_lineal_Q);
      while ($row = mysql_fetch_array($load_chat_lineal_result)){
         $string_returned = $string_returned.makeLine($row);
      }	
	}
  else{	
	
    $load_chat_jump_after_Q  = "SELECT * FROM `chat` WHERE `id_linea` >= ".$id_linea_ini.";";
    $load_chat_jump_after_result  = mysql_query($load_chat_jump_after_Q);
      while ($row = mysql_fetch_array($load_chat_jump_after_result)){
         $string_returned = $string_returned.makeLine($row);
      }

    $load_chat_jump_before_Q  = "SELECT * FROM `chat` WHERE `id_linea` <= ".$id_linea_fin.";";
    $load_chat_jump_before_result  = mysql_query($load_chat_jump_before_Q);
      while ($row = mysql_fetch_array($load_chat_jump_before_result)){
         $string_returned = $string_returned.makeLine($row);
      }
  }

return $string_returned;
}

function makeLine($arrayLine){
return "<p><span style=\"color: #".$arrayLine['color'].";\">[".$arrayLine['hora']."] ".$arrayLine['nombre_chat']."</span> ".$arrayLine['comentario']."</p>";
}


?>