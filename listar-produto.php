<?php

	require_once "cabecalho.php";
	require_once "persistencia.php";
	require_once "banco-categoria.php";
	require_once "logica-usuario.php";
	
?>

	<h1>Produtos</h1><br><br>

	<table class="table table-striped table-bordered tabela">

	<?php

	$produtos = listarProdutos($conn);

	foreach ($produtos as $produto) {

	?>

		<tr>
			<td><?= $produto['nome']?></td>
			<td><?= $produto['preco']?></td>
			<td><?= $produto['quantidade']?></td>
			<td><?= substr($produto['descricao'], 0, 15)?></td>
			<td><?= $produto['categoria_nome']?></td>
			<td><a class="btn btn-primary" href="editar-formulario.php?id=<?=$produto['id']?>">Editar</a></td>
			<td>
				<form action="remove-produto.php" method="POST">
					<input type="hidden" name="id" value="<?= $produto['id']?>">
					<button class="btn btn-danger">Remover</button>
				</form>
			</td>
		</tr>
		
<?php
		 
	}	

?>

	</table>

	<a class="btn btn-default voltar" href="index.php">Voltar</a> 

<?php

	require_once "rodape.php";

?>