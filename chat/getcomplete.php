<?php
session_start();
$actual = "getComplete";

include "../login/doble_session.php";

if(!$_SESSION["log"]) 
  {
  echo ("No ha iniciado sesion aún");
  }
else
  {
  if(!(isset($_POST["chat_id"])))
    {
    echo "no ha iniciado sesion aun";
    }
  else
    {
	$chatId = $_POST["chat_id"];
    //conexion a la base de datos
    include ("../settings/config.php");
    include ("../sql/conect-sql.php");
    mysql_select_db("myCloud",$conect_sql);

    $load_chat_control_Q  = "SELECT * FROM `chat_control` WHERE `id_chat` = '".$chatId."' ;";
    $load_chat_control_result  = mysql_query($load_chat_control_Q);

    if (!(mysql_num_rows($load_chat_control_result) == 1))
	  {
	  echo "No se encontro el chat relacionado";
	  }	
	else
      {  
	  $result_control_array = mysql_fetch_array($load_chat_control_result);
	  $id_linea_actual = $result_control_array["id_mje_actual"];
	  $maxLineas = $result_control_array["max_lineas"] - 1;
	
      $load_chat_after_Q  = "SELECT * FROM `".$chatId."` WHERE `id_linea` > ".$id_linea_actual." AND `id_linea` <= ".$maxLineas." ORDER BY `id_linea`;";
      $load_chat_after_result  = mysql_query($load_chat_after_Q);
        while ($row = mysql_fetch_array($load_chat_after_result))
		{
           $string_returned .= makeLine($row);
        }

      $load_chat_before_Q  = "SELECT * FROM `".$chatId."` WHERE `id_linea` <= ".$id_linea_actual." ORDER BY `id_linea`;";
      $load_chat_before_result  = mysql_query($load_chat_before_Q);
      	  
	  while ($row = mysql_fetch_array($load_chat_before_result))
	    {
        $string_returned .= makeLine($row);
        }
	  //############################ hay que cortar hasta el ultimo ] en realidad
	  //se quita el espacio y coma del final 
	  if(strlen($string_returned) > 2);
	  {$string_returned = substr($string_returned, 0, -2 );}
	  
	  
	  
	  
      echo "[".$string_returned."]";
	  
      }
    }
  }

function makeLine($arrayLine){
return "['".$arrayLine['id_linea']."', '".$arrayLine['mensaje']."', '".$arrayLine['user_id']."', '".$arrayLine['nombre_chat']."', '".$arrayLine['fecha_hora']."', ".$arrayLine['id_mje_actual']." ], ";

//formato:  id_linea  mensaje user_id nombre_chat fecha_hora id_mje_actual
}