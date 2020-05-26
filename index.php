<?php
$counter = 0;
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
  while ($counter < 100) {
      $counter += 1;
      echo $counter . '/br' ;
  }
    ?>
  </p>
</body>
</html>
