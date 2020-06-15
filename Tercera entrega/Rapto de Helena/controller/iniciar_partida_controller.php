<?php 
	
	session_start();

	$_SESSION["turno"] = "1";

	header("location: partida_controller.php");

 ?>