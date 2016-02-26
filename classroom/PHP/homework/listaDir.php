<pre>
  <?php
    //Declara e atribui variáveis.
    $dir = $_GET['dir'];
   ?>
</pre>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lista diretorios</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <input type="text" name="dir" placeholder="Diretório">
        <input type="submit" value="Listar diretórios">
    </form>
    <pre>
        <?php echo "Listando ${dir}"; ?>
        <?php echo shell_exec("ls -laF /$dir"); ?>
    </pre>
  </body>
</html>
