<?php
$name = 'Arthur';
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
    function DireBonjour($name)
    {
      return $name;
    }
    echo 'Bonjour ' . DireBonjour($name) ;
    ?>
  </h1>
</body>
</html>
