<?php

	require_once "cabecalho.php";
	require_once "banco-categoria.php";
	require_once "persistencia.php";
	require_once "logica-usuario.php";
	
	verificaUsuario();
	
	$id = $_GET['id'];
	$produto = buscaProduto($conn, $id);
	$categorias = listaCategorias($conn);
	$sustentavel = $produto['sustentavel'] ? "checked = 'checked'" : "";

?>

	<form method="POST" action="editarproduto.php">
		
		<h1>Alterar produto</h1> <br/><br/>

		<div>
			<input type="hidden" name="id" value="<?=$produto['id']?>">
			<table class="table tabela">
				<?php include("produto-form-base.php");?>
			</table>
		</div>
		<br><br>
		<div class="botao">
			<input class= "btn btn-primary"type="submit" value="Editar">
			<input class= "btn btn-primary" type="reset" value ="Limpar">
		</div>
		
		<a class="btn btn-default voltar" href="index.php">Voltar</a> 

	</form>

<?php

	require_once "rodape.php";

?>