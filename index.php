<?php
$months = array ('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Exercice 3 partie 3</title>
</head>
<body>
  <p><?php
  for ($numero = 0; $numero < 12; $numero++)
{
    echo $months[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
?></p>
</body>
</html>
