<?php

function listarProdutos($conn){

	$produtos = array();
	$resultado = mysqli_query($conn, "select p.*, c.nome as categoria_nome FROM produtos as p JOIN categorias as c on p.categoria_id=c.id");

	while($produto = mysqli_fetch_assoc($resultado)){

		array_push($produtos, $produto);
	}

	return $produtos;
}

function insereProduto($conn, $nome, $preco, $quantidade, $descricao, $categoria_id, $sustentavel){

$query = "INSERT INTO produtos (nome, preco, quantidade, descricao, categoria_id, sustentavel) 
	    VALUES ('{$nome}', {$preco}, {$quantidade}, '{$descricao}', {$categoria_id}, '{$sustentavel}')";

    return mysqli_query($conn, $query);

}

function editarProduto($conn, $id, $nome, $preco, $quantidade, $descricao, $categoria_id, $sustentavel){

	$query = "UPDATE produtos SET nome = '{$nome}', preco = {$preco}, quantidade = {$quantidade}, descricao = '{$descricao}', categoria_id = {$categoria_id}, sustentavel = {$sustentavel} WHERE id = '{$id}'";

	return mysqli_query($conn, $query);

}

function buscaProduto($conn, $id){//buscar o produto para editar

	$query = "SELECT * FROM produtos WHERE id = {$id}";
	$resultado = mysqli_query($conn, $query);

	return mysqli_fetch_assoc($resultado);
}

function removerProduto($conn, $id){

	$query = "DELETE FROM produtos WHERE id = {$id}";

	return mysqli_query($conn, $query);

}

?>