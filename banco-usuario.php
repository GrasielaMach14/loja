<?php
	require_once"conexao.php";
?>

<?php
function buscaUsuario($conn, $email, $senha){/**Faz as buscas do usuário no BD através da query**/
	$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($conn, $email);//este comando deixará a variável email mais segura para usuários que tentarem burlar o html5 da sua página e não deixar agir o mysql injection, impedindo de que execute uma query indesejada
	$query = "SELECT * FROM usuarios WHERE email='{$email}' and senha='{$senhaMd5}'";
	$resultado = mysqli_query($conn, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	
	return $usuario;
}
?>