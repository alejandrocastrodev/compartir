<?php
session_start();

$actual = "self-files";
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

  <script src="../scripts/download.js" type="text/javascript"></script>
  <script src="../scripts/delete.js" type="text/javascript"></script>
  <LINK rel="stylesheet" href="../css/style-download.css" type="text/css" media="all">

  <?php

  include  "../html/index_b.php";


  ?>
  <div id="downFrame">
  <?php
  

    
  
  
  ?>
  <p align="center" style="color: #ff0; font-weight: bold; margin-bottom: 10px">Mis archivos<p>
  <?php

  //empieza la div de los archivos
  
  ?>   
  <div id="showFileFrame">  
  <?php
  
  if(isset($_POST["delete_file_id"]))
  {  //Se pide el borrado de un archivo
  $error_bool = false;
  $error_text = "";

  $id_to_delete = $_POST["delete_file_id"];
  include ("../settings/config.php");
  include ("../sql/conect-sql.php");
  mysql_select_db("myCloud",$conect_sql);
  $down_files_Q  = "SELECT * FROM `files` WHERE `file_root_id` = ".$_SESSION["id"]." AND  `file_id` = ".$id_to_delete.";";
  $down_files_Q_result  = mysql_query($down_files_Q);
  if (mysql_num_rows($down_files_Q_result)>0)
    {   
    $result_array= mysql_fetch_array($down_files_Q_result);
	$archivonombre = $result_array["file_name"];
    $archivo = "../files_store/".$result_array["file_code"];
    if( file_exists( $archivo ) ) 
	  {
      if(unlink($archivo)) 
	  {
      $error_text .= "El archivo fue borrado correctamente</br>"; 
      //empieza el borrado de la BD
	  mysql_select_db("myCloud",$conect_sql);
	  $delete_data_files_Q  = "DELETE FROM `files` WHERE `file_id` = ".$id_to_delete.";";
	  if(mysql_query($delete_data_files_Q))
		{
		$error_text .= "Los registros del archivo fueron borrados correctamente</br>";
		}
	  else
		{
		$error_text .= "Los registros del archivo no fueron borrados correctamente</br>";
		$error_bool = true;
		}		
	  $delete_data_permission_Q  = "DELETE FROM `file_permission` WHERE `file_id` = ".$id_to_delete.";";
	  if(mysql_query($delete_data_permission_Q))
		{
		$error_text .= "El registro de permisos fue borrados correctamente</br>";
		}
	  else
		{
		$error_text .= "El registro de permisos no fue borrados correctamente</br>";
		$error_bool = true;
		}
      } 
	  }
      else 
	  {
      $error_text .= "El archivo no existe en el resvidor</br>";
	  $error_bool = true; 
      }
	}
    else 
    {
    $error_text .= "No existen registro en el servidor";
	$error_bool = true;
    }
    ?>
    <div id="table1" style="color: <?php if($error_bool){echo "#f00";} else{echo "#fff";};?>; margin: 0px auto 10px auto; padding: 10px 0px; border: 1px solid <?php if($error_bool){echo "red";} else{echo "#0f0";};?>; width: 698px; background-image: url(../images/<?php if($error_bool){echo "red-bg";} else{echo "lgreen-bg";};?>.png)"><p style="text-align: center;">
	<?php echo $error_text;?>	
	</p></div>
    <?php
	}
	
  
  include ("../settings/config.php");
  include ("../sql/conect-sql.php");
  mysql_select_db("myCloud",$conect_sql);
  $load_files_shared_Q  = "  SELECT *
                             FROM `files`
                             WHERE `file_root_id` = ".$_SESSION["id"]."
                             ORDER BY `file_id`";

  $load_files_shared_result  = mysql_query($load_files_shared_Q);

  if (mysql_num_rows($load_files_shared_result) == 0)
    {
	 ?>
     <div id="table1" style="color: #fff; margin: 0px auto 30px auto; padding: 10px 0px; border: 1px solid #0f0; width: 698px; background-image: url(../images/lgreen-bg.png)"><p style="text-align: center;">
     No hay archivos almacenados en este momento
     </p></div>
     <?php
	}
	
  else
    {
  
  include ("../functions/extension.php");
  include ("../functions/cutstring.php");
  
  while ($row = mysql_fetch_array($load_files_shared_result)){

  ?>
  <div id="showFile">
  
    <a class="file_show" href="javascript:void(0);" onclick="javascript:downFile(<?php echo $row['file_id']; ?>);" title="<?php echo $row['file_name']; ?>">
	
	<IMG src="../images/iconos/<?php echo iconOf($row['file_ext']); ?>" alt="<?php echo $row['file_ext']; ?>">
	<p><?php echo cutString(($row['file_name']), 11); ?></p>
	<p><?php echo "Archivo"; if($row['file_ext'] == "unk"){echo "</br>desconocido";} else {echo "</br>".$row['file_ext'];} ?></p>
	<p><?php echo $row['file_date']; ?></p>
	<p><?php echo $row['file_hour']; ?></p>
	</a>
	
  <div id="deleteFile" ><a href="javascript:void(0);" onclick="javascript:deleteFile(<?php echo $row['file_id']; ?>);" >Borrar</a></div><!-- cierra deleteFile --> 
  </div><!-- cierra showFile -->

  
	

  <?php
  } 
  }
  ?>

  
  
	<form action="selfHidden.php" method="post" id="hidden_form" name="hidden_form" style>
		<input id="download_file_id" name="download_file_id" type="hidden" >
    </form>
	
	<form action="self-files.php" method="post" id="hidden_delete" name="hidden_delete" style>
		<input id="delete_file_id" name="delete_file_id" type="hidden" >
    </form>
	
  
  </div><!-- cierra showFileFrame -->
  

  </div><!-- cierra downFrame -->
  <div style="clear: both;"></div>
  <?php

  //#### Termina contenido ####
  include  "../html/index_c.php";
  }

?>