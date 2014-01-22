<?php


function remplazarSinUltimo($entrada, $sacar, $poner)
	{	
	$largoSacar = strlen($sacar);
	$largoEntrada = strlen($entrada)-$largoSacar;
	$res = "";
	$countA = 0;
	$countB = 0;
	while($countB < $largoEntrada)
	{
	  if((substr($entrada, $countB, $largoSacar)) == $sacar)
	  {
	  $res .= substr($entrada, $countA, ($countB - $countA)).$poner;
	  $countA = $countB + $largoSacar;
	  $countB += $largoSacar;
	  }
	  $countB += 1;
	}
	  if((substr($entrada, $countA, $countB)) != $sacar)
	  {
	  $res .= substr($entrada, $countA, ($countB - $countA));
	  }
	  if((substr($entrada, $countB)) != $sacar)
	  {
	  $res .= substr($entrada, $countB);
	  }
	return $res;
}

//$var = "123;5;564;5;56;5;4";
//echo remplazarSinUltimo($var, ";5;", "cambi"); //-> "123cambi564cambi56cambi4"


?>