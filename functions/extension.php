<?php

function iconOf($extention)
  {
  switch ($extention)
    {
    case "png":
      $res =  "ext_png.png";
      break;
    case "jpg":
      $res =  "ext_jpg.png";
      break;
    case "gif":
      $res =  "ext_gif.png";
      break;
    case "bmp":
      $res =  "ext_bmp.png";
      break;
    case "rar":
      $res =  "ext_rar.png";
      break;
    case "zip":
      $res =  "ext_zip.png";
      break;
    case "txt":
      $res =  "ext_txt.png";
      break;
    case "doc":
      $res =  "ext_doc.png";
      break;
    case "xls":
      $res =  "ext_xls.png";
      break;
    case "xlsx":
      $res =  "ext_xls.png";
      break;
    case "pdf":
      $res =  "ext_pdf.png";
      break;
    case "psd":
      $res =  "ext_psd.png";
      break;
    case "pdd":
      $res =  "ext_psd.png";
      break;
    case "ai":
      $res =  "ext_ai.png";
      break;
    case "fla":
      $res =  "ext_fla.png";
      break;
    case "swf":
      $res =  "ext_swf.png";
      break;
    case "indd":
      $res =  "ext_indd.png";
      break;
    case "3ds":
      $res =  "ext_3ds.png";
      break;
    case "7z":
      $res =  "ext_7z.png";
      break;
    case "mdb":
      $res =  "ext_mdb.png";
      break;
    case "gz":
      $res =  "ext_gz.png";
      break;
    case "tar":
      $res =  "ext_gz.png";
      break;
    default:
      $res =  "ext_unk.png";
    }
	return $res;
  }




?>