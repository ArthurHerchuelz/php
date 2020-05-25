<?php
$firstString = 'bonjour';
$secondString = 'Arthur';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>Exercice 1 partie 4</title>
  </head>
  <body>
    <h1>
      <?php
      function hello($firstString, $secondString)
      {
        $hello = $firstString .' '. $secondString;
        return $hello;
      }
        echo hello();
      ?>
    </h1>
  </body>
</html>
