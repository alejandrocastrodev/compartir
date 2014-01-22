<?php
session_start();

$actual = "inicio";

include "../login/doble_session.php";

include  "../html/index_a.php";
  
if($_SESSION["log"]) 
  {

  
  include  "../html/index_b.php";
  
  //#### Empieza contenido ####
  include  "../edit_html/index-content.php";
  
  }
else
  {
  //#### Carga de estilos y scripts especificos ####
  
  
  ?>
  <LINK rel="stylesheet" href="../css/style-log.css" type="text/css" media="all">
  <?php
  

  include  "../html/index_b.php";
  //#### Empieza contenido ####
  
  include "../html/login-form.php";
  }


//#### Termina contenido ####
include  "../html/index_c.php";
?>