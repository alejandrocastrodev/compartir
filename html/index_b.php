<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<title>Really-Lan-Cloud</title>


</head>

<body <?php if($_SESSION["log"]){ ?> onload="javascript:turnOnChat('chat1');"  <?php } ?>>

<div id="top-bar">

<ul class="menu-top">
<li <?php if($actual == "inicio")	{echo "class=\"current-top\"><a href=\"#\"";}	else{echo "><a href=\"../site/index.php\""; }		            ?>	 title="Bienvenidos"><b>Inicio</b></a></li>
<li <?php if($actual == "languages")	{echo "class=\"current-top\"><a href=\"#\"";}	else{echo "><a href=\"../site/languages.php\"";}	    ?>	 title="Cambiar lenguaje"><b>Idiomas</b></a></li>
<li <?php if($actual == "skins")	{echo "class=\"current-top\"><a href=\"#\"";}	else{echo "><a href=\"../site/skins.php\"";}	            ?>	 title="Cambiar modo visual"><b>M&aacute;scaras</b></a></li>
<li <?php if($actual == "applications")	{echo "class=\"current-top\"><a href=\"#\"";}	else{echo "><a href=\"../site/applications.php\"";}	?>	 title="Solicitud de modificaciones"><b>Sugerencias</b></a></li>
<li <?php if($actual == "contact")	{echo "class=\"current-top\"><a href=\"#\"";}	else{echo "><a href=\"../site/contact.php\"";}	        ?>	 title="Contactanos"><b>Contacto</b></a></li>
<li <?php if($actual == "admin")	{echo "class=\"current-top\"><a href=\"#\"";}	else{echo "class=\"current-top-2\"><a href=\"../site/admin.php\"";}	            ?>	 title="Configuracion del sistema"><b>Administrador</b></a></li>
</ul> <!-- cierra top-bar -->

</div > <!-- cierra menu-top -->


<div id="false-body">




<div id="header">


<div id="logo">
<IMG src="../images/logo.png" alt="My Cloud" title="My Cloud" style="background: none; float: left; width: 200px; height: 80px; border: 0px; margin: 0px; padding: 0px;">
</div > <!-- cierra logo -->

<div id="logo" >
<IMG src="../images/logo-duam.png" alt="My Cloud" title="My Cloud" style="background: none; float: left; width: 227px; height: 80px; border: 0px; margin: 0px; padding: 0px;">
</div > <!-- cierra logo -->

</div > <!-- cierra header -->

<div id="session">

  <div id="session-left">
  </div > <!-- cierra session-left -->
  
  <div id="session-right">
  </div > <!-- cierra session-right -->
  <div id="session-center2">
  
  <?php


  if($_SESSION["log"])
  {
  //empieza la barra con registro de sesion
  ?>
  
  <p class="session2"><a href="../login/login-out.php" title="Abandonar la sesion actual"><b>Cerrar sesi&oacute;n</b></a></p>  
  </div > <!-- session-center2 -->
  
  <div id="session-center1">
  <p class="session1">Sesion iniciada por <span style="color: #ff4;"><?php echo $_SESSION["nick"]; ?></span></p>

  
  

  <?php
  }
  else
  //empieza la barra sin registro de sesion
  {
  ?>
  
  
  <p class="session2-of"><a href="#" title="No hay sesion iniciada"><b>Cerrar sesi&oacute;n</b></a></p>
   </div > <!-- session-center2 -->
	
  <div id="session-center1">
  <p class="session1">No se ha iniciado sesi&oacute;n a&uacute;n</p>


  <?php
  }
  ?>
  </div > <!-- session-center1 -->

  
</div > <!-- cierra session -->

<div id="titles">

    <div id="titles-left-a">  
    </div > <!-- cierra titles-left-a -->
    <div id="titles-left-b">  
	    <p class="titles1">Menu</p>
    </div > <!-- cierra titles-left-b -->
    <div id="titles-left-c">  
    </div > <!-- cierra titles-left-c -->
  

    <div id="titles-center-a">  
    </div > <!-- cierra titles-center-a -->

  
    <div id="titles-right-c">  
    </div > <!-- cierra titles-right-c -->    
	<div id="titles-right-b">  
	    <p class="titles2"><!-- titulo1 --></p>
    </div > <!-- cierra titles-right-b -->
    
	<div id="titles-right-a">  
    </div > <!-- cierra titles-right-a -->


    <div id="titles-center-c">  
    </div > <!-- cierra titles-center-c -->
    <div id="titles-center-b">  
	    <p class="titles3"><!-- titulo2 --></p>
    </div > <!-- cierra titles-center-b -->


</div > <!-- cierra titles -->



<div id="real-body">

  <div id="body-left">
  
  
  <div id="menu-left">
    <ul class="menu-left">
      <li <?php if($actual == "upload")	    {echo "class=\"current-left\"><a href=\"#\"";}	else{echo "><a href=\"../site/upload.php\""; }    ?>	 title="Comparta sus archivos"><b>Almacenar</b></a></li>
      <li <?php if($actual == "download")   {echo "class=\"current-left\"><a href=\"#\"";}	else{echo "><a href=\"../site/download.php\"";}   ?>	 title="Descargue archivos"><b>Descargar</b></a></li>
      <li <?php if($actual == "self-files") {echo "class=\"current-left\"><a href=\"#\"";}	else{echo "><a href=\"../site/self-files.php\"";} ?>	 title="Administre sus archivos"><b>Mis archivos</b></a></li>
      <li <?php if($actual == "count")	    {echo "class=\"current-left\"><a href=\"#\"";}	else{echo "><a href=\"../site/count.php\"";}      ?>	 title="Mi cuenta"><b>Mi cuenta</b></a></li>
      <li <?php if($actual == "exit")         {echo "class=\"current-left\"><a href=\"#\"";}	else{echo "><a href=\"../site/exit.php\"";}   ?>	 title="Link # 2"><b>Exit</b></a></li>
      <li <?php if($actual == "L3")         {echo "class=\"current-left\"><a href=\"#\"";}	else{echo "><a href=\"#\"";}                      ?>	 title="Link # 3"><b>Link # 3</b></a></li>
    </ul>  <!-- cierra menu-left -->
  </div > <!-- cierra menu-left -->

  
    <div id="menu-left-boot">  
    </div > <!-- cierra menu-left-boot -->

  </div > <!-- cierra body-left -->
  

	
	
  <div id="body-right">
    <?php include $link_back."../chat/chat.php"; ?>
		
  </div > <!-- cierra body-right -->
  
  
  <div id="body-center">