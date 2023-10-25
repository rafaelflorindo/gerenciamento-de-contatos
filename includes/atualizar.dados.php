<?php

	include_once("../login/includes/conexao.php");
	session_start();

	$nomeUsuario 	= $_POST['nomeUsuario'];
	$email			= $_POST['email'];
	$senhaAtual		= $_POST['senhaAtual'];
	$novaSenha		= $_POST['novaSenha'];

	$sql = mysql_query("SELECT senha FROM usuarios WHERE idUsuario = {$_SESSION['idUsuario']}");
	$dados = mysql_fetch_assoc($sql);

	if ($novaSenha!='') {
		if ($senhaAtual==$dados['senha']) {
			$sql = ("UPDATE usuarios SET senha = '$novaSenha' WHERE idUsuario = {$_SESSION['idUsuario']}");
			mysql_query($sql);
			
			header("Location: ../meus.dados.php?tipo=SUCESSO&mensagem=A senha foi alterada com sucesso!");
		}
	} else {

		if ($senhaAtual==$dados['senha']) {

			$sql = ("UPDATE usuarios 
				SET nomeUsuario = '$nomeUsuario', email = '$email'
				WHERE idUsuario = {$_SESSION['idUsuario']}");
			mysql_query($sql);

			header("Location: ../meus.dados.php?tipo=SUCESSO&mensagem=Os dados foram atualizados.");

		} else {
			header("Location: ../meus.dados.php?tipo=ERRO&mensagem=A senha não confere! Tente novamente.");
		}

	}





?>