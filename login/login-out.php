<?php
session_start();

    unset($_SESSION["date"]);
	unset($_SESSION["hour"]);
	unset($_SESSION["name"]);
	unset($_SESSION["id_ses"]);
	unset($_SESSION["id"]);
	unset($_SESSION["name"]);
	unset($_SESSION["nick"]);
	unset($_SESSION["user_p1"]);
	unset($_SESSION["user_p2"]);
	unset($_SESSION["user_p3"]);
	
	$_SESSION["log"] = false;

	header ("Location: ../site/index.php");

?>