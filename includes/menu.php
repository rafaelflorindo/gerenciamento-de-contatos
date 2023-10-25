<?php
  $URL_ATUAL= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div class="nav-scroller bg-white shadow-sm">
  <div class="container">
    <nav class="nav nav-underline">
      <a class="nav-link <?php if ($URL_ATUAL=='http://localhost/gerenciamento-de-contatos/contatos.php') {echo 'active'; } ?>" href="contatos.php">Contatos</a>
      <a class="nav-link <?php if ($URL_ATUAL=='http://localhost/gerenciamento-de-contatos/cadastro.php') {echo 'active'; } ?>" href="cadastro.php">Novo Contato</a>
      <a class="nav-link <?php if ($URL_ATUAL=='http://localhost/gerenciamento-de-contatos/meus.dados.php') {echo 'active'; } ?>" href="meus.dados.php">Meus Dados</a>
      <a class="nav-link" href="includes/sair.php">Sair</a>
    </nav>
  </div>
</div>