<?php
	require_once"conexao.php";
?>

<?php

function listaCategorias($conn){

	$categorias = array();
	$query = "SELECT * FROM categorias";
	$resultado = mysqli_query($conn, $query);

	while ($categoria = mysqli_fetch_assoc($resultado)) {
		
		array_push($categorias, $categoria);

	}

	return $categorias;
}

?>