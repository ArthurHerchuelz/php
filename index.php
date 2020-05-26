<?php
$counter = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Exercice 6 partie 5</title>
</head>
<body>
  <p>
    <?php
    while ($counter <= 100) {
      if ($counter%3 == 0 && $counter%5 <> 0){
        echo 'Fizz <br />';
        $counter += 1;
      } else if ($counter%5 == 0 && $counter%3 <> 0){
        echo 'Buzz <br />';
        $counter += 1;
      } else if ($counter%3 == 0 && $counter%5 == 0 ){
        echo 'FizzBuzz <br />';
        $counter += 1;
      } else {
        echo $counter .'<br />';
        $counter += 1;
      }
    }
    ?>
  </p>
</body>
</html>
