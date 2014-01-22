var blockScrollable = false;
var scrollable;
var arrayScrollables = new Array();
var selectorObject;
var cursorTemp;
var savedPositionY;
var savedMargin;

function setScrollable(elem){
  if(!blockScrollable)
  { 
    scrollable = elem;
    if (!contains(arrayScrollables, elem))
    {
    addMsScrl();
    arrayScrollables.push(elem);
	
    if(movFrom(scrollable).style.marginTop == "")
	  {
	  movFrom(scrollable).style.marginTop = '0px';	
	  }
    }	
  }
}


function contains(a, obj) {
    var lenghArray = a.length;
    for (var i = 0; i < lenghArray; i++) {
        if (a[i] == obj) {
            return true;
        }
    }
    return false;
}


function addMsScrl() 
{

    var tempScrl = scrllIFrom(scrollable);
    // for mouse scrolling in Firefox
    if (tempScrl.addEventListener) 
	{
	  // all browsers except IE before version 9
      // Internet Explorer, Opera, Google Chrome and Safari
      tempScrl.addEventListener ("mousewheel", mouseScroll, false);
      // Firefox
      tempScrl.addEventListener ("DOMMouseScroll", mouseScroll, false);
    }
    else 
	{
      if (tempScrl.attachEvent) 
	    { // IE before version 9	
          tempScrl.attachEvent ("onmousewheel", mouseScroll);
        }
    }
}

function movFrom(elemPadre)
{
var hijo = searchNode(elemPadre, 'bas');
return searchNode(hijo, 'mov');
}

function scrllIFrom(elemPadre)
{
var hijo = searchNode(elemPadre, 'scrllOut');
return searchNode(hijo, 'scrllI');
}

function searchNode(elemPadre, nameClass){
var hijos = elemPadre.childNodes;
var lenghArray = hijos.length;
for (var i = 0; i < lenghArray; i++)
{if (hijos[i].className == nameClass){return hijos[i];}}
}

function mouseScroll(event) 
{   
var rolled = 0;
if ('wheelDelta' in event)
{
  rolled = event.wheelDelta;
}
else 
{  
  // Firefox
  // The measurement units of the detail and wheelDelta properties are different.
  rolled = -40 * event.detail;
}      	
//moverScroll(-(rolled / 2));
actualizarMov(scrollable, 5);
}

function actualizarMov(scrllElem, repeatN)
{
var altoDiv = searchNode(scrllElem, 'bas').offsetHeight; //altura del div externo
var scroll = scrllIFrom(scrllElem); //div interno
var total = scroll.scrollHeight; // altura del del div interno
var scrolled = scroll.scrollTop; // largo de la fraccion oculta arriba
porcentBar((scrolled * 100 / (total - altoDiv)), scrllElem);
if(repeatN > 0){
setTimeout(function(){actualizarMov(scrllElem, (repeatN - 1))}, 50);
}
}


function porcentBar(porcent, scrllElem)
{
var desplazable = movFrom(scrllElem);
var minimo = desplazable.offsetHeight;
var maximo = searchNode(scrllElem, 'bas').offsetHeight;
var recorrido = maximo - minimo;
var finalMargin = recorrido * porcent / 100;
if(porcent > 100){finalMargin = recorrido;}
desplazable.style.marginTop = finalMargin+"px";
}



function iniciarDrag(e) 
{
    // for mouse scrolling in Firefox
    if (document.addEventListener) 
	{
	  // all browsers except IE before version 9
      // Internet Explorer, Opera, Google Chrome and Safari
      document.addEventListener ('mousemove', updatePosition, false);
      document.addEventListener ('mouseup', finalizarDrag, false);
    }
    else 
	{
      if (document.attachEvent) 
	    { // IE before version 9	
          document.attachEvent ('onmousemove', updatePosition); 
          document.attachEvent ('onmouseup', finalizarDrag);   
        }
    }
	blockScrollable = true;
	disableSelection();
	savePosition(e);
    savedMargin = parseInt(movFrom(scrollable).style.marginTop.replace("px", ""));
}

function savePosition(e){
// capture the mouse position
    if (!e) var e = window.event;
    if (e.pageY)
    {
        savedPositionY = e.pageY;
    }
    else if (e.clientY)
    {
        savedPositionY = e.clientY;
    }
}

function updatePosition(e){
var scrollDiv = scrllIFrom(scrollable);
var max = scrollDiv.scrollHeight;
var altoDiv = searchNode(scrollable, 'bas').offsetHeight;

if( max > altoDiv )
{
  // capture the mouse position
  var posy;
  if (!e) var e = window.event;
  if (e.pageY)
  {
      posy = e.pageY;
  }
  else if (e.clientY)
  {
      posy = e.clientY;
  }
	
  var desplazable = movFrom(scrollable);
  var minimo = desplazable.offsetHeight;
  var maximo = searchNode(scrollable, 'bas').offsetHeight;
  var recorrido = maximo - minimo;
  var mouseRecorrido = (posy - savedPositionY);
  var porcentaje;
  if((mouseRecorrido + savedMargin) < 1)
  {
  porcentaje = 0;
  }
  else
  {
    if((mouseRecorrido + savedMargin) > recorrido)
    {
    porcentaje = (100);
    }
    else
    {
    porcentaje = ((savedMargin + mouseRecorrido) * 100 / recorrido);
    }  
  }	
  porcentBar(porcentaje, scrollable);
  porcentScrollable(porcentaje);	
}
}

function finalizarDrag(){   
if (document.addEventListener) 
	{
	  // all browsers except IE before version 9
      // Internet Explorer, Opera, Google Chrome and Safari
      document.removeEventListener ('mousemove', updatePosition, false);
      document.removeEventListener ('mouseup', finalizarDrag, false);
    }
    else 
	{
      if (document.attachEvent) 
	    { // IE < 9	
          document.detachEvent ('onmousemove', updatePosition); 
          document.detachEvent ('onmouseup', finalizarDrag);   
        }
    }
	enableSelection();
	blockScrollable = false;
}

function finalizarDrag(){   
if (document.addEventListener) 
	{
	  // all browsers except IE before version 9
      // Internet Explorer, Opera, Google Chrome and Safari
      document.removeEventListener ('mousemove', updatePosition, false);
      document.removeEventListener ('mouseup', finalizarDrag, false);
    }
    else 
	{
      if (document.attachEvent) 
	    { // IE < 9	
          document.detachEvent ('onmousemove', updatePosition); 
          document.detachEvent ('onmouseup', finalizarDrag);   
        }
    }
	enableSelection();
	blockScrollable = false;
}

function disableSelection(){
if (typeof document.onselectstart!="undefined") //IE route
    {
	selectorObject = document.onselectstart;
	document.onselectstart=function(){return false};
	}
else 
    {
	    if (typeof document.body.style.MozUserSelect!="undefined") //Firefox route
		{
        selectorObject = document.body.style.MozUserSelect;
	    document.body.style.MozUserSelect="none";
	    }
        else //All other route (ie: Opera)
		{
        selectorObject = document.onmousedown;
	    document.onmousedown=function(){return false};
		}
	}
	cursorTemp = document.body.style.cursor;
    document.body.style.cursor = 'default';
}

function enableSelection(){
if (typeof document.onselectstart!="undefined") //IE route
    {
	document.onselectstart=selectorObject;
	}
else 
    {
	    if (typeof document.body.style.MozUserSelect!="undefined") //Firefox route
		{
	    document.body.style.MozUserSelect=selectorObject;
	    }
        else //All other route (ie: Opera)
		{
	    document.onmousedown=selectorObject;
		}
	}	
	document.body.style.cursor = cursorTemp;
	clearSelection ();
}

function clearSelection () { //usada solo en enableSelection
if (document.selection)
document.selection.empty();
else if (window.getSelection)
window.getSelection().removeAllRanges();
}


function porcentScrollable(rango){
var scrollDiv = scrllIFrom(scrollable);
var max = scrollDiv.scrollHeight;
var altoDiv = searchNode(scrollable, 'bas').offsetHeight;
var porcent = ((max - altoDiv) * rango / 100);
scrollDiv.scrollTop = porcent;
}

function agregarContenido(idChat, nuevoTexto, borrarAnterior){
var frame = document.getElementById(idChat);
var scrollDiv = scrllIFrom(frame);
var temp = "";
if(!borrarAnterior)
  {
  temp = scrollDiv.innerHTML;
  }
scrollDiv.innerHTML = temp + nuevoTexto;

//alfondo scrollable
var tempScrollMax = scrollDiv.scrollHeight;
var tempScrollTop = scrollDiv.scrollTop;
var tempScrollAlto = scrollDiv.offsetHeight
scrollDiv.scrollTop = tempScrollMax;
if(tempScrollMax > tempScrollAlto){
  //actualizar mov  
  var framMov = movFrom(frame);  
  var baseAlto = searchNode(frame, 'bas').offsetHeight; 
  var movAlto = framMov.offsetHeight;
  framMov.style.marginTop = (baseAlto - movAlto) + 'px';
  }
}










































































































































































