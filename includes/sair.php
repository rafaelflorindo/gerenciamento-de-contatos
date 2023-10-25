<?php
	
	session_start();
	session_destroy();

	header("Location: ../login/?tipo=SUCESSO&mensagem=Você saiu com sucesso.");

?>