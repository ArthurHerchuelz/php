<?php
$number1 = 1;
$number2 = 3;
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
    function comparison($number1, $number2){
    if ($number1 > $number2) {
      return 'Le premier nombre est plus grand';
    }
    else if ($number1 < $number2) {
      return 'Le premier nombre est plus petit';
    }
    elseif ($number1 == $number2) {
      return 'Les deux nombres sont identiques';
    }
    }
    echo comparison($number1, $number2);
    ?>
  </h1>
</body>
</html>
