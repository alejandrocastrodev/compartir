<?php
session_start();

include "../login/doble_session.php";

if($_SESSION["log"]) 
  {
  if(!(isset($_POST["idLastLine"]) && isset($_POST["lastDate"]) && isset($_POST["lastIdDate"]) && isset($_POST["chatId"])))
    {
	echo "[['errorData'], ['no se consiguieron todos los parametros necesarios']]";
	}
  else	
	{
	$idLastLineTemp = $_POST["idLastLine"];
	$lastDateTemp = $_POST["lastDate"];
	$lastIdDateTemp = $_POST["lastIdDate"];
	$chatIdTemp = $_POST["chatId"];
	
	//conexion a la base de datos
    include ("../settings/config.php");
    include ("../sql/conect-sql.php");
    mysql_select_db("mycloud",$conect_sql);

    $load_chat_control_Q  = "SELECT * FROM `chat_control` WHERE `id_chat` = '".$chatIdTemp."' ;";
    $load_chat_control_result  = mysql_query($load_chat_control_Q);

    if ((mysql_num_rows($load_chat_control_result) != 1))
	  {
	  echo "[['errorData'], ['no existe una tabla asociada a este identificador']]";
	  }
	else
      {
	  $result_control_array = mysql_fetch_array($load_chat_control_result);
	  $id_linea_actual = $result_control_array["id_mje_actual"];
	  $maxLineas = $result_control_array["max_lineas"] - 1;
	  
	  $load_chat_l_control_Q  = "SELECT * FROM `".$chatIdTemp."` WHERE `id_linea` = '".$idLastLineTemp."' AND `fecha_hora` = '".$lastDateTemp."' AND `id_mje_actual` = '".$lastIdDateTemp."';";
      $load_chat_l_control_result  = mysql_query($load_chat_l_control_Q);
	  if ((mysql_num_rows($load_chat_l_control_result) == 0))
	    {
		if($idLastLineTemp == '' && $lastDateTemp == '' && $lastIdDateTemp == '')
		  {
		  echo "[['empty', '".$idLastLineTemp." ".$lastDateTemp." ".$lastIdDateTemp."']]";
		  }
		else
		  {
	      echo "[['errorData'], ['la ultima linea almacenada no coincide con la tabla actual']]";
		  }
	    }
	  else
	    {
		if(($idLastLineTemp)  == $id_linea_actual)
		  {
		  echo "[['empty', 'vacio']]";
		  }
		else
		  {		  
		  //se carga el array
		  $string_returned = '';
		  include ("../settings/config.php");
          include ("../sql/conect-sql.php");
          mysql_select_db("mycloud",$conect_sql);

          if ($id_linea_actual > $idLastLineTemp) //carga desde la almacenada a la actual
            {  
	        $load_chat_after_Q  = "SELECT * FROM `".$chatIdTemp."` WHERE `id_linea` > ".$idLastLineTemp." AND `id_linea` <= ".$id_linea_actual." ORDER BY `id_linea`;";
            $load_chat_after_result  = mysql_query($load_chat_after_Q);
            while ($row = mysql_fetch_array($load_chat_after_result))
		      {
              $string_returned .= makeLine($row);
              }
			if(strlen($string_returned) > 2);
	          {
			  $string_returned = substr($string_returned, 0, -2 );
			  }	  
            echo "[['ok'], [".$string_returned."]]";		    
	        }
          else
		    {	
            $load_chat_jump_after_Q  = "SELECT * FROM `".$chatIdTemp."` WHERE `id_linea` > ".$idLastLineTemp." AND `id_linea` <= ".$maxLineas." ORDER BY `id_linea`;";
            $load_chat_jump_after_result  = mysql_query($load_chat_jump_after_Q);
            while ($row = mysql_fetch_array($load_chat_jump_after_result))
			  {
              $string_returned = $string_returned.makeLine($row);
              }

            $load_chat_jump_before_Q  = "SELECT * FROM `".$chatIdTemp."` WHERE `id_linea` <= ".$id_linea_actual." ORDER BY `id_linea`;";
            $load_chat_jump_before_result  = mysql_query($load_chat_jump_before_Q);
            while ($row = mysql_fetch_array($load_chat_jump_before_result))
			  {
              $string_returned = $string_returned.makeLine($row);
              }
            
            if(strlen($string_returned) > 2);
	          {
			  $string_returned = substr($string_returned, 0, -2 );
			  }	  
            echo "[['ok'], [".$string_returned."]]";	
		
            //echo "[['ok'], [['24',  'macho', '1', 'Carlos', '2011-12-27 16:25:43', '0'],['24',  'macho', '2', 'Carlos', '2011-12-27 16:25:43', '0']]]";
		    }
          }
		}
	  }
    }
  }



function makeLine($arrayLine){
return "['".$arrayLine['id_linea']."', '".$arrayLine['mensaje']."', '".$arrayLine['user_id']."', '".$arrayLine['nombre_chat']."', '".$arrayLine['fecha_hora']."', ".$arrayLine['id_mje_actual']." ], ";

//formato:  id_linea  mensaje user_id nombre_chat fecha_hora id_mje_actual
}
?>