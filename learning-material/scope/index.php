<?php

$favorite_guitars = [
  ['name' => 'Vela', 'manufacturer' => 'PRS'],
  ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
  ['name' => 'Strat', 'manufacturer' => 'Fender']
];

function pluck($array, $key)
{
  // anonymous function within array_map
  // use ($key) is when global does not exist
  $result = array_map(function ($item) use ($key) {
    return $item[$key];
  }, $array);

  return $result;
}

$hello = 'hello world';
$morning = 'good morning';

function greeting()
{
  // when variable exist and use it in local scope 
  global $hello, $morning;
  echo $hello;
  echo "<br>";
  echo $morning;
}

function output_print_r($value)
{
  echo '<pre>';
  print_r($value);
  echo '</pre>';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php functions</title>
</head>

<body>
  <?php
  output_print_r(pluck($favorite_guitars, 'name'));
  greeting();
  ?>
</body>

</html>