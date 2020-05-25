<?php
$gender = 'Homme';
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
    if ($gender == 'Homme'){
      echo 'C\'est un développeur!!!';
    }
    else {
      echo 'C\'est une développeuse!!!';
    }
    ?>
  </h1>
</body>
</html>
