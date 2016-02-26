<?php
  function fatorial($num){
    $ft = 0;
      for ($i=1; $i <= $num; $i++) {
          $ft = $num * $i;
      }
      return $ft;
  } 
 ?>
