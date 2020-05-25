<?php
$age = 28;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Exercice 3 partie 2</title>
</head>
<body>
  <h1>
    <?php
    if ($age >= 18){
      echo 'Tu es majeur';
    }
    else {
      echo 'Tu n\'es pas majeur';
    }
    ?>
  </h1>
</body>
</html>
