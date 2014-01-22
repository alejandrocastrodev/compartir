<html>

<head>
<title>
Prueba de control concurrencia
</title>
</head>

<body>


<script>



function controlChatReload(chatBoxTemp)
{
var lstloadTmp = chatBoxTemp.lastLoad;
var rateLoadTmp = chatBoxTemp.rateLoad;
if(rateLoadTmp < 5000) 
  {  
  if(lstloadTmp*100 > rateLoadTmp)
    {	
	updateControl(chatBoxTemp, (lstloadTmp*200), 'mayor que' + lstloadTmp);
	}
  }
document.getElementById('controlTime').value = parseInt(document.getElementById('controlTime').value) + 1;
}

function updateControl(chatBoxT, rateCtrl, message)
{
document.getElementById('chat1T').value = message;
chatBoxT.clearReloadTime();
chatBoxT.setReloadTime(rateCtrl);
document.getElementById('NameBoxRef').value = chatBoxT.name;
}

var arrayChatBox = new Array();

function turnOnChat(chatId){

var tempChatBox;
if(!containsName(arrayChatBox, chatId))
  {
  tempChatBox = new chatBox(chatId);  
  tempChatBox.turnOn(); 
  arrayChatBox.push(tempChatBox); 
  }
else
  {
  tempChatBox = detectName(arrayChatBox, chatId);
  tempChatBox.turnOn();
  }
}


function turnOffChat(chatId){
if(containsName(arrayChatBox, chatId))
  {
  var tempChatBox = detectName(arrayChatBox, chatId);
  tempChatBox.turnOff();
  }
}


function chatBox(nameP){
  this.name = nameP;
  this.lastLoad = 0;
  this.lasDate = '';
  this.lastIdDate = '';
  this.idLastLine = '';
  this.rateLoad = 0;
  this.reloadFunction = function(){return false;};
  this.controlReloadFunction = function(){return false;};
  this.clearReloadTime = function() 
    {
    clearInterval(this.reloadFunction);
    document.getElementById('timeSet').value = 'tiempo off';
    }
  this.clearControlTime = function() 
    {
    clearInterval(this.controlReloadFunction);
	document.getElementById('controlTime').value = '0';
    }
  this.setReloadTime = function(timeSet) 
    {	
    tempChatBox = this;
    this.reloadFunction = setInterval(function(){reloadChat(tempChatBox);}, timeSet); 
	document.getElementById('timeSet').value = timeSet;
	this.rateLoad = timeSet;
    }  
  this.setControlTime = function(timeSet) 
    {	
    tempChatBox = this;
    this.controlReloadFunction = setInterval(function(){controlChatReload(tempChatBox);}, timeSet);
    }  
  this.turnOn = function() 
    {
    this.setReloadTime(500);
    this.setControlTime(5000);
    }
  this.turnOff = function() 
    {
    clearInterval(this.reloadFunction);
    clearInterval(this.controlReloadFunction);
    }
}


function reloadChat(tempChatBox){
if(document.getElementById('chat1A').value == '1')
  {
  document.getElementById('chat1A').value = '0';
  tempChatBox.lastLoad = 0;
  tempChatBox.clearReloadTime();
  tempChatBox.setReloadTime(1000);
  }
else
  {
  tempChatBox.lastLoad++;
  }
document.getElementById('chat1C').value = tempChatBox.lastLoad;
}

function containsName(a, str) {
    var lenghArray = a.length;
    for (var i = 0; i < lenghArray; i++) {
        if (a[i].name == str) {
            return true;
        }
    }
    return false;
}

function detectName(a, str) {
    var lenghArray = a.length;
    for (var i = 0; i < lenghArray; i++) {
        if (a[i].name == str) {
            return a[i];
        }
    }
    return false;
}

/*

function testChatBox(parametro){
var tempChatBox = new Array();
tempChatBox.lastLoad = parametro;
controlChatReload(tempChatBox);
}
//pedir a ajax que envie el pedido con
////chatBoxP.lasDate;
////chatBoxP.lastIdDate;
////chatBoxP.idLastLine;

////chatBoxP.lastLoad ++; //se incrementa el ultimo jit

//la respuesta puede ser 
//FALSE = no hay datos nuevos
//DISMIS = hay que cargar todo el chat invoca metodo getTotalChat con chatBoxP.Name
//OTHERWISE = se carga todo lo recivido al chat con agregar contenido 
  //se resetea chatBoxP.lastLoad 
  
*/

</script>


<div id="chat1">
  <input type="button" value="ON" onclick="javascript:turnOnChat('chat1')"> <br>
  <input type="button" value="OFF" onclick="javascript:turnOffChat('chat1')"> <br>
  Count: <input type="text" disabled="disable" value="0" id="chat1C"> <br>
  Timeload: <input type="text" disabled="disable" value="empty" id="chat1T"> <br>
  Assert: <input type="text" value="empty" id="chat1A"> <br>
  TimeSetReload: <input type="text" disabled="disable" value="empty" id="timeSet"> <br>
  ControlReload: <input type="text" disabled="disable" value="0" id="controlTime"> <br>
  NameBoxRef: <input type="text" disabled="disable" value="empty" id="NameBoxRef"> <br>
  <input type="button" value="Test" onclick="javascript:testChatBox(21)"> <br>
</div>


</body>
</html>