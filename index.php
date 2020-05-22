<?php
$answer= 'yes';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8/">
    <title>Exercice5</title>
  </head>
  <body>
    <h1>
      <?php
if ($answer = 'yes')
{
    echo 'Vous  avez répondu "oui"';
}
else if ($answer = 'no')
{
    echo 'Vous  avez répondu "non"';
}
else {
    echo 'Vous  n\'avez pas répondu';
}
?>
    </h1>
  </body>
</html>
