<pre>
  <?php
    //DECLARAÇÃO DE VARIÁVEIS
    $userHome = shell_exec(" ls -laF / | awk {'print $9'} | grep /");//Lista os diretórios em /
    $userHome = explode("\n", $userHome); // Divide por linhas
    $dir = isset($_GET['dir']) ? $_GET['dir'] : false;
?>
</pre>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <title>Lista diretorios</title>
  </head>
  <body>
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <select name="dir">
          <?php foreach ($userHome as $key => $value) { ?>
            <option value="<?php echo $value ?>"><?php echo $value ?></option>
          <?php } ?>
        </select>
        <input id="compact" type="submit" value="Compactar conteúdo">
        <a href="/download.tar.gz"><button type="button" name="button">Download</button></a>
    </form>
    <img id="load" src="img/compressing.gif" width="400px" />
  <pre>
    <?php
      if ($dir != false) {
        echo "Compactando conteúdo de /${dir}.\n";
        echo shell_exec("ls -laF /$dir");
        shell_exec("tar -zcvf /var/www/html/download.tar.gz /$dir ");//Compactar pasta
      }
    ?>
  </pre>

  <script>
		$("#load").hide();
    $("#compact").click(function(){
			$("#load").show();
    });
  </script>
  </body>
</html>
