<?php

	include_once('../login/includes/conexao.php');
	session_start();

	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$apelido = $_POST['apelido'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];

	$idUsuario = $_SESSION['idUsuario'];

	if ($_POST['idContato']==0) {

		$sql = mysql_query("SELECT idContato FROM contatos WHERE telefone = '{$telefone}'");
		if (mysql_num_rows($sql)==0) {

			$sql = "INSERT INTO contatos (nome, sobrenome, apelido, telefone, email, cep, rua, numero, bairro, estado, cidade, idUsuario)
					VALUES ('$nome', '$sobrenome', '$apelido', '$telefone', '$email', '$cep', '$rua', '$numero', '$bairro', '$estado', '$cidade', '$idUsuario')";
			mysql_query($sql);

			header("Location: ../cadastro.php?tipo=SUCESSO&mensagem=Sucesso! O contato foi cadastrado com sucesso.");

		} else {
			header("Location: ../cadastro.php?tipo=ERRO&mensagem=Erro! Já existe um cadastro com esse telefone.");
			exit();			
		}
	
	} else {

		$sql = ("
			UPDATE 
			contatos 
			SET 
			nome = '$nome', 
			sobrenome = '$sobrenome', 
			apelido = '$apelido', 
			telefone = '$telefone', 
			email = '$email', 
			cep = '$cep', 
			rua = '$rua', 
			numero = '$numero', 
			bairro = '$bairro',
			estado = '$estado', 
			cidade = '$cidade'
			WHERE idContato = {$_POST['idContato']}");

		mysql_query($sql);

		header("Location: ../contatos.php?tipo=SUCESSO&mensagem=Sucesso. Dados atualizados!");
		exit();	


	}
	

?>