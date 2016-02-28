<?php
  /**
  * Objetivo desse arquivo é criar uma lista de php
  * Nessa lista armarzenar os 'path's de diretórios Linux
  * Por fim, gerar Json
  */
  function listaDir(){
    $dirList = array("/etc" , "/home", "/var/www", "/var/log", "/var/lib/mysql");
    return json_encode($dirList);
  }

  header('Content-Type: application/json');
  header("Access-Control-Allow-Origin: *");

  echo listaDir();
 ?>
