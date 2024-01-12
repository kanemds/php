<?php

// for short syntax only recommend use function instead
// $add = fn($a, $b) => $a + $b;

// echo $add(2, 3); // Outputs 5

// function != fn
function sum($a, $b)
{
  // same as javascript local variable: only access within the function
  $result = $a + $b;
  return $result;
}

// global variable: outside function
$result = sum(1, 2);


function output_print_r($value)
{
  echo '<pre>';
  print_r($value);
  echo '</pre>';
}

function output_var_dump($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

$favorite_guitars = [
  'Vela',
  'Explorer',
  'Strat'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php functions</title>
</head>

<body>
  <?= output_print_r($favorite_guitars); ?>
  <?= output_var_dump($favorite_guitars); ?>
</body>

</html>