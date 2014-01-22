<?php
session_start();


  $id_to_download = $_POST["download_file_id"];

  include ("../settings/config.php");
  include ("../sql/conect-sql.php");
  mysql_select_db("myCloud",$conect_sql);

  $down_files_Q  = "SELECT * FROM `files` WHERE `file_root_id` = ".$_SESSION["id"]." AND  `file_id` = ".$id_to_download.";";

  $down_files_Q_result  = mysql_query($down_files_Q);


  if (mysql_num_rows($down_files_Q_result)>0)
    {
    
    mysql_select_db("myCloud",$conect_sql);
	
    $load_data_files_Q  = "SELECT *  FROM `files` WHERE `file_id` = ".$id_to_download.";";

    $ldf_Q_result  = mysql_query($load_data_files_Q);
    
    $result_array= mysql_fetch_array($ldf_Q_result);
	$file_extension = $result_array["file_ext"];

	$archivonombre = $result_array["file_name"];
    $archivo = "../files_store/".$result_array["file_code"];

    if( file_exists( $archivo ) ) {
	
	   switch ($file_extension) {
		case "pdf": $ctype="application/pdf"; break;
		case "exe": $ctype="application/octet-stream"; break;
		case "zip": $ctype="application/zip"; break;
		case "rar": $ctype="application/rar"; break;
		case "docx": case "doc":
		case "doc": $ctype="application/msword"; break;
		case "xlsx": case "xls":
		case "xls": $ctype="application/vnd.ms-excel"; break;
		case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
		case "gif": $ctype="image/gif"; break;
		case "png": $ctype="image/png"; break;
		case "jpe": case "jpeg":
		case "jpg": $ctype="image/jpg"; break;
		default: $ctype="application/force-download";
      }

	  header('Content-Description: File Transfer');	  
	  header('Content-Type: '.$ctype);
	  header('Content-Disposition: attachment; filename='.$archivonombre);
	  header('Content-Transfer-Encoding: binary');
	  header('Expires: 0');
	  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	  header('Pragma: public');
	  header('Content-Length: ' . filesize($archivo));
	  ob_clean();
	  flush();
	  readfile($archivo);
	  exit;
	  
    //header("Content-Type: application/force-download");
    //header("Content-Disposition: attachment; filename=$archivonombre");
    //header("Content-Transfer-Encoding: binary");
    //header("Cache-Control: private");
    //@readfile( $archivo );
	
    } 
	else 
	{
        die("No se encontro el archivo.");
    }  

	
	
	
	
	
	
    } 
  else 
    {
    echo "No Existen registros";
    }




?>