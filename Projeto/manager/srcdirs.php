<?php

  function getDirList(){
    session_start();
    $user = $_SESSION['user'];

    $dirList = array("/etc" , "/home/".$user, "/var/www", "/var/log", "/var/lib/mysql");
    return json_encode($dirList);
  }

  header('Content-Type: application/json');
  header("Access-Control-Allow-Origin: *");

  echo getDirList();
?>
