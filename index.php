<?php
	
	require_once "cabecalho.php";
	require_once "logica-usuario.php";
	
?>

	<!--<?php 
	/**if(isset($_GET["logout"]) && ($_GET["logout"]==true)){ Esta condição testa se o logout é verdadeiro e desconecta os dados na página**/
	#?>
	<p class="alert-sucess">Deslogado com sucesso.</a>
	#<?php 
	#} ?>-->

	<h1 class="saudacao">Seja bem vindo!</h1>

	<?php
	if(usuarioEstaLogado()) {/**Testa o usuário se tem alguma info e mostra os dados do email na tela**/
		?>
		<p class="text-success">Você está logado como <?=usuarioLogado()?><a href="logout.php"> <br>Deslogar</a></p>
		<?php
	} else {
		?>
	
	<h2>Login</h2>
	<form action="login.php" method="POST">
		<table class="table">
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="email" name="email"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input class="form-control" type="password" name="senha"> </td>
			</tr>
			<tr>
				<td><button class="btn btn-primary">Login</button></td>
			</tr>
		</table>
	</form>
	<?php
}
?>

<?php

	require_once "rodape.php";
?>