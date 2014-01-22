<script>

function eval()
{
///^[\n ]+$/
var patern = new RegExp(document.getElementById('patern').value);
var compare = document.getElementById('text').value;
if (compare.match(patern))
  {
  document.getElementById('res').value = 'cumple';
  }
else
  {
  document.getElementById('res').value = 'Nocumple';
  }
}

function splitText()
{
///^[\n ]+$/
var patern = new RegExp(document.getElementById('patern2').value);
var compare = document.getElementById('text2').value;

var arrayPatern = compare.split(patern);

var res = '';
for (i = 0; i < arrayPatern.length; i++)
  {
  res += arrayPatern[i] + '\n';
  }
document.getElementById('res2').value = res;
}

function restart(elem)
{
if(elem.value == 'escribir')
  {
  elem.value = '';
  }
}

</script>

<div style="float: left; padding: 20px">
Compare</br>
<textarea cols="40" rows="20" id="text" onfocus="javascript:restart(this);">escribir</textarea></br>
Patern</br>
<input type="text" id="patern" ></br>
Resultado</br>
<input type="text" id="res" disabled="disable"></br>
<input type="button" value="evaluar" onclick="javascript:eval()"></br>
</div>

<div style="float: left; padding: 20px">
Split</br>
<textarea id="text2" cols="30" rows="12" onfocus="javascript:restart(this);">escribir</textarea></br>
Patern</br>
<input type="text" id="patern2" ></br>
Resultado</br>
<textarea id="res2"  cols="30" rows="12"  ></textarea></br>

<input type="button"  value="evaluar" onclick="javascript:splitText()"></br>
</div>


