<pre>
  <?php
    //DECLARAÇÃO DE VARIÁVEIS
    $userHome = shell_exec(" ls -laF / | awk {'print $9'} | grep /");//Lista os diretórios em /
    $userHome = explode("\n", $userHome); // Divide por linhas
    //echo print_r($userHome);
    $dir = isset($_GET['dir']) ? $_GET['dir'] : "";
?>
</pre>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lista diretorios</title>
  </head>
  <body>
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <select name="dir">
          <?php foreach ($userHome as $key => $value) { ?>
            <option value="<?php echo $value ?>"><?php echo $value ?></option>
          <?php } ?>
        </select>
        <input type="submit" value="Listar conteúdo">
    </form>

    <pre>
      <?php
        echo "Listando conteúdo de ${dir}.\n";
        echo shell_exec("ls -laF /$dir");
      ?>
    </pre>
  </body>
</html>
