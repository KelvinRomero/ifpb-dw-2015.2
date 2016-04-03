<?php
  session_start();
  $connection = $_SESSION['connection'];
  ssh2_exec($connection, 'exit');
  unset($connection);
  $_SESSION["logout_msg"]="Deslogado!";
  $_SESSION["logged"] = false;
  header('Location: .');
 ?>
