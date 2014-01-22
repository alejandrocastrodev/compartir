<?php 


echo "<textarea >".$_POST["texto"]."</textarea>";

$texto = htmlentities($_POST["texto"]);
$texto = eregi_replace("[\n]", '</br>', $texto);
$texto = eregi_replace("[\n|\r]", '', $texto);

while(substr($texto, -5) == "</br>")
  {
  $texto = substr($texto, 0, -5);
  }





?> 