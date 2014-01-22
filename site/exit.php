<?php
session_start();

$actual = "exit";
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
  <LINK rel="stylesheet" href="../css/exit.css" type="text/css" media="all">
  <?php

  include  "../html/index_b.php";
  
  
  //#### Empieza contenido ####
  ?>
  
  <div id="flashFrame">
  
  <a href="../flashgame/adventuresofthedudegame.swf" target="_blank">
  <img src="../flashgame/adventuresofthedudegame.png">
  </a>
  
  <a href="../flashgame/creativekillchamber.swf" target="_blank">
  <img src="../flashgame/creativekillchamber.png">
  </a>
  
  <a href="../flashgame/smart-soccer.swf" target="_blank">
  <img src="../flashgame/smart-soccer.png">
  </a>
  
  <a href="../flashgame/megamash.swf" target="_blank">
  <img src="../flashgame/megamash.png">
  </a>
  
  <a href="../flashgame/stickdudekillingarenagame.swf" target="_blank">
  <img src="../flashgame/stickdudekillingarenagame.png">
  </a>
  
  <a href="../flashgame/wpnfiregame.swf" target="_blank">
  <img src="../flashgame/wpnfiregame.png">
  </a>
  
  
  </div> <!-- cierra flashFrame -->
  <div id="frameEnd">
  </div> <!-- cierra frameEnd --> 
  <?php
  

  //#### Termina contenido ####
  include  "../html/index_c.php";
  }

?>