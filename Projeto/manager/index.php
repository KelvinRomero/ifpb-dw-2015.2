<?php
  session_start();
  if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
    $logado = true;
  }else{
    if(isset($_GET['pg']) && !empty($_GET['pg'])){
      $_SESSION['message'] = "É preciso estar logado no sistema";
    }else{
      $_SESSION['message'] = false;
    }
    $logado = false;
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WSM Backups</title>

  <!-- CSS Local -->
  <link rel="stylesheet" href="/css/master.css" media="screen" title="no title" charset="utf-8">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
  <?php
  if(!$logado){//Não tá logado
    header('Location: ../');//Então vai logar
  }else{//Ta logado
    if(!isset($_GET['pg'])){//Não escolheu pagina
      include('start.php');
    }elseif(!file_exists("./".$_GET['pg'].".php")) {
      include('404.php');
    }else{
      include("./".$_GET['pg'].".php");
    }
  }

  ?>
</body>
</html>
