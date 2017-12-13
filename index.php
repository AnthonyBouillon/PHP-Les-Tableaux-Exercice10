<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les tableaux Exercice 10</title>
  </head>
  <body>
    <?php
        $department = array('02' => 'Aisne', '59' => 'Nord', '60' => 'L\'Oise', '62' => 'Pas-de-Calais', '80' => 'La Somme');
        foreach ($department as $key => $value) {
    ?>
    <p></p>
    <?php
          echo 'Le numéro du département de ' . ' ' .$value . ' ' . 'est le' . ' ' . $key;
        }
     ?>
  </body>
</html>
