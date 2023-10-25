<?php 
  include_once('includes/validacoes.php');
  include_once('login/includes/conexao.php');

  $sql    = mysql_query("SELECT * FROM usuarios WHERE idUsuario = {$_SESSION['idUsuario']}");
  $dados  = mysql_fetch_assoc($sql); 

  $nomeUsuario  = $dados['nomeUsuario'];
  $email        = $dados['email'];

?>
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
        <h6 class="border-bottom border-gray pb-2 mb-0">Meus Dados</h6>
        <form method="POST" action="includes/atualizar.dados.php">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label>Nome:</label>
                <input type="text" class="form-control" name="nomeUsuario" value="<?php echo $nomeUsuario ?>">
              </div>
              <div class="col-md-6">
                <label>E-mail:</label>
                <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label>Senha atual:</label>
                <input type="password" class="form-control" name="senhaAtual">
              </div>
              <div class="col-md-4">
                <label>Nova senha:</label>
                <input type="password" class="form-control" name="novaSenha">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <button class="btn btn-primary">Salvar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </main>

    <script src="dist/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="dist/popper.min.js.download"></script>
    <script src="dist/bootstrap.min.js.download"></script>
    <script src="dist/holder.min.js.download"></script>
    <script src="dist/offcanvas.js.download"></script>
  
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="2" style="font-weight:bold;font-size:2pt;font-family:Arial, Helvetica, Open Sans, sans-serif">32x32</text></svg></body></html>