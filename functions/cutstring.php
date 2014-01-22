<?php

function cutString($entrada, $tamanio){

$salida = $entrada;

if((strlen($entrada)) > $tamanio)
  {
  $salida = substr($entrada, 0, ($tamanio - 3))."...";
  }

return $salida;

}

//$entrada = "habia una vezzz";
//echo cutString($entrada, 7); //->>"habia u"