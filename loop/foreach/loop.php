<?php

$title = 'foreach loop';

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
    foreach ($favorite_guitars as $guitar) {
      echo "<tr><td>$guitar</td></tr>";
    }
    ?>
  </table>


  <table>
    <?php
    foreach ($guitars_two as $key => $guitar) {
      echo "<tr><td>$key</td><td>$guitar</td></tr>";
    }
    ?>
  </table>

</body>

</html>