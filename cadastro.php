<?php

  include_once('includes/validacoes.php');
  include_once('login/includes/conexao.php');

  if (isset($_GET['idContato'])) {

    $sql = mysql_query("
      SELECT * FROM contatos 
      WHERE idContato = {$_GET['idContato']}");

    $dados = mysql_fetch_assoc($sql);

    $idContato = $dados['idContato'];
    $nome = $dados['nome'];
    $sobrenome = $dados['sobrenome'];
    $apelido = $dados['apelido'];
    $telefone = $dados['telefone'];
    $email = $dados['email'];
    $cep = $dados['cep'];
    $rua = $dados['rua'];
    $numero = $dados['numero'];
    $bairro = $dados['bairro'];
    $estado = $dados['estado'];
    $cidade = $dados['cidade'];

  } else {
    $idContato = 0;
    $nome = '';
    $sobrenome = '';
    $apelido = '';
    $telefone = '';
    $email = '';
    $cep = '';
    $rua = '';
    $numero = '';
    $bairro = '';
    $estado = '';
    $cidade = '';
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://getbootstrap.com.br/favicon.ico">
  <title>Template offcanvas, usando Bootstrap.</title>
  <link href="dist/bootstrap.min.css" rel="stylesheet">
  <link href="dist/offcanvas.css" rel="stylesheet">
</head>
  <body class="bg-light">
    <?php include_once('includes/menu.php'); ?>

    <main role="main" class="container">
      <?php include_once('login/includes/mensagens.php'); ?>
      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Cadastro de Contatos</h6>
        <br>
        <form method="POST" action="includes/salvar.contato.php">
          <input type="text" hidden name="idContato" value="<?php echo $idContato; ?>">
          <div class="row">
            <div class="col-md-6">
              <label>Nome:</label>
              <input type="text" value="<?php echo $nome; ?>" name="nome" class="form-control">
            </div>
            <div class="col-md-6">
              <label>Sobrenome:</label>
              <input type="text" value="<?php echo $sobrenome; ?>" name="sobrenome" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Apelido:</label>
              <input type="text" value="<?php echo $apelido; ?>" name="apelido" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Telefone:</label>
              <input type="text" value="<?php echo $telefone; ?>"name="telefone" class="form-control">
            </div>
            <div class="col-md-4">
              <label>E-mail:</label>
              <input type="email" value="<?php echo $email; ?>"name="email" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <label>CEP:</label>
              <input type="text" value="<?php echo $cep; ?>"name="cep" class="form-control">
            </div>
            <div class="col-md-5">
              <label>Rua:</label>
              <input type="text" value="<?php echo $rua; ?>" name="rua" class="form-control">
            </div>
            <div class="col-md-2">
              <label>Número:</label>
              <input type="number" value="<?php echo $numero; ?>" name="numero" class="form-control">
            </div>
            <div class="col-md-3">
              <label>Bairro:</label>
              <input type="text" value="<?php echo $bairro; ?>" name="bairro" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label>Estado:</label>
              <select name="estado" class="form-control">
                <option <?php if($estado=='AC') { echo 'selected'; } ?> value="AC">Acre</option>
                <option <?php if($estado=='AL') { echo 'selected'; } ?> value="AL">Alagoas</option>
                <option <?php if($estado=='AP') { echo 'selected'; } ?> value="AP">Amapá</option>
                <option <?php if($estado=='AM') { echo 'selected'; } ?> value="AM">Amazonas</option>
                <option <?php if($estado=='BA') { echo 'selected'; } ?> value="BA">Bahia</option>
                <option <?php if($estado=='CE') { echo 'selected'; } ?> value="CE">Ceará</option>
                <option <?php if($estado=='DF') { echo 'selected'; } ?> value="DF">Distrito Federal</option>
                <option <?php if($estado=='ES') { echo 'selected'; } ?> value="ES">Espírito Santo</option>
                <option <?php if($estado=='GO') { echo 'selected'; } ?> value="GO">Goiás</option>
                <option <?php if($estado=='MA') { echo 'selected'; } ?> value="MA">Maranhão</option>
                <option <?php if($estado=='MT') { echo 'selected'; } ?> value="MT">Mato Grosso</option>
                <option <?php if($estado=='MS') { echo 'selected'; } ?> value="MS">Mato Grosso do Sul</option>
                <option <?php if($estado=='MG') { echo 'selected'; } ?> value="MG">Minas Gerais</option>
                <option <?php if($estado=='PA') { echo 'selected'; } ?> value="PA">Pará</option>
                <option <?php if($estado=='PB') { echo 'selected'; } ?> value="PB">Paraíba</option>
                <option <?php if($estado=='PR') { echo 'selected'; } ?> value="PR">Paraná</option>
                <option <?php if($estado=='PE') { echo 'selected'; } ?> value="PE">Pernambuco</option>
                <option <?php if($estado=='PI') { echo 'selected'; } ?> value="PI">Piauí</option>
                <option <?php if($estado=='RJ') { echo 'selected'; } ?> value="RJ">Rio de Janeiro</option>
                <option <?php if($estado=='RN') { echo 'selected'; } ?> value="RN">Rio Grande do Norte</option>
                <option <?php if($estado=='RS') { echo 'selected'; } ?> value="RS">Rio Grande do Sul</option>
                <option <?php if($estado=='RO') { echo 'selected'; } ?> value="RO">Rondônia</option>
                <option <?php if($estado=='RR') { echo 'selected'; } ?> value="RR">Roraima</option>
                <option <?php if($estado=='SC') { echo 'selected'; } ?> value="SC">Santa Catarina</option>
                <option <?php if($estado=='SP') { echo 'selected'; } ?> value="SP">São Paulo</option>
                <option <?php if($estado=='SE') { echo 'selected'; } ?> value="SE">Sergipe</option>
                <option <?php if($estado=='TO') { echo 'selected'; } ?> value="TO">Tocantins</option>
                <option <?php if($estado=='EX') { echo 'selected'; } ?> value="EX">Estrangeiro</option>
              </select>
            </div>
            <div class="col-md-4">
              <label>Cidade:</label>
              <input type="text" value="<?php echo $cidade; ?>" name="cidade" class="form-control">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4">
              <button class="btn btn-primary">Salvar</button>
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