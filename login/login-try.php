<?php
session_start();

include ("../settings/config.php");


//Almaceno los datos del formulario
$name_log = $_POST["name"];
$pass_log = $_POST["pass"];


//Configuro el acceso a la tabla
include ("../sql/conect-sql.php");
mysql_select_db("myCloud",$conect_sql); 


//Sentencia SQL para buscar un usuario con esos datos 
$search_user_Q = "SELECT  * FROM  `users` WHERE  `user_name` =  '$name_log'";


//Ejecuto la sentencia 
$search_user = mysql_query($search_user_Q, $conect_sql); 
$search_user_result = mysql_fetch_assoc($search_user);


//Almaceno los resultados
$result_id         = $search_user_result['user_id'];
$result_name       = $search_user_result['user_name'];
$result_pass       = $search_user_result['user_pass'];
$result_nick       = $search_user_result['user_nick'];
$result_p1         = $search_user_result['user_p1'];
$result_p2         = $search_user_result['user_p2'];
$result_p3         = $search_user_result['user_p3'];
$result_chat_name  = $search_user_result['chat_nombre'];


if (($result_pass == $pass_log) & ($pass_log!= "") & ($result_name == $name_log))
	{	
	///Empieza configuracion fecha y hora
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$dateTemp = date("d/m/Y");
	$dayTemp = date("D");
	switch ($dayTemp) {
		case "Mon":
        $dayTemp = "Lunes";
        break;
		case "Tue":
        $dayTemp = "Martes";
        break;
		case "Wed":
        $dayTemp = "Miercoles";
        break;
		case "Thu":
        $dayTemp = "Jueves";
        break;
		case "Fri":
        $dayTemp = "Viernes";
        break;
		case "Sat":
        $dayTemp = "Sabado";
        break;
		case "Sun":
        $dayTemp = "Domingo";
        break;
	}

	$minSecTemp = date("i:s");
    $hora = date("H");
    $hora = $hora+$desTime;
      if($hora < "00"){$hora = 24+$hora;}
      if($hora > "23"){$hora = $hora-24;}
	  if($hora < "10"){$hora = "0".$hora;}

	
	$dateFinal=   $dayTemp." ".$dateTemp;
	$timeReal=    $hora.":".$minSecTemp;

    ///Termina configuracion fecha y hora
	
	///Paso los datos sesion
	$_SESSION["date"]=    $dateFinal;
	$_SESSION["hour"]=    $timeReal;
	
	$id_ses =             rand(100000, 999999);
	
	$_SESSION["id_ses"]=      $id_ses;
	$_SESSION["id"]=          $result_id;
	$_SESSION["name"] =       $result_name;
	$_SESSION["nick"] =       $result_nick;
	$_SESSION["user_p1"] =    $result_p1;
	$_SESSION["user_p2"] =    $result_p2;
	$_SESSION["user_p3"] =    $result_p3;
    $_SESSION["chat_name"] =    $result_chat_name;
	
	$_SESSION["log"] = true;
	$_SESSION["error"] = false;
	$_SESSION["desconect"] = false;


    //Configuro el acceso a la tabla
    include ("../sql/conect-sql.php");
    mysql_select_db("myCloud",$conect_sql); 
	
	//Actualizo el id de sesion
    $sql_update_Q="UPDATE `users` SET  `user_ses_id` =  '$id_ses'  WHERE  `user_id` = $result_id LIMIT 1 ";
    mysql_query($sql_update_Q,$conect_sql);}
	
	
	else
	{
	$_SESSION["log"] =   false;
	$_SESSION["error"]=  true;
	}
	
	$_SESSION["desconect"]= false;


	header ("Location: ../index.php");

?>