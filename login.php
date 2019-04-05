<?php
	require_once "banco-usuario.php";
	require_once "logica-usuario.php";	
	/**Aqui é o comando para conectar ao banco de dados e testar o usuário**/

	$usuario = buscaUsuario($conn, $_POST['email'], $_POST['senha']);

	if ($usuario == null) {
		$_SESSION["danger"] = "Usuário ou senha inválido.";
		header("Location: index.php");
	}else{
		$_SESSION["sucess"] = "Usuário logado com sucesso.";
		logaUsuario($usuario["email"]);
		header("Location: index.php");
	}

	die();
?>