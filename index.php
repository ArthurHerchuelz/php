<?php
$name= 'Sidonie';
$name2 = 'Fabrice';
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
    function DireBonjour($name, $name2)
    {
      $hello = 'Bonjour ' . $name . ' et ' . $name2 . ' !';
      return $hello;
    }
    echo DireBonjour($name, $name2);
    ?>
  </h1>
</body>
</html>
