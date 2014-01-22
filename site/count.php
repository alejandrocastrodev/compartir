<?php
session_start();

$actual = "count";
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
  <script src="../scripts/count.js" type="text/javascript"></script>
  <LINK rel="stylesheet" href="../css/count.css" type="text/css" media="all">
  <?php

  include  "../html/index_b.php";  
  //#### Empieza contenido ####
  
  ?>
  <div id="count">
  <p id="table1" style="text-indent: 134px; color: #0f0; margin-top: 20px; padding: 10px 0px; border: 1px solid green; width: 698px;">Configuraci&oacute;n de la cuenta</p>

  <?php
  
  if( (isset($_POST["pass_change"])) and (isset($_POST["pass_original"])) )
  {
  //se pide un cambio de contraseña
  $self_id = $_SESSION["id"];
  $post_pass_orig = $_POST["pass_original"];
  $post_pass_new = $_POST["pass_change"];
  
  include ("../settings/config.php");
  include ("../sql/conect-sql.php");
  mysql_select_db("myCloud",$conect_sql);
  
  //consulta SQL para buscar un usuario con esos datos 
  
  $pass_qry = "SELECT  * FROM  `users` WHERE  `user_id` = ".$self_id." LIMIT 1 ;";
  
  //Ejecuto la consulta
  $pass_qry_res = mysql_query($pass_qry, $conect_sql); 
  $pass_qry_res_fech = mysql_fetch_assoc($pass_qry_res);  
  $session_pass_fech = $pass_qry_res_fech['user_pass'];
  
  if($session_pass_fech == $post_pass_orig)
    {
	//los contraseña es correcta

    $upd_pass_qry= "UPDATE `users` SET `user_pass` =  '".$post_pass_new."' WHERE  `user_id` = ".$self_id." LIMIT 1 ";
    if(mysql_query($upd_pass_qry, $conect_sql))
	  {	
	  ?>
      <p id="table1" style="text-indent: 134px; color: #fff; margin-top: 20px; padding: 10px 0px; border: 1px solid #0f0; width: 698px; background-image: url(../images/lgreen-bg.png)">La contrase&#241;a fu&eacute; modificada correctamente</p>
	  <?php
	  }
	else
	  {
	  ?>
      <p id="table1" style="text-indent: 134px; color: #f00; margin-top: 20px; padding: 10px 0px; border: 1px solid #0f0; width: 698px; background-image: url(../images/red-bg.png)">Ocurri&oacute; un inconveniente en el proceso de actualizaci&oacute;n de la clave</p>
	  <?php	  
	  }
    }
  else
    {
	//los contraseña es incorrecta
	?>
    <p id="table1" style="text-indent: 134px; color: #f00; margin-top: 20px; padding: 10px 0px; border: 1px solid red; width: 698px; background-image: url(../images/red-bg.png)">La contrase&#241;a ingresada es incorrecta</p>
	<?php
    }
  
  
  
  
  //termian cambio de contraseña
  }
  if (isset($_POST["new_image"]))
  {
  echo "tu imagen a cambiado";  
  }
  
?>  



<form method="post" action="count.php" id="changePass" name="changePass">
<p id="table1" style="text-indent: 134px; color: #0ff; padding: 10px 0px; border: 1px solid blue; width: 698px;">Cambio de contrase&#241;a</p>

<table id="table1" style="border: 1px solid red">
  <tr>  <td>Ingrese su contrase&#241;a actual:</td>  </tr>
  <tr>  <td><input type="password" class="table1" id="pass_original" name="pass_original" size="30" onKeyPress="return submitEnterPass(event)"></td>  </tr>
    <tr>  <td>Ingrese la nueva contrase&#241;a:</td>  </tr>
    <tr>  <td><input type="password" class="table1" id="pass_change" name="pass_change" size="30" onkeyup ="validarTwin()" onKeyPress="return submitEnterPass(event)"></td>  </tr>
      <tr>  <td><p id="checkP">Repita la nueva contrase&#241;a:</p></td>  </tr>
      <tr>  <td><input type="password" class="table1" id="pass_change_replay" name="pass_change_replay" size="30" onkeyup ="validarTwin()" onKeyPress="return submitEnterPass(event)"></td>  </tr>
	  <tr>  <td><p id="errorP"></p></td>  </tr>
  <tr>  <td><a href="javascript:void(0)" onClick="javascript:ejecutarFormPass();" >Aceptar</a></td>  </tr>
</table>


</form>

<form method="post" action="count.php" id="changePass" name="changePass">

<p id="table1" style="text-indent: 134px; color: #0ff; padding: 10px 0px; border: 1px solid blue; width: 698px;">Cambio de imagen (en desarrollo, NO TOCAR!!!)</p>


<table id="table1" style="border: 1px solid red">

<tr>  <td>Seleccione la nueva imagen:</td>  </tr>
<tr>  <td><input type="file" class="table1" id="prsn_nombre" name="prsn_nombre" size="30"></td>  </tr>

<tr>  <td><a href="javascript:void(0)" >Aceptar</a></td>  </tr>

</table>


</form>

</div> <!--cierra count -->










  
  
  <?php
  //#### Termina contenido ####
  include  "../html/index_c.php";
  }

?>