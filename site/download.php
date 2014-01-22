<?php
session_start();

$actual = "download";
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
  <LINK rel="stylesheet" href="../css/style-download.css" type="text/css" media="all">
  <?php
  include  "../html/index_b.php";  
  //#### Empieza contenido ####
  ?>  
  <div id="downFrame">    
  <?php
  if(isset($_POST["delete_file_id"]))
  {  //Se pide el borrado de la relacion a un archivo de un archivo
  $error_bool = false;
  $error_text = "";
  
  $id_to_delete = $_POST["delete_file_id"];
  
  include ("../settings/config.php");
  include ("../sql/conect-sql.php");
  mysql_select_db("myCloud",$conect_sql);
  $down_files_Q  = "SELECT * FROM `file_permission` WHERE `user_id` = ".$_SESSION["id"]." AND  `file_id` = ".$id_to_delete.";";
  $down_files_Q_result  = mysql_query($down_files_Q);
  if (mysql_num_rows($down_files_Q_result)>0)
    {	
    $delete_files_Q  = "DELETE FROM `file_permission` WHERE `user_id` = ".$_SESSION["id"]." AND  `file_id` = ".$id_to_delete.";";

	if(mysql_query($delete_files_Q))
	  {
	  $error_text = "Se borro correctamente el vinculo";
	  }
	else
	  {	  
	  $error_text = "Hubo un problema al intentar borrar el archivo.</br>Se ejecuto la siguiente acci&oacute;n</br>".$delete_files_Q;
	  $error_bool = true;
	  }
	}
  else
    {	
	$error_text = "No existe un vinculo o el archivo fue borrado del servidor.</br>Se ejecuto la siguiente acci&oacute;n</br>".$down_files_Q;
	$error_bool = true;
	}
  
  ?>
  <div id="table1" style="color: <?php if($error_bool){echo "#f00";} else{echo "#fff";};?>; margin: 0px auto 30px auto; padding: 10px 0px; border: 1px solid <?php if($error_bool){echo "red";} else{echo "#0f0";};?>; width: 698px; background-image: url(../images/<?php if($error_bool){echo "red-bg";} else{echo "lgreen-bg";};?>.png)"><p style="text-align: center;">
  <?php echo $error_text;?>	
  </p></div>
  <?php
  }
  
  
  
  
  
  
  include ("../settings/config.php");
  include ("../sql/conect-sql.php");
  mysql_select_db("myCloud",$conect_sql); 
  $load_users_shared_Q  = "SELECT `user_id`, `user_nick`, COUNT(`file_id`) AS `total` 
                           FROM 
                             (
                             SELECT `file_id`, `file_root_id`
                             FROM `files` NATURAL JOIN `file_permission` 
                             WHERE `user_id` = ".$_SESSION["id"]." 
                             ) AS q1
                             JOIN `users` 
                             ON `users`.`user_id` = q1.`file_root_id`
                           GROUP BY `file_root_id` 
                           ORDER BY `user_nick`";						   
  $load_users_shared_result  = mysql_query($load_users_shared_Q);

  if (mysql_num_rows($load_users_shared_result) == 0)
    {
	 ?>
     <div id="table1" style="color: #fff; margin: 0px auto 30px auto; padding: 10px 0px; border: 1px solid #0f0; width: 698px; background-image: url(../images/lgreen-bg.png)"><p style="text-align: center;">
     No hay archivos compartidos en este momento
     </p></div>
     <?php
	}

  
  while ($row = mysql_fetch_array($load_users_shared_result)){  
  ?>	
      <div id="link_download">
	    <a href="#" onclick="javascript:goToDownload(<?php echo $row['user_id'];?>)" title="<?php echo $row['user_nick'];?>" class="link_download">
		<IMG src="../images/profile/<?php echo $row['user_id'];?>.png" style=" ">
		<?php echo $row['user_nick'];?>
		
		<div class="count_download">
		<p><?php if($row['total'] == '1'){echo "1 archivo compartido";} else {echo $row['total']." archivos compartidos";}?></p>
		</div><!-- cierra count_download -->
		</a>
      </div><!-- cierra link_download -->
  <?php
  }
  ?>    
	<form action="show_files.php" method="post" id="hidden_id" name="hidden_id" style>
		<input id="download_id" name="download_id" type="hidden" value="">
    </form>
  </div><!-- cierra downFrame -->
  <?php
  //#### Termina contenido ####
  include  "../html/index_c.php";
  }
?>