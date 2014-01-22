<?php 
if($_SESSION["log"]){ 
?> 
<div id="frameChat">

<div class="frm" id="chat1" onMouseOver="javascript:setScrollable(this);" >
  <div class="bas">
    <div  class="mov" onMouseDown="javascript:iniciarDrag(event);">
    </div><!-- cierra mov -->
  </div><!-- cierra bas -->
  
  <div class="scrllOut" >
  <div class="scrllI" >  
      
  </div><!-- cierra scrllI -->
  </div><!-- cierra scrllOut -->
</div><!-- cierra frm -->


<div id="frameField">
<textarea id="comentario" name="comentario" cols="24" rows="3" onKeyDown="javascript:controlKey(event, this, 'chat1');" onKeyUp="javascript:clearEnter(event, this);"></textarea>

</div><!-- cierra frameField -->

</div><!-- cierra frameChat -->


<div id="frameEnd"></div><!-- cierra frameEnd -->

<div id="operation" style="background-color: white; color: black; width: 0px;height: 0px; overflow: hidden;">
<input type="button" onclick="javascript:turnOffChat('chat1');" value="Apagar">
<input type="button" onclick="javascript:turnOnChat('chat1');" value="Iniciar">
<input type="text" id="chat1A" value="1">

<input type="text" id="chat1f" value="">
<input type="text" id="chat1g" value="">
<input type="text" id="chat1h" value="">
<input type="text" id="chat1i" value="">
<input type="text" id="chat1j" value="0">
empieza el quilombo</br>
da</br>

</div>

<?php } 
else
{
?>
<div id="frameChatOut">
<br><br><br><br>
<p> Apagado </p>
<br><br><br><br>
</div><!-- cierra frameChat -->







<?php
}
?>