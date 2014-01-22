<?php
session_start();

$actual = "upload";
include "../login/doble_session.php";

if(!$_SESSION["log"]) 
  {
  header ("Location: ../login/login-out.php");
  }
else
  {
  include  "../html/index_a.php";
  //#### Carga de estilos y scripts especificos ####  
  ?>
  <LINK rel="stylesheet" href="../css/style-upload.css" type="text/css" media="all">
  <script src="../scripts/list.js" type="text/javascript"></script>
  <script src="../scripts/upload.js" type="text/javascript"></script>
  <?php
  include  "../html/index_b.php";  
  //#### Empieza contenido ####  
  ?>
  <div id="sharedbody">
  
  <?php
  if(isset($_POST["hiddenExtInput"]))  //############### se pide subir un archivo
  {
    //#### Esta función genera un codigo alfanumerico de (n) dijitos ####
  $error_bool = false;
  $error_text = "";
  function alfaNumerico($sizeReturned)
    {
	$clave="";
    $chars = array();
    for ($i="a"; $i<"z"; $i++) $chars[] = $i;
        $chars[] = "z";
    for ($i=0; $i<$sizeReturned; $i++)
	    {
        $letra = round(rand(0, 1));
        if ($letra) // es letra
            $clave .= $chars[round(rand(0, count($chars)-1))];
        else // es numero
            $clave .= round(rand(0, 9));
        }
	return $clave;
    }

  //#### Esta función generas codigos ramdomicos asegurandose que no halla otro igual en la base de datos ####
  function inexist()
    {
	include ("../settings/config.php");
    include ("../sql/conect-sql.php");
    mysql_select_db("myCloud",$conect_sql);
    $returned = alfaNumerico(40);
    $code_exist="SELECT  * FROM  `files` WHERE  `file_code` =  '$returned'";
    $code_exist_rs = mysql_query($code_exist,$conect_sql);
        if(mysql_fetch_row($code_exist_rs) != 0)
            {return inexist();}
        else 
            {return $returned;} 
	}

  //#### se almacena en variables los datos del post HTML y de la sesion actual ####
  $code_file = inexist();
  $name_file = $_FILES['hiddenFileInput']['name'];
  $tmpN_file = $_FILES['hiddenFileInput']['tmp_name'];
  $size_file = $_FILES['hiddenFileInput']['size'];
  $extn_file = $_POST["hiddenExtInput"];
  $root_file = $_SESSION["id"];
  $shared_users = $_POST["hiddenShared"];
  //#### Almaceno en variables datos de fecha y hora ####
  date_default_timezone_set('America/Argentina/Buenos_Aires');
  $date_file = date("d/m/Y");  
  include ("../settings/config.php"); 
  //#### configura el dezplazamiento de la hora en el servidor ####	  
  $min_seg = date("i:s");
  $hora = date("H");
  $hora = $hora+$desTime;
  if($hora < "00"){$hora = 24+$hora;}
  if($hora > "23"){$hora = $hora-24;}
  if($hora < "10"){$hora = "0".$hora;}
  $hour_file = $hora.":".$min_seg;    
  //Comienza el guardado del archivo en el servidor folderStore esta pre-configurado
  include ("../sql/conect-sql.php");
  if (!move_uploaded_file($tmpN_file, $folderStore.$code_file))
    {
    $error_text .= "No se pudo guardar el archivo en el servidor</br>";
	$error_bool = true;
	}
  else
    {
    include ("../settings/config.php");
	include ("../sql/conect-sql.php");
    mysql_select_db("myCloud",$conect_sql); 
	//Comienza el guardado de informacion del archivo
	$save_file_data_Q  =     "INSERT INTO `files` (`file_id` , `file_name` , `file_code` , `file_root_id` , `file_date` , `file_hour` , `file_size` , `file_ext` )
	VALUES ( NULL ,  '$name_file',  '$code_file',  '$root_file',  '$date_file',  '$hour_file',  '$size_file',  '$extn_file')";
	//Termina el guardado de informacion del archivo
	if (!mysql_query($save_file_data_Q))
	  {
      $error_text .= "No se guardo la informacion del archivo en la base de datos</br>";
	  $error_bool = true;
	  }
    else
      {
      $error_text .= "Se subio el archivo y se guardo la informacion en la tabla</br>";
	  //Se obtyiene el id del archivo por medio del codigo de descarga
	  $load_file_id_Q  = "SELECT `file_id` FROM `files` WHERE `file_code` = '$code_file'";
      $resul_array =mysql_fetch_array (mysql_query($load_file_id_Q));
	  $resul_id = $resul_array['file_id'];	
	  //Alternativa - Existen permisos
	  if($shared_users != "")
		{
	    //Comienza el guardado de permisos
	    //Se cambian los separadores de la [listaIdsDePermisos] para darle formato a la query		
        include ("../functions/replace.php");
	    $templateSql = remplazarSinUltimo($shared_users, ";", "),(".$resul_id.", ");	
	    $save_file_permission_Q  =     "INSERT INTO  `file_permission` (`file_id` , `user_id` ) VALUES (".$resul_id." ,".$templateSql.")";
	    include ("../settings/config.php");
	    include ("../sql/conect-sql.php");
        mysql_select_db("myCloud",$conect_sql);
	    if (!mysql_query($save_file_permission_Q))
	      {
          $error_text .= "No se guardaron correctamente los permisos del archivo</br>";
          $error_text .= "La siguiente query ha sido ejecutada</br>";
          $error_text .= $save_file_permission_Q."</br>";
	      $error_bool = true;
	      }
		else
		  {
	      //en esta instancia todo el proceso esta completo
          $error_text .= "Se guardaron los permisos";
		  }
	    //Termina el guardado de permisos
		}
	  else
		{
        $error_text .= "No se compartio el archivo";
		}
	  }
    }
  ?>
    <div id="table1" style="color: <?php if($error_bool){echo "#f00";} else{echo "#fff";};?>; margin: 0px auto 10px auto; padding: 10px 0px; border: 1px solid <?php if($error_bool){echo "red";} else{echo "#0f0";};?>; width: 838px; background-image: url(../images/<?php if($error_bool){echo "red-bg";} else{echo "lgreen-bg";};?>.png)"><p style="text-align: center;">
	<?php echo $error_text;?>	
	</p></div>
  <?php
  }      //############### Termina el script de guardado del archivo
  
  
  
  ?>
  
  <form action="upload.php" enctype="multipart/form-data" method="post" id="uploadForm">
    <p>Selecciona el archivo y los usuarios que podran tener acceso a este.</p>	
		<div id="leveler">
		  <a href="javascript:submitForm()">Enviar</a>
          <a href="javascript:xctFileInput()">Examinar</a>
		  <p id="fileName">No se ha seleccionado ningun archivo</p>
		</div><!-- cierra leveler -->
		<input type="file" id="hiddenFileInput" name="hiddenFileInput" onchange="showPath()">
		<input type="hidden" id="hiddenExtInput" name="hiddenExtInput" value="">
		<input type="hidden" id="hiddenShared" name="hiddenShared" value="">
  </form>

  <div id="sharedFrame">
  
  <?php
  
  //empiezo a cargar los usuarios y armo la estructura de botones
  include ("../functions/cutstring.php");
  include ("../settings/config.php");
  include ("../sql/conect-sql.php");
    mysql_select_db("myCloud",$conect_sql); 
	$load_users_Q  = "SELECT * FROM `users` WHERE `user_id` != ".$_SESSION["id"]." ORDER BY `user_nick`";
	$load_users_result  = mysql_query($load_users_Q);
	//$load_users_array  = ;
	
  while ($row = mysql_fetch_array($load_users_result))
    {  
    ?>
    <p id="id<?php echo $row['user_id'];?>" class="sharedFileN">	    
      <a href="javascript:void(0);" title="<?php echo $row['user_nick'];?>" onclick="un_check('<?php echo $row['user_id'];?>')"><IMG src="../images/profile/<?php echo $row['user_id'];?>.png" style=" "><?php echo cutString($row['user_nick'], 18);?></a>
    </p>
    <?php
    }	
  ?>

  </div><!-- cierra sharedFrame -->
  <div id="foot-form"></div><!-- cierra foot-form -->
  
  </div><!-- cierra sharedbody -->
  <?php
  //#### Termina contenido ####
  include  "../html/index_c.php";
  }
?>