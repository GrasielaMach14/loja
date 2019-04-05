<?php

	require_once "cabecalho.php";
	require_once "banco-categoria.php";
	require_once "logica-usuario.php";

	verificaUsuario();/**Aqui é chamada a função para testar se usuário está logado **/

	$produto = array("nome" => "", "preco" => "", "quantidade" => "", "descricao" => "", "categoria_id" => "1");//É necessário declarar a variável produto para não chocar com o formulário editar, esta variável é um array e deve trazer os valores vazios no formulário de cadastro
	$sustentavel = "";
	$categorias = listaCategorias($conn);

?>

	<form method="POST" action="inserirprodutos.php">
		
		<h1>Cadastrar produtos</h1> <br/><br/>

		<div>
			<table class="table tabela">
			<?php include("produto-form-base.php");?>
			</table>
		</div>
		<br><br>
		<div class="botao">
			<input class= "btn btn-primary"type="submit" value="Cadastrar">
			<input class= "btn btn-primary" type="reset" value ="Limpar">
		</div>
		
		<a class="btn btn-default voltar" href="index.php">Voltar</a> 

	</form>

<?php

	require_once "rodape.php";

?>