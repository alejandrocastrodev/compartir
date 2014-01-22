<?php


//conexion a la base de datos
include ("../settings/config.php");
include ("../sql/conect-sql.php");
mysql_select_db("myCloud",$conect_sql);

if($_GET["Enviar"]=="si")
 {
  $max="select max(id_linea) from chat";
  $max=mysql_query($max);
  $max=mysql_result($max,0,0)+1;
  
  date_default_timezone_set('America/Argentina/Buenos_Aires');
  
  $minSecTemp = date("i");
    $hora = date("H");
    $hora = $hora+$desTime;
      if($hora < "00"){$hora = 24+$hora;}
      if($hora > "23"){$hora = $hora-24;}
	  if($hora < "10"){$hora = "0".$hora;}
	$timeReal=    $hora.":".$minSecTemp;
  
  $fecha = date("d-m-y");
  $hora = $timeReal;
  //
  $insert="insert into chat values(".$max.",'".htmlentities(utf8_decode($_REQUEST["comentario"]))."','Neo','".$fecha."','".$hora."','FFF')";
  if(trim($_REQUEST["comentario"])!=NULL)
   {
    $insert=mysql_query($insert);
   }
  exit();
 }
elseif($_GET["Leer"]=="si")
 {
  header("Cache-Control: no-store, no-cache, must-revalidate");
  $select="select * from chat order by id_linea desc limit 0,10";
  $select=mysql_query($select);
  while($row = mysql_fetch_array($select))
   {
    if($row["comentario"]!=NULL)
     {
        echo "<strong>".$row["fecha"]."</strong> - ".$row["comentario"]."<br />";
     }
   }
  exit();
 }
elseif($_GET["Hash"]=="si")
 {
  header("Cache-Control: no-store, no-cache, must-revalidate");
  $max="select max(id_linea) from chat";
  $max=mysql_query($max);
  $max=mysql_result($max,0,0);
  //
  $select="select * from chat where id_linea=".$max." limit 1";
  $select=mysql_query($select);
  //
  $id=mysql_result($select,0,"id_linea");
  $comentario=mysql_result($select,0,"comentario");
  $fecha=mysql_result($select,0,"fecha");
  //
  $hash=$id.$comentario.$fecha;
  if($hash==NULL)
   {
    echo "vacio";
   }
  else
   {
    $hash=md5($id.$comentario.$fecha);
    echo $hash;
   }
  exit();
 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MiniChat :)</title>
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript"> 
setInterval("fajax3()",1000);
</script>
</head>
<body>
<input type="text" id="comentario" size="50" maxlength="50" />
<input type="button" value="enviar" onclick="fajax()" />
<div id="chat">
</div>
<input type="hidden" id="id_hash" value="" />
<script type="text/javascript">
    document.getElementById('comentario').value="";
    document.getElementById('comentario').focus();
 fajax3();
</script>
</body>
</html> 