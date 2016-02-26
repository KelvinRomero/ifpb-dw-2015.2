<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>List Generator</title>
  </head>
  <body>
    <ul>
      <?php
        for ($i=1; $i <= 10; $i++) {
          echo "<li> Item $i </li>";
        }
       ?>
    </ul>
  </body>
</html>
