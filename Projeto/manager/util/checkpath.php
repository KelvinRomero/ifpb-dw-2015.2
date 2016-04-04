<?php
  function checkPath(){
    if (isset($_GET['path']) && is_dir($_GET['path'])) {
      $path = $_GET['path'];
      return json_encode(true);
    }else{
      return json_encode(false);
    }
  }

  header('Content-Type: application/json');
  header("Access-Control-Allow-Origin: *");

  echo checkPath();
?>
