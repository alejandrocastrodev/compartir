
<div id="log">
  <div id="log-top">


<?php

if($_SESSION["error"])
    {
    ?>
    <p class="log-text" style="color: red;">Los datos son incorrectos.<p/>
    <p class="log-text">Intentelo nuevamente.<p/>
    <?php
	$_SESSION["error"] = false;
    }
else
    {
    if($_SESSION["desconect"])
        {
        ?>
        <p class="log-text">Se ha iniciado sesion<p/>
        <p class="log-text">en otro equipo.<p/>
        <?php
        }
    else
        {
        ?>
        <p class="log-text">Ingrese sus datos<p/>
        <p class="log-text">para iniciar sesion.<p/>
        <?php
        }
    }
?>



	</div><!-- cierra log-top -->
  <div id="log-bot">

<!-- Empieza el form -->

<SCRIPT TYPE="text/javascript">

function submitenter(myfield,e)
{
var keycode;
if (window.event) keycode = window.event.keyCode;
else if (e) keycode = e.which;
else return true;

if (keycode == 13)
   {
   myfield.form.submit();
   return false;
   }
else
   return true;
}

</SCRIPT>

    <form action="../login/login-try.php" method="post" id="form_log" name="form_log">
		<p>Nombre de usuario:<br>
		<input id="name" name="name" type="text" size="31" style="font-family: sans-serif; font-size: 16px; margin-top: 10px; border: 0px;" 
           onKeyPress="return submitenter(this,event)">
		</p>
		<p>Contrase&ntilde;a:<br>
		<input id="pass" name="pass" type="password" size="31" style="font-family: sans-serif; font-size: 16px; margin-top: 10px; border: 0px;"
           onKeyPress="return submitenter(this,event)">
		</p>
		<p class="button">
		<a href="javascript:document.form_log.submit()">Enviar</a>
		<a href="javascript:document.form_log.reset()">Borrar</a>
		</p>
    </form>	




 
  </div><!-- cierra log-bot -->
</div><!-- cierra log -->
