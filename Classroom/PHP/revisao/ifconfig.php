<?php
  function ifconfig($ifconfigResult){
    $matches = [];
    $result = [];
    //Simplificado pra apenas eth0
    preg_match("/eth(\d)/", $ifconfigResult, $matches);
    $result['interface'] = $matches[0];

    //Buscando endereço de IP
    preg_match("/inet addr:([0-9]{1,3}\.){3}[0-9]{1,3}/", $ifconfigResult, $matches);
    $matches = explode(':', $matches[0]);
    $result['iaddr'] = $matches[1]; //Apenas ip

    //Buscando broadcast do IP
    preg_match("/Bcast:([0-9]{1,3}\.){3}[0-9]{1,3}/", $ifconfigResult, $matches);
    $matches = explode(':', $matches[0]);
    $result['bcast'] = $matches[1]; //Apenas ip

    //Buscando mascara do IP
    preg_match("/Mask:([0-9]{1,3}\.){3}[0-9]{1,3}/", $ifconfigResult, $matches);
    $matches = explode(':', $matches[0]);
    $result['mask'] = $matches[1]; //Apenas ip

    return json_encode($result);
  }
  header('Content-Type: application/json');
  header("Access-Control-Allow-Origin: *");

  echo ifconfig(shell_exec('ifconfig eth0'));
?>
