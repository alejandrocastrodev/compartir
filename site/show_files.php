<?php
session_start();

$actual = "show_files";
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


  $id_shared = $_POST["download_id"];

  ?>
  <div id="downFrame">
  <?php
  
  include ("../settings/config.php");
  include ("../sql/conect-sql.php");
  
  mysql_select_db("myCloud",$conect_sql);
  $name_user_Q  = "  SELECT `user_nick`
                     FROM `users`
                     WHERE `user_id` = ".$id_shared.";";
  $name_user_result  = mysql_query($name_user_Q);
  $name_user_array = mysql_fetch_array($name_user_result);
  $name_user = $name_user_array['user_nick'];
  
  mysql_select_db("myCloud",$conect_sql);
  $load_files_shared_Q  = "  SELECT `file_name`, `file_ext`,  `file_hour`,`file_date`, `file_permission`.`user_id`, `file_root_id`, `file_id`
                             FROM `files` NATURAL JOIN `file_permission`
                             WHERE `file_permission`.`user_id` = ".$_SESSION["id"]." AND  `file_root_id` = ".$id_shared."
                             ORDER BY `file_name`";
  $load_files_shared_result  = mysql_query($load_files_shared_Q);
  
  
     
  
  
  ?>
  <p align="center" style="font-size: 16px; color: #0f0; font-weight: bold; margin-bottom: 30px; font-family: arial, verdana, sans-serif;">Archivos compartidos por <?php echo $name_user; ?><p>
  <?php

  //empieza la div de los archivos
  
  ?>   
  <div id="showFileFrame">  
  <?php
  include ("../functions/extension.php");
  include ("../functions/cutstring.php");

  while ($row = mysql_fetch_array($load_files_shared_result)){

  ?>
  <div id="showFile">
  
    <a class="file_show" href="javascript:void(0);" onclick="javascript:downFile(<?php echo $row['file_id']; ?>);" title="<?php echo $row['file_name']; ?>">
	<IMG src="../images/iconos/<?php echo iconOf($row['file_ext']); ?>" alt="<?php echo $row['file_ext']; ?>" title="Titulo">
	<p><?php echo cutString(($row['file_name']), 11); ?></p>
	<p><?php echo "Archivo"; if($row['file_ext'] == "unk"){echo "</br>desconocido";} else {echo "</br>".$row['file_ext'];} ?></p>
	<p><?php echo $row['file_date']; ?></p>
	<p><?php echo $row['file_hour']; ?></p>	
	</a>
	
	<div id="deleteFile" ><a href="javascript:void(0);" onclick="javascript:deleteFileLink(<?php echo $row['file_id']; ?>);" >Borrar</a></div><!-- cierra deleteFile --> 
    
	
  </div><!-- cierra showFile -->
  <?php
  } 
  
  ?>

  
  
	<form action="downHidden.php" method="post" id="hidden_form" name="hidden_form" style>
		<input id="download_file_id" name="download_file_id" type="hidden" >
    </form>
	
	<form action="download.php" method="post" id="hidden_delete" name="hidden_delete" style>
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