<?php
$name = 'Arthur';
$firstName = 'Herchuelz';
$age = 28;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Exercice 3 partie 3</title>
</head>
<body>
  <p>
    <?php
    function DireBonjour($name, $firstName ,$age)
    {
      $hello = 'Bonjour ' . $name .' '. $firstName . ', tu as ' . $age . ' ans !';
      return $hello;
    }
    echo DireBonjour($name, $firstName, $age);
    ?>
  </p>
</body>
</html>
