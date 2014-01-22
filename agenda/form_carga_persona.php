<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"></html>

<LINK rel="stylesheet" href="archivos/style.css" type="text/css" media="all">
<script src="archivos/java.js" type="text/javascript"></script>
<script src="archivos/list.js" type="text/javascript"></script>

<head>
<title>Agenda HENRY</title>
</head>

<body>

<div id="false-body">


<form action="cargar_persona.php" method="post" id="cargar_persona_form" name="cargar_persona_form" style>


<p id="table1" style="background-color: #666; text-indent: 10px; color: white; padding: 10px 0px; border: 1px solid blue; width: 698px;">Informacion nueva persona</p>
</br></br>

<table id="table1" style="border: 1px solid red">
<tr> <td>Nombres:</td> <td>Apellidos:</td> <td>Alias:</td> </tr>
<tr>
  <td><input type="text" id="prsn_nombre" name="prsn_nombre" size="30"></td>
  <td><input type="text" id="prsn_apellido" name="prsn_apellido" size="30"></td>
  <td><input type="text" id="prsn_alias" name="prsn_alias" size="20"></td>
</tr>
</table>


<table id="table1" style="border: 1px solid red">

<tr> <td>Tipo documento:</td> <td>Numero:</td> <td>Cuil:</td> <td>Ocupacion:</td> </tr>
<tr>
  <td>
  <select>
  <option selected>DNI</option>
  <option>CI Argentina</option>
  <option>CI Paraguay</option>
  <option>CI Bolivia</option>
  <option>CI Uruguay</option>
  </select>
  </td>
  <td><input type="text" id="prsn_dni" name="prsn_dni" size="12"></td>
  <td><input type="text" id="prsn_cuil" name="prsn_cuil" size="16"></td>
  <td><input type="text" id="prsn_ocup" name="prsn_ocup" size="20"></td> 
</tr>
</table>


<table id="table1" style="border: 1px solid red">
<tr> <td>Calle:</td> <td>Numero:</td> <td>Entrecalles (separadas por espacios):</td></tr>
<tr>
  <td><input type="text" id="prsn_calle" name="prsn_calle" size="30"></td>
  <td><input type="text" id="prsn_numero" name="prsn_numero" size="10"></td>
  <td><input type="text" id="prsn_e_calles" name="prsn_e_calles" size="50"></td>
</tr>
<tr> <td colspan="3">Barrio:</td> </tr>
<tr>  <td colspan="3"><input type="text" id="prsn_barrio" name="prsn_barrio" size="30"></td> </tr>
</table>


<table id="table1" style="border: 1px solid red">
<tr> <td>Telefonos:</td> <td>Correos:</td> </tr>
<tr>
  <td><input type="button" id="telefono" name="telefono" value="Agregar telefono" onclick="javascript:agregarTel();"></td>
  <td><input type="button" id="correo" name="correo" value="Agregar correo"  onclick="javascript:agregarCorreo();"></td>
</tr>

<tr>
  <td><div id="box_multi_t" ><div id="empty" ><p>No se ingreso ningun telefono a&uacute;n</p></div></div></td>
  <td><div id="box_multi_c"><div id="empty" ><p>No se ingreso ningun correo a&uacute;n</p></div></div></td>
</tr>

</table>


<table id="table1" style="border: 1px solid red">
<tr> <td>Observaciones:</td> </tr>
<tr>
  <td><textarea name="observ" cols="83" rows="4" id="observ" class="espaciado"></textarea></td>
</tr>
</table>

<table id="table1" >
  <tr>
    <td> <input type="submit" value="Enviar"> <input type="reset">  </td>
  </tr>
</table>

<input type="text" id="listaTelefonos" value="">
<input type="text" id="listaMails" value="">


</form>

</div>

</body>