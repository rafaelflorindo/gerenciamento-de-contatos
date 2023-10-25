<?php include_once('includes/validacoes.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Gerenciamento de Contatos</title>
  <link href="dist/bootstrap.min.css" rel="stylesheet">
  <link href="dist/offcanvas.css" rel="stylesheet">
</head>

  <body class="bg-light">
    <?php include_once('includes/menu.php'); ?>

    <main role="main" class="container">
      <?php include_once('login/includes/mensagens.php'); ?>
      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Consulta Contatos</h6>
        <table class="table table-bordered">
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Telefone</th>
            <th>Ações</th>
          </tr>
          <?php
            
            include_once('login/includes/conexao.php');

            $sql = mysql_query("SELECT * FROM contatos ORDER BY nome ASC");
            while($dados = mysql_fetch_assoc($sql)){
              echo '<tr>
                      <td>'.$dados['idContato'].'</td>
                      <td>'.$dados['nome'].'</td>
                      <td>'.$dados['sobrenome'].'</td>
                      <td>'.$dados['telefone'].'</td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="cadastro.php?idContato='.$dados['idContato'].'">Editar</a>
                        <a class="btn btn-danger btn-sm" href="includes/excluir.contato.php?idContato='.$dados['idContato'].'">Excluir</a>
                      </td>
                    </tr>';
            }

          ?>
        </table>
      </div>
    </main>

    <script src="dist/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="dist/popper.min.js.download"></script>
    <script src="dist/bootstrap.min.js.download"></script>
    <script src="dist/holder.min.js.download"></script>
    <script src="dist/offcanvas.js.download"></script>
  
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="2" style="font-weight:bold;font-size:2pt;font-family:Arial, Helvetica, Open Sans, sans-serif">32x32</text></svg></body></html>