<?php
	function exibirAlerta($tipo){ //Esta função mostrará na tela todos os alerts de diferentes tipos
		session_start();//sempre que carregar o arquivo, a sessão já existirá

		if(isset($_SESSION[$tipo])) {
			?>
			<p class="alert-<?= $tipo ?>"><?= $_SESSION[$tipo]?></p>
			<?php
			unset($_SESSION[$tipo]);
		}
	}
?>	