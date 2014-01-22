
function validarTwin()
  {	
  var pass = document.getElementById('pass_change');
  var pass2 = document.getElementById('pass_change_replay');
  var check = document.getElementById("checkP");
  if (pass2.value == "")
    {
	check.style.color = "#FFF";		
	check.innerHTML = "Repita su contrase&#241;a actual:";	
	}
  else
    {
    if ( pass.value == pass2.value )
      {	
      check.style.color = "#0f0";		
      check.innerHTML = "Los campos coinciden";		
      }
    else
      {	
      check.style.color = "red";		
      check.innerHTML = "Los campo no coinciden";	
      }	
	}
  }	

function submitEnterQ(e)
  {
  var keycode;
  if (window.event) keycode = window.event.keyCode;
  else if (e) keycode = e.which;
  else return false;
  if (keycode == 13)
    {
    return true;
    }
  else
    return false;
  }

function submitEnterPass(e){
  if (submitEnterQ(e))
    {
	ejecutarFormPass();
	}
}

function ejecutarFormPass(){
if (validarEnvio())
  {
  document.getElementById('changePass').submit();
  }
else
  {
  errorFields();
  }
}

var color = 0;
function changeColor(){	
  var element = document.getElementById("errorP");
  if (color == 0)
    {	
    element.style.color = "#0f0";
	color = 1;
	}
  else
    {	
    element.style.color = "#f00";	
	color = 0;
	}
}


function errorFields()
{
  var title = document.getElementById("errorP");
  title.style.color = "#f00";
  setInterval('changeColor()', 500);
  title.innerHTML = "Complete los datos correctamente";	
}


function validarEnvio()
  {
  var orig = document.getElementById('pass_original');
  var pass = document.getElementById('pass_change');
  var pass2 = document.getElementById('pass_change_replay');
  return ( (orig.value.length > 3) && (pass.value.length > 3) && (pass.value == pass2.value) )
  }
 
 
 
 
 
 
 
