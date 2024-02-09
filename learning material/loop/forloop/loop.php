<?php

$title = 'for loop';

$favorite_guitars = [
  'Vela',
  'Explorer',
  'Strat'
];

$guitars_two = [
  'prs' => 'Vela',
  'gibson' => 'Explorer',
  'fender' => 'Strat'
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
</head>

<body>
  <table>
    <?php
    for ($i = 0; $i < count($favorite_guitars); $i++) {
      $guitar = $favorite_guitars[$i];
      echo "<tr><td>$guitar</td></tr>";
    }
    ?>
  </table>
</body>

</html>