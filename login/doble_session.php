<?php


if ($_SESSION["log"])
  {
  include ("../settings/config.php");
  include ("../sql/conect-sql.php");
  mysql_select_db("myCloud",$conect_sql); 

  $searh_id = $_SESSION["id"];

  //Sentencia SQL para buscar un usuario con esos datos 
  $user_search = "SELECT  * FROM  `users` WHERE  `user_id` = $searh_id LIMIT 1 ";

  //Ejecuto la sentencia 
  $user_search_return = mysql_query($user_search, $conect_sql); 
  $user_search_array = mysql_fetch_assoc($user_search_return);
  $session_id_fech = $user_search_array['user_ses_id'];

    if ($session_id_fech != $_SESSION["id_ses"])
      {
      $_SESSION["desconect"] = true;
      $_SESSION["log"] = false;
      }

  }
?>