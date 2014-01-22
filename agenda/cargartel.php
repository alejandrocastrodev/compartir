<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<head>
<LINK rel="stylesheet" href="archivos/style-cargar.css" type="text/css" media="all">
<script src="archivos/java.js" type="text/javascript"></script>
<title>Cargar numero telefonico</title>
</head>

<body>

<div id="cargaFrame">
<p class="carga">Telefono: (solo dijitos)</p>
<input type="text" id="telefono" value="Ingrese el numero" style="color: grey;" size="50" onfocus="if(this.value == 'Ingrese el numero'){this.value = ''; this.style.color = 'black';}">
<p class="carga">Tipo:</p>
<div id="boton1" class="desactivado"><a href="javascript:void(0);" onclick="typeTel('linea', 'boton1')">Linea</a></div>
<div id="boton2" class="desactivado"><a href="javascript:void(0);" onclick="typeTel('movil', 'boton2')">Movil</a></div>
<div id="boton3" class="desactivado"><a href="javascript:void(0);" onclick="typeTel('radio', 'boton3')">Radio</a></div>
<input type="hidden" id="telType" name="telType">

<input type="button" value="Aceptar" style="float: left; clear: both;" onclick="javascript:enviarTelefono()" >

</div>

<body>