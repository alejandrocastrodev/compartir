<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Prueba de scroll en capas con JavaScript</title>
<LINK rel="stylesheet" href="scroll.css" type="text/css" media="all">
<script type="text/javascript" src="scroll.js"></script>
 
<style type="text/css">
 
</style>
</head>
 
<body onload="javascript:agregarMostrarScrollTop();">

<div id="separador" style="float: left;">

<div class="frm" onMouseOver="javascript:setScrollable(this);">
  <div class="bas">
    <div  class="mov" onMouseDown="javascript:iniciarDrag(event);">
    </div>
  </div>
  
  <div class="scrllOut" >
  <div class="scrllI" >
       <p>1 Mucho contenido<br>2 Mucho contenido<br>3 Mucho contenido<br>4 Mucho contenido<br></p>
       <p>5 Mucho contenido<br>6 Mucho contenido<br>7 Mucho contenido<br>8 Mucho contenido<br></p>
       <p>9 Mucho contenido<br>11 Mucho contenido<br>12 Mucho contenido<br>13 Mucho contenido<br></p>
       <p>14 Mucho contenido<br>15 Mucho contenido<br>16 Mucho contenido<br>17 Mucho contenido<br></p>
       <p>18 Mucho contenido<br>19 Mucho contenido<br>20 Mucho contenido<br>21 Mucho contenido<br></p>
       <p>22 Mucho contenido<br>23 Mucho contenido<br>24 Mucho contenido<br>25 Mucho contenido<br></p>
       <p>26 Mucho contenido<br>27 Mucho contenido<br>28 Mucho contenido<br>29 Mucho contenido<br></p>
       <p>30 Mucho contenido<br>31 Mucho contenido <br>32 Mucho contenido<br>33 Mucho contenido<br></p>
    <a href="#">nada</a>
  </div> 
  </div>  
</div>

<br>
<br>


<div class="frm" onMouseOver="javascript:setScrollable(this);">
  <div class="bas">
    <div  class="mov" onMouseDown="javascript:iniciarDrag(event);" >
    </div>
  </div>
  
  <div class="scrllOut" >
  <div class="scrllI" >
       <p>1 Mucho contenido<br>2 Mucho contenido<br>3 Mucho contenido<br>4 Mucho contenido<br></p>
       <p>5 Mucho contenido<br>6 Mucho contenido<br>7 Mucho contenido<br>8 Mucho contenido<br></p>
       <p>9 Mucho contenido<br>11 Mucho contenido<br>12 Mucho contenido<br>13 Mucho contenido<br></p>
       <p>14 Mucho contenido<br>15 Mucho contenido<br>16 Mucho contenido<br>17 Mucho contenido<br></p>
       <p>18 Mucho contenido<br>19 Mucho contenido<br>20 Mucho contenido<br>21 Mucho contenido<br></p>
       <p>22 Mucho contenido<br>23 Mucho contenido<br>24 Mucho contenido<br>25 Mucho contenido<br></p>
       <p>26 Mucho contenido<br>27 Mucho contenido<br>28 Mucho contenido<br>29 Mucho contenido<br></p>
       <p>30 Mucho contenido<br>31 Mucho contenido <br>32 Mucho contenido<br>33 Mucho contenido<br></p>
    <a href="#">nada</a>
  </div> 
  </div>  
</div>


<br>
<br>

<div class="frm" onMouseOver="javascript:setScrollable(this);">
  <div class="bas">
    <div  class="mov" onMouseDown="javascript:iniciarDrag(event);" >
    </div>
  </div>
  
  <div class="scrllOut" >
  <div class="scrllI" >
       <p>1 Mucho contenido<br>2 Mucho contenido<br>3 Mucho contenido<br>4 Mucho contenido<br></p>
       <p>5 Mucho contenido<br>6 Mucho contenido<br>7 Mucho contenido<br>8 Mucho contenido<br></p>
       <p>9 Mucho contenido<br>11 Mucho contenido<br>12 Mucho contenido<br>13 Mucho contenido<br></p>
       <p>14 Mucho contenido<br>15 Mucho contenido<br>16 Mucho contenido<br>17 Mucho contenido<br></p>
       <p>18 Mucho contenido<br>19 Mucho contenido<br>20 Mucho contenido<br>21 Mucho contenido<br></p>
       <p>22 Mucho contenido<br>23 Mucho contenido<br>24 Mucho contenido<br>25 Mucho contenido<br></p>
       <p>26 Mucho contenido<br>27 Mucho contenido<br>28 Mucho contenido<br>29 Mucho contenido<br></p>
       <p>30 Mucho contenido<br>31 Mucho contenido <br>32 Mucho contenido<br>33 Mucho contenido<br></p>
    <a href="#">nada</a>
  </div> 
  </div>  
</div>
</div>

<br>
<br>
<div style="float: right;">
<br>
<br>
<br>
<br>
<br>
<br>

showScrollTop<input type="text" id="showScrollTop" value="sin Evaluar"><br>
<input type="button" id="scrollSave" value="Desabilitar"><br>
</div>
</body>
</html>