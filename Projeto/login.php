<?php
  if(!isset($_SESSION['message'])){//Se vier com false
    $message = ""; //Preenche com nada
  }else {
    $message = $_SESSION['message'];
  }

  if(!isset($_SESSION['error_msg'])){//Se vier com false
    $error_msg = ""; //Preenche com nada
  }else {
    $error_msg = $_SESSION['error_msg'];
  }

  if(!isset($_SESSION['logout_msg'])){//Se vier com false
    $logout_msg = ""; //Preenche com nada
  }else {
    $logout_msg = $_SESSION['logout_msg'];
  }
 ?>
<div class="container">
  <!--Login -->
  <br>
  <h1>Login</h1>
  <div class="row">
    <div class="col-sm-12 col-md-4">
      <form action="auth.php" method="post">
        <div class="form-group">
          <?php echo "<p>".$message.$error_msg.$logout_msg."</p>" ;?>
          <label for="username">Nome de usuário: </label>
          <input type="text" class="form-control" id="username" name="login" placeholder="Nome de usuário">
        </div>
        <div class="form-group">
          <label for="passwd">Senha: </label>
          <input type="password" class="form-control" id="passwd" name="senha" placeholder="Senha do usuário">
        </div>
        <button type="submit" class="btn btn-default">Acessar</button>
      </form>
    </div>
  </div>
  <!--Gif Explanatorio-->
  <!--Descrição-->
  <div class="row">
    <div class="col-sm-12 col-md-4">
      <h1>WSM Backup</h1>
      <p>
        Configure e gerencie facilmente backups do seu servidor.
        Através do PC ou Smartphone.
      </p>
      <a href="index.php?pg=about"><button class="btn btn-block">Saiba mais</button></a>
    </div>
  </div>
</div>
  <!--Poweredby-->
