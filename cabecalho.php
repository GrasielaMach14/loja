<?php
	error_reporting(E_ALL ^ E_NOTICE);#reporta todos os erros do php exceto os notices
	require_once "exibir-alerta.php";	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atacadão da construção</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/loja.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="container">
		<div class="principal">
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php">Minha loja</a>
					</div>
					<div>
						<ul class="nav navbar-nav">
							<li><a href="produto-formulario.php">Adicionar produto</a></li>
							<li><a href="listar-produto.php">Produtos</a></li>
							<li><a href="contato.php">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<?php  exibirAlerta("success"); ?>
			<?php exibirAlerta("danger"); ?>
