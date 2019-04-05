<?php
	require_once "logica-usuario.php";	

	logout();
	$_SESSION["sucess"] = "Logout efetuado com sucesso.";
	header("Location: index.php");
	die();
?>