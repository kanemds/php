<?php

$title = 'include';

include('../header_footer/header.php');


// using require may cause issue with file already require etc..., to avoid duplicate file require use require_once
// require('../utilities/functions.php');

require_once('../utilities/functions.php');

$favorite_guitars = [
  ['name' => 'Vela', 'manufacturer' => 'PRS'],
  ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
  ['name' => 'Strat', 'manufacturer' => 'Fender']
];



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


?>

<div>
  <?php
  output_print_r(pluck($favorite_guitars, 'name'));
  greeting();
  ?>
</div>

<?php include('../header_footer/footer.php'); ?>