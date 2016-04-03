<?php
  if(!isset($_POST['dirs'])){ //Verificar se selecionou alguma checkbox
    $_SESSION['dir_err_msg'] = "Selecione alguma pasta";
    header('Location: .');
  }else{
    $bkptype = $_POST['bkptype'];
    $dirs = $_POST['dirs'];

    switch ($bkptype) {
      case 'bkpnow';
      $dirs = implode(" ", $dirs);
      shell_exec("tar -zcvf bkpnow/download.tar.gz $dirs");
      header('Location: bkpnow/download.tar.gz');
      break;
      case 'schedule';
        echo $bkptype;
      break;
      case 'cloud';
        echo $bkptype;
      break;

      default:
      # code...
      break;
    }
  }
?>
