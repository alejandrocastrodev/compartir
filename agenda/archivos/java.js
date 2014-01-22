function agregarTel(){
alert("hola");
var name = prompt("Please enter your name","Harry Potter");
alert (name);
}

function agregarTel(){
ventanaHija = window.open("cargartel.php" ,"Cargar telefono","width=500px, height=280px, scrollbars=NO, top=100px, left=400px, Location=no, menubar=no ");
}

function typeTel(tipo, idBoton){
document.getElementById('telType').value = tipo;
//agregar todas las opciones de telefonos
document.getElementById('boton1').className = 'desactivado';
document.getElementById('boton2').className = 'desactivado';
document.getElementById('boton3').className = 'desactivado';
document.getElementById(idBoton).className = 'activado';

}

function enviarTelefono(){
var tipo = document.getElementById('telType');
var telefono = document.getElementById('telefono');

if(tipo.value == "") //no selecciono tipo de telefono
  {
  alert("Debe seleccionar un tipo de telefono");
  }
else
  {	
  if(telefono.value == "")
    {
	alert("Debe ingresar un numero telefonico");
	}
  else
    {
	if(esIncorrecto(telefono.value))
      {
	  alert("El formato del numero telefonico es incorrecto");
	  }
	else
	  {
	  window.opener.cargarTelefono(telefono.value + "," + tipo.value);
	  }
	}
  }
}

function esIncorrecto(telefono)
{
var RegExPattern = /^[0-9]{2,}$/;
return (!telefono.match(RegExPattern));
}

function cargarTelefono(telefonoTipo){
var listaTelefonos = document.getElementById('listaTelefonos');
addTo(listaTelefonos, telefonoTipo);
ventanaHija.close();
updateTelefonos();
}

function updateTelefonos(){
var divTelefonos = document.getElementById('box_multi_t');
var listaTelefonos = document.getElementById('listaTelefonos');
if(listaTelefonos.value == "")
  {
  divTelefonos.innerHTML = "<div id=\"empty\" ><p>No se ingreso ningun telefono a&uacute;n</p></div>";
  }
else
  {
  var textTemp = listaTelefonos.value;
  var htmlTemp = "";  
  var headText;
  var frstHeadText;
  var scndHeadText;
  while(textTemp != "")
    {
	headText = headOf(textTemp);
	frstHeadText = frstOf(headText);
	scndHeadText = scndOf(headText);
	textTemp = tailOf(textTemp);
	htmlTemp = htmlTemp + "<div id=\"datoFrame\"><p>" + frstHeadText + " " + scndHeadText + " <input type=\"button\" value=\"X\" onclick=\"borrar('" + frstHeadText + "," + scndHeadText + "')\"></p></div>" ;
	}
  divTelefonos.innerHTML = htmlTemp;
  }
}



function borrar(telefonoTipo){
var listaTelefonos = document.getElementById('listaTelefonos');
remove(telefonoTipo, listaTelefonos);
updateTelefonos();
}










