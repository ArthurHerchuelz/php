<?php
$départements = array (
  '02' => 'Aisne',
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme');
  ?>
  <!DOCTYPE html>
  <html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>Exercice 5 partie 3</title>
  </head>
  <body>
    <ul>
      <?php
      foreach($départements as $cle => $element)
      { ?>
        <li>
        <?php
          echo "Le département $element a le numéro $cle";
        ?>
        </li>
        <?php } ?>
    </ul>
  </body>
  </html>
