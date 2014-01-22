var arrayChatBox = new Array();

function chatBox(nameP){
  this.name = nameP;
  this.reloadGo = true;
  this.lastLoad = 0;
  this.lastDate = '';
  this.lastIdUser = '';
  this.lastIdDate = '';
  this.idLastLine = '';
  this.rateLoad = 0;
  this.reloadFunction = function(){return false;};
  this.controlReloadFunction = function(){return false;};
  this.clearReloadTime = function() 
    {
    clearInterval(this.reloadFunction);
    }
  this.clearControlTime = function() 
    {
    clearInterval(this.controlReloadFunction);
	}
  this.setReloadTime = function(timeSet) 
    {	
    tempChatBox = this;
    this.reloadFunction = setInterval(function(){reloadChat(tempChatBox);}, timeSet); 
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

function turnOnChat(chatId){
var tempChatBox;
if(!containsName(arrayChatBox, chatId))
  {
  tempChatBox = new chatBox(chatId);  
  arrayChatBox.push(tempChatBox);   
  getTotalChat(tempChatBox);  
  registrar('se prende ' + chatId);
  }
else
  {
  tempChatBox = detectName(arrayChatBox, chatId);
  tempChatBox.turnOn();
  registrar('se re-prende ' + chatId);
  //aca se levanta solo el reload
  }
}

function registrar(textoDM)
{
//document.getElementById('operation').innerHTML += textoDM + '</br>'; 
return false;
}

function containsName(a, str){
    var lenghArray = a.length;
    for (var i = 0; i < lenghArray; i++) {
        if (a[i].name == str) {
            return true;
        }
    }
    return false;
}

function detectName(a, str){
    var lenghArray = a.length;
    for (var i = 0; i < lenghArray; i++) {
        if (a[i].name == str) {
            return a[i];
        }
    }
    return false;
}

function turnOffChat(chatId){
registrar('se pide off ' + chatId);
if(containsName(arrayChatBox, chatId))
  {
  registrar('se concreta off ' + chatId);
  var tempChatBox = detectName(arrayChatBox, chatId);
  tempChatBox.turnOff();
  }
}

function controlChatReload(chatBoxTemp)
{
var lstloadTmp = chatBoxTemp.lastLoad;
var rateLoadTmp = chatBoxTemp.rateLoad;
if(rateLoadTmp < 5000) 
  {  
  if(lstloadTmp*100 > rateLoadTmp)
    {	
    registrar('se setea rate en ' + (lstloadTmp*200));
	updateControl(chatBoxTemp, (lstloadTmp*200));
	}
  }
}

function updateControl(chatBoxT, rateCtrl)
{
chatBoxT.clearReloadTime();
chatBoxT.setReloadTime(rateCtrl);
}

function reloadChat(tempChatBox){
    if(tempChatBox.reloadGo)
    {
	registrar('se inicia un pedido al servidor');
    tempChatBox.reloadGo = false;
    var ajax;
    ajax=new ajaxFunction();
	var catchError = setTimeout(function(){if(!tempChatBox.reloadGo){ ajax.abort();tempChatBox.reloadGo = true; }}, 10000);
    ajax.onreadystatechange=function()
      {
      if(ajax.readyState == 4)
        {
		if(ajax.status == 200)
		  {
		  registrar('se recibe del servidor' + ajax.responseText);
		  var respuesta = eval(ajax.responseText);
		  if(respuesta[0][0] == 'empty')
		    {
			document.getElementById('chat1j').value = respuesta[0][1] + "aca";
			tempChatBox.lastLoad++;
			}
          else if(respuesta[0][0] == 'errorData')
            {
			//document.getElementById('chat1j').value = respuesta[1][0];
		    getTotalChat(tempChatBox);
			tempChatBox.lastLoad = 0;
		    }
          else if(respuesta[0][0] == 'ok')		  
            {
			document.getElementById('chat1j').value = parseInt(document.getElementById('chat1j').value) + 1;
			var nuevoArray = respuesta[1]
			var textRender = '';
			var largoArray = nuevoArray.length - 1;
            //formato:  0 id_linea  1 mensaje 2 user_id 3 nombre_chat 4 fecha_hora 5 id_mje_actual
            for(i = 0 ; i <= largoArray ; i++)
              {
			  textRender += "<div class=\"contenedor\"><div class=\"contenedorL\"><IMG src=\"../images/profile/"+ nuevoArray[i][2] +".png\" ><p>"+ nuevoArray[i][3] +"</p></div><div class=\"contenedorR\"><p>" + nuevoArray[i][1] +"</p></div></div>";
            
              //textRender += "<div class=\"contenedor\"><p><IMG src=\"../images/profile/"+ nuevoArray[i][2] +".png\" >"+ nuevoArray[i][1] +"</p><br></div>";
              }			
			agregarContenido(tempChatBox.name, textRender, false);
			
			tempChatBox.lastIdUser = nuevoArray[largoArray][2];
		    tempChatBox.lastDate = nuevoArray[largoArray][4];
            tempChatBox.lastIdDate = nuevoArray[largoArray][5];
            tempChatBox.idLastLine = nuevoArray[largoArray][0];
		
            tempChatBox.lastLoad = 0;
            if(tempChatBox.rateLoad > 2000)
			  {
			  tempChatBox.clearReloadTime();
              tempChatBox.setReloadTime(1000);
			  }
	        }
		  clearTimeout(catchError);
		  }
		else
		  {
		  registrar('diferente 200');
		  //alert('/=200');
		  }
		
		document.getElementById('chat1A').value = parseInt(document.getElementById('chat1A').value) + 1;
		tempChatBox.reloadGo = true;		
		}
	  }
	ajax.open("POST","../chat/getcomentario.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	document.getElementById('chat1f').value = tempChatBox.lastIdUser;
	document.getElementById('chat1g').value = tempChatBox.lastDate;
	document.getElementById('chat1h').value = tempChatBox.lastIdDate;
	document.getElementById('chat1i').value = tempChatBox.idLastLine;
	ajax.send("idLastLine="+tempChatBox.idLastLine+"&lastDate="+tempChatBox.lastDate+"&lastIdDate="+tempChatBox.lastIdDate+"&chatId="+tempChatBox.name);	    
    }
  else
    {
	tempChatBox.lastLoad++;
	document.getElementById('chat1A').value = parseInt(document.getElementById('chat1A').value) - 1;
	}
}





function controlKey(event, element, idChat){
  var keycode;
  var shiftDawn;
  if (window.event) 
    {
	keycode = window.event.keyCode;
	shiftDawn = window.event.shiftKey;
	}
  else if (event) 
    {
	keycode = event.which; 
    shiftDawn = event.shiftKey;
	}
  else return false;
  if (keycode == 13 && (shiftDawn != 1))
    {
	var nuevoTexto = element.value;
	//.replace(/\n/gi,"</br>");
	/*var largoTexto = nuevoTexto.length;
	while(nuevoTexto.substring((largoTexto - 3),largoTexto) == '\\n')
	{
	nuevoTexto = nuevoTexto.substring(0, largoTexto - 3);
	nuevoTexto += "salto";
	largoTexto = nuevoTexto.length;
	}*/
	if(nuevoTexto.match(/\S+/))
      {
	  enviarAJAX(idChat, nuevoTexto);
	  registrar('texto a enviar: ' + nuevoTexto);
	  element.value = '';
	  }
    }

}

function clearEnter(event, element){
  if(!(event.shiftKey==1))
  {
  var keycode;
  if (window.event) keycode = window.event.keyCode;
  else if (event) keycode = event.which;
  else return false;
  if (keycode == 13)
    {
	var nuevoTexto = element.value;
	if (nuevoTexto.match(/^[\n ]+$/))
      {
      element.value = '';
      }
    }
  }
}


function enviarAJAX(id_chat, nuevoComentario){
  var ajax;
  ajax = new ajaxFunction();
  ajax.onreadystatechange=function()
      {
      if(ajax.readyState==4)
        {
		var tempChat = detectName(arrayChatBox, id_chat);		
		reloadChat(tempChat);
		if(ajax.responseText != "")
          {
		  alert(ajax.responseText);		  
		  // ################## hay que hacer algo con la respuesta erronea ##################
		  }
		}
	  }
  ajax.open("POST","../chat/addcomentario.php",true);
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  ajax.send("comentario="+nuevoComentario+"&chat_id="+id_chat);
}

function ajaxFunction(){
  var xmlHttp;
  try
    {
    // Firefox, Opera 8.0+, Safari
    xmlHttp=new XMLHttpRequest();
    return xmlHttp;
    }
  catch (e)
    {
    // Internet Explorer
    try
      {
      xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
      return xmlHttp;
      }
    catch (e)
      {
      try
        {
        xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
        return xmlHttp;
        }
      catch (e)
        {
        alert("Your browser does not support AJAX!");
        return false;
        }
      }
    }
  }

function getTotalChat(chatBox){
    idChat = chatBox.name;
    var ajax;
    ajax=new ajaxFunction();
    ajax.onreadystatechange=function()
      {
      if(ajax.readyState==4)
        {
		
		registrar('se pide agregar ' + ajax.responseText);
        var nuevoArray = eval(ajax.responseText);

        var textRender = "";
		registrar('largo del array' + nuevoArray.length)
		
		if(nuevoArray.length > 0)
		  {
		  var largoArray = nuevoArray.length - 1;
		  registrar('largo del array' + largoArray);
          //formato:  0 id_linea  1 mensaje 2 user_id 3 nombre_chat 4 fecha_hora 5 id_mje_actual
          for(i = 0 ; i <= largoArray ; i++)
            {		  
            textRender += "<div class=\"contenedor\"><div class=\"contenedorL\"><IMG src=\"../images/profile/"+ nuevoArray[i][2] +".png\" ><p>"+ nuevoArray[i][3] +"</p></div><div class=\"contenedorR\"><p>" + nuevoArray[i][1] +"</p></div></div>";
            }
		  agregarContenido(idChat, textRender, true);
		  	
		  registrar('al final largo del array ' + largoArray);
		  registrar('se cargo todo hasta la linea' + nuevoArray[largoArray][0]);
		
		  chatBox.lastIdUser = nuevoArray[largoArray][2];
		  chatBox.lastDate = nuevoArray[largoArray][4];
          chatBox.lastIdDate = nuevoArray[largoArray][5];
          chatBox.idLastLine = nuevoArray[largoArray][0];
		  document.getElementById('chat1f').value = chatBox.lastIdUser;
		  document.getElementById('chat1g').value = chatBox.lastDate;
		  document.getElementById('chat1h').value = chatBox.lastIdDate;
		  document.getElementById('chat1i').value = chatBox.idLastLine;
		  }			
        chatBox.turnOn(); 
        }
      }
    ajax.open("POST","../chat/getcomplete.php",true);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("chat_id="+idChat);    
 } 











