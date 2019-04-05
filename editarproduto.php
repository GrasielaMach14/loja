<?php
	
	require_once "cabecalho.php";
	require_once "persistencia.php";
	require_once "banco-categoria.php";
	require_once "logica-usuario.php";
?>

<?php
verificaUsuario();

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
if (array_key_exists('sustentavel', $_POST)) {
	
	$sustentavel = true;

}else{

	$sustentavel = false;

}


	if (editarProduto($conn, $id, $nome, $preco, $quantidade, $descricao, $categoria_id, $sustentavel)) {

?>

	<p class="alert-sucess">Produto <?= $nome?>, preço = R$ <?= $preco?> alterado com sucesso.</p>

<?php

	}else{

		$msg = mysqli_error($conn);

?>
		<p class="alert-danger">Não foi possível alterar produto.</p>

<?php

	}

	require_once "rodape.php";

?>
