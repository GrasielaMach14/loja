<?php

	require_once "cabecalho.php";
	require_once "persistencia.php";
	require_once "logica-usuario.php";
	require_once"conexao.php";

	verificaUsuario();
	
	$id = $_POST["id"];
	removerProduto($conn, $id);
	$_SESSION["sucess"] = "Produto removido com sucesso.";
	header("Location: listar-produto.php");
	die();	
	
	
?>
