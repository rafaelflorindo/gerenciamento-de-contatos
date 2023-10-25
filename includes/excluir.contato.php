;<?php
	
	include_once("../login/includes/conexao.php");

	$sql = ("DELETE FROM contatos WHERE idContato = {$_GET['idContato']}");
	mysql_query($sql);

	header("Location: ../contatos.php?tipo=SUCESSO&mensagem=O contato foi excluído.");

?>