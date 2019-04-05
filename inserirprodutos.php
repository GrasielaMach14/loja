<?php
	
	require_once "cabecalho.php";
	require_once "persistencia.php";
	require_once "banco-categoria.php";
	require_once "logica-usuario.php";
?>

<?php

verificaUsuario();

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


	if (insereProduto($conn, $nome, $preco, $quantidade, $descricao, $categoria_id, $sustentavel)) {

?>

	<p class="alert-sucess">Produto <?= $nome?>, preço = R$ <?= $preco?> inserido com sucesso.</p>

<?php

	}else{

		$msg = mysqli_error($conn);

?>
		<p class="alert-danger">Não foi possível inserir produto.</p>

<?php

	}


/**$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$sql = mysqli_query($conn, "INSERT INTO produtos(nome, preco, quantidade) 
					VALUES ('$nome', '$preco', '$quantidade')");

if(mysqli_insert_id($conn)){

	$_SESSION['msg'] = "Produto inserido com sucesso.";
	header("Location: index.php");

}else{

	$_SESSION['msg'] = "Não foi possível inserir produto.";
	header("Location: index.php");

}**/

require_once "rodape.php";

?>
