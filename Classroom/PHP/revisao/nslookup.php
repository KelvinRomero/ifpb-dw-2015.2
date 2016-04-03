<?php
function nslookup($target){

  $nslookup = shell_exec("nslookup $target");
  $result = [];
  //Nomes
  preg_match_all("/Name:\s{1,9}[a-zA-Z]{1,20}\.[a-zA-Z]{1,20}/", $nslookup, $matches);
  foreach ($matches[0] as $key => $value) {
    $result['name'][$key] = explode(':', $value)[1];
  }


  //Endereços IP
  preg_match_all("/Address:\s{1,9}([0-9]{1,3}\.){3}[0-9]{1,3}/", $nslookup, $matches);
  foreach ($matches[0] as $key => $value) {
    $result['address'][$key] = explode(':', $value)[1];
  }

  return json_encode($result);
}
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

echo nslookup($_GET['target']);
?>
