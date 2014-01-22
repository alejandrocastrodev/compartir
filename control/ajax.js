function ajaxFunction()
  {
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
function fajax()
{
    var comentario; 
    comentario = document.getElementById('comentario').value;
    var ajax;
    ajax = new ajaxFunction();

    ajax.open("POST","?Enviar=si",true);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("comentario="+comentario);

    document.getElementById('comentario').value="";
    document.getElementById('comentario').focus();
    fajax3();
}
function fajax2()
 {
    var ajax;
    ajax=new ajaxFunction();
    ajax.onreadystatechange=function()
      {
      if(ajax.readyState==4)
        {
        document.getElementById('chat').innerHTML=ajax.responseText;
        }
      }
    ajax.open("GET","?Leer=si",true);
    ajax.send(null);    
 } 
function fajax3()
 {
    var ajax;
    ajax=new ajaxFunction();
    var hashviejo;
    hashviejo=document.getElementById('id_hash').value;
    ajax.onreadystatechange=function()
      {
      if(ajax.readyState==4)
        {
	if(hashviejo!=ajax.responseText && ajax.responseText!='vacio')
	 {
		document.getElementById('id_hash').value=ajax.responseText;
		fajax2();		
	 }        
        }
      }
    ajax.open("GET","?Hash=si",true);
    ajax.send(null);
 }