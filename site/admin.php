<?php
session_start();

$actual = "admin";
include "../login/doble_session.php";

if(!$_SESSION["log"]) 
  {
  header ("Location: ../login/login-out.php");
  }

else
  {
  include  "../html/index_a.php";
  //#### Carga de estilos y scripts especificos ####
  
  
  /*?>
  <LINK rel="stylesheet" href="../css/style-log.css" type="text/css" media="all">
  <?php*/

  include  "../html/index_b.php";
  
  
  //#### Empieza contenido ####
  include  "../edit_html/index-content.php";
  

  //#### Termina contenido ####
  include  "../html/index_c.php";
  }

?>