function xctFileInput(){
    var hiddenFile = document.getElementById("hiddenFileInput");
    hiddenFile.click();
  }
  
  function clearPath(dirtPath){
    var maxSlash = dirtPath.lastIndexOf('\\');
	if (maxSlash == -1)
      {
	  return dirtPath;
	  }
	else
	  {
	  var charIndex = maxSlash + 1;
	  var result = dirtPath.charAt(charIndex);
	  var tempLength = dirtPath.length;
	  while(charIndex < tempLength)
	    {
		charIndex = charIndex +1;
		result = result + dirtPath.charAt(charIndex);
		}
	  return result;
	  }
  }
  
  function extentionOf(path)
  {
  if(path.length < 3)
    {
	return "unknow";
	}
  else
    {
	var positionPoint = path.lastIndexOf('.');
	if(positionPoint > 0)
      {
	  if((path.length - positionPoint) <= 5)
	    {
		return path.charAt(positionPoint + 1) + path.charAt(positionPoint + 2) + path.charAt(positionPoint + 3) + path.charAt(positionPoint + 4);
		}
	  else
	    {
		return "unk";
		}
	  }
	else
	  {
	  return "unk";
	  }
	}
  }
  
  
  function iconOf(extention)
  {
  switch (extention)
    {
    case "png":
      return "ext_png.png";
      break;
    case "jpg":
      return "ext_jpg.png";
      break;
    case "gif":
      return "ext_gif.png";
      break;
    case "bmp":
      return "ext_bmp.png";
      break;
    case "rar":
      return "ext_rar.png";
      break;
    case "zip":
      return "ext_zip.png";
      break;
    case "txt":
      return "ext_txt.png";
      break;
    case "doc":
      return "ext_doc.png";
      break;
    case "xls":
      return "ext_xls.png";
      break;
    case "pdf":
      return "ext_pdf.png";
      break;
    case "psd":
      return "ext_psd.png";
      break;
    case "pdd":
      return "ext_psd.png";
      break;
    case "ai":
      return "ext_ai.png";
      break;
    case "fla":
      return "ext_fla.png";
      break;
    case "swf":
      return "ext_swf.png";
      break;
    case "indd":
      return "ext_indd.png";
      break;
    case "3ds":
      return "ext_3ds.png";
      break;
    case "7z":
      return "ext_7z.png";
      break;
    case "mdb":
      return "ext_mdb.png";
      break;
    case "gz":
      return "ext_gz.png";
      break;
    case "tar":
      return "ext_gz.png";
      break;
    default:
      return "ext_unk.png";
    }
  }
  
  function templateIconOf(path)
  {
  var extention = extentionOf(path);
  return "<IMG src=\"../images/iconos/" + iconOf(extention) + "\"  title=\"" + extention + "\" style=\"width: 32px; height: 32px; margin-bottom: -10px; padding-right: 10px; \">";
  }
  
  
  function showPath(){
    var hiddenFile = document.getElementById("hiddenFileInput");
    var hiddenExt = document.getElementById("hiddenExtInput");
	var textFile = document.getElementById("fileName");
	var falsePath = (clearPath(hiddenFile.value));
	var iconTemp = templateIconOf(falsePath);
	var realPath = falsePath;
	if(falsePath.length > 31)
	{
	realPath = falsePath.substring(0,28) + "..." ;
	}
    textFile.innerHTML = iconTemp + realPath;
	hiddenExt.value = extentionOf(hiddenFile.value);
  }
  

  function un_check(idChange) 
  {
  var identifier = "id" + idChange;
  var elemento = document.getElementById(identifier);
  if (gotElem(idChange))
	  {
      elemento.className = "sharedFileN";
	  remove(idChange);
      }
  else
      {
	  elemento.className = "sharedFileY";
	  add(idChange);
	  }
  }

  function submitForm(){
  var formTo = document.getElementById("uploadForm");
  formTo.submit();
  }