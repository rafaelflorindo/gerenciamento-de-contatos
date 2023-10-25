<?php

	session_start();

	if (!isset($_SESSION['idUsuario'])) {
		header("Location: login/?tipo=ERRO&mensagem=Você não está logado. Faça login!");
	}

?>