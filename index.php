<?php
$age = 28;
$gender = 'femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Exercice 2 partie 2</title>
</head>
<body>
  <h1>
    <?php
    if ($age >= 18 AND $gender == 'homme'){
      echo 'vous êtes un homme majeur';
    }
    else if ($age < 18 AND $gender == 'homme'){
      echo 'vous êtes un homme mineur';
    }
    else if ($age >= 18 AND $gender == 'femme'){
      echo 'vous êtes un femme majeure';
    }
    else if ($age < 18 AND $gender == 'femme'){
      echo 'vous êtes un femme mineure';
    }
    else {
      echo 'Il y a un petit soucis, non?';
    }
    ?>
  </h1>
</body>
</html>
