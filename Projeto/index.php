<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WSM Backups</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
  <?php
    if(isset($_GET['pg']) && !empty($_GET['pg'])) {//Se tem algo em pg
      if(file_exists("./".$_GET['pg'].".php")){ //verifica se o arquivo em pg existe
        if ($_GET['pg'] != "login" && $_GET['pg'] != "404") {
          include('header.php');
        }
        include("./".$_GET['pg'].".php"); //e inclue
      } else { //Se não existe o arquivo solicitado, pg 404
        include('404.php');
      }
    } else { //Se não colocou nada, manda pra página de login
      include('login.php');
    }
  ?>
</body>
</html>
