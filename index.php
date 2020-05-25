<?php
$age = 28;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Exercice5</title>
</head>
<body>
  <h1>
    <?php
    if ($age >= 18){
      echo 'vous êtes majeur';
    }
    else{
      echo 'vous êtes mineur';
    }
    ?>
  </h1>
</body>
</html>
