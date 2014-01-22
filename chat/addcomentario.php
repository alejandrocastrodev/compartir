<?php
session_start();

$actual = "admin";
include "../login/doble_session.php";

if(!$_SESSION["log"]) 
  {
  echo ("No ha iniciado sesion aún");
  }

else
  {
  if(!(isset($_POST["chat_id"]) & isset($_POST["comentario"])))
  {
  echo ("No se encontro el mensaje o el chat relacionado");
  }
  else
    {
	$chatId = $_POST["chat_id"];
	$nuevoMensaje = htmlentities($_POST["comentario"], ENT_QUOTES, "UTF-8");
    $nuevoMensaje = eregi_replace("[\n]", '</br>', $nuevoMensaje);
    $nuevoMensaje = eregi_replace("[\n|\r]", '', $nuevoMensaje);
    while(substr($nuevoMensaje, -5) == "</br>")
      {
      $nuevoMensaje = substr($nuevoMensaje, 0, -5);
      }
    //$nuevoMensaje = htmlentities($_POST["comentario"], ENT_QUOTES);
    $userId = $_SESSION["id"];
    $userChatName = $_SESSION["chat_name"];
	
	
	//conexion a la base de datos
    include ("../settings/config.php");
    include ("../sql/conect-sql.php");
    mysql_select_db("myCloud",$conect_sql);

	$load_chat_control_Q  = "SELECT * FROM `chat_control` WHERE `id_chat` = '".$chatId."' ;";
    $load_chat_control_result  = mysql_query($load_chat_control_Q);	
    if (mysql_num_rows($load_chat_control_result) != 1)	
	  {
	  echo ("No se encontro el chat en la base de datos");
	  }	
	else
	  {
	  
	  //contrl de duplicados fecha y hora  
	  date_default_timezone_set('America/Argentina/Buenos_Aires');
	  $res_ctrl_ary = mysql_fetch_array($load_chat_control_result);
	  $fechaHora = $res_ctrl_ary['fecha_hora'];
	  $idFechaHora = $res_ctrl_ary['id_fch_hora'];	  
	  $fechaHoraTemp = date("Y-m-d H:i:s");
	  $nuevoIdChat = 0;
	  if ($idFechaHora == $fechaHoraTemp)
	    {
		$nuevoIdChat = $idFechaHora + 1;
		}
	  	  
	  $idMsjActual = $res_ctrl_ary['id_mje_actual'] + 1;	  
	  $idMsjMax = $res_ctrl_ary['max_lineas'];
	  if($idMsjActual >= $idMsjMax)
	    {
		$idMsjActual = 0;
		}
	
	  $mensajeGuardado = false;
	  
      $sql_update_msj = "UPDATE  `".$chatId."` SET  `mensaje` =  '".$nuevoMensaje."',`user_id` =  '".$userId."',`nombre_chat` =  '".$userChatName."',`fecha_hora` =  '".$fechaHoraTemp."',`id_mje_actual` =  '".$nuevoIdChat."' WHERE  `id_linea` = ".$idMsjActual." LIMIT 1 ;";
      mysql_query($sql_update_msj);
	  
	  if(mysql_affected_rows() > 0)
	    {
	    $mensajeGuardado = true;	    
	    }
	  else
	    {
		$sql_create_msj = "INSERT INTO  `".$chatId."` (`id_linea` ,`mensaje` ,`user_id` ,`nombre_chat` ,`fecha_hora` ,`id_mje_actual`)VALUES ('".$idMsjActual."',  '".$nuevoMensaje."',  '".$userId."',  '".$userChatName."',  '".$fechaHoraTemp."',  '".$nuevoIdChat."');";
        if(mysql_query($sql_create_msj))
	      {
	      $mensajeGuardado = true;	    
	      }
	    }
	  if($mensajeGuardado)
	    {//actualizar la tabla de control
		$sql_update_control = "UPDATE  `chat_control` SET  `id_mje_actual` =  '".$idMsjActual."', `fecha_hora` =  '".$fechaHoraTemp."', `id_fch_hora` =  '".$nuevoIdChat."' WHERE `id_chat` =  '".$chatId."' LIMIT 1 ;";
	    if(!mysql_query($sql_update_control))
	      {
	      //error no se actualizo la tabla de control    
	      }
		}
	  else
		{
		//error de guardado del mensaje
		}
		
	  }
    }
  }
  
  
?>