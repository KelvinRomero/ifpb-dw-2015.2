<pre>
  <?php
  $host = $_GET['host'];
  echo shell_exec("ping -c 3 $host");
     ?>
</pre>
