<?php
  /**
  * O objetivo deste arquivo é receber o formulários
  * verificar se checkboxes foram selecionadas
  * compactar esses diretórios
  * fornecer link para download
  */
  if(!isset($_POST['dirs'])){ //Verificar se selecionou alguma checkbox
    echo "Nenhuma pasta selecionada.";
    echo '<br><a href="ListaDir.html"><button type="button" name="button">Voltar</button></a>';
  } else { // Se selecionou
    $dirs = $_POST['dirs'];
    $dirs = implode(" ", $dirs);
    //Compacta os diretórios selecioanados, modelo: destino origem
    shell_exec("tar -zcvf ./download.tar.gz $dirs");
    echo '<br><a href="download.tar.gz"><button type="button" name="button">Download</button></a>';
    echo '<br><a href="ListaDir.html"><button type="button" name="button">Voltar</button></a>';

  }
?>
