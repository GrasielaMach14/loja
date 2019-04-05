<?php
session_start();/**Aqui iniciará a sessão protegendo os dados dos cookies**/
function usuarioEstaLogado(){

	return isset($_SESSION["usuario_logado"]);/**Se existe algum login concretizado retornará o usuário logado e verifica seu valor**/
}
function verificaUsuario(){

	if (!usuarioEstaLogado()) {
		$_SESSION["danger"] = "Você não tem acesso a esta funcionalidade";
		header("Location:index.php");/**Se não estiver logado será redirecionado para a pag principal **/
		die();
	}
	
}
function usuarioLogado(){

	return $_SESSION["usuario_logado"];/** Extrai as informações do email logado**/

}
function logaUsuario($email){

	$_SESSION["usuario_logado"] = $email;
	/**setcookie("usuario_logado", $email, time() + 60); Aqui define o cookie com os parâmetros e o tempo de sessão durande 1 min**/
}
function logout(){

	session_destroy();/**Destroi completamente os dados do login**/
	session_start();#Uma nova sessão é criada após o logout e aparecerá a mensagem de sucesso no logout
}

?>