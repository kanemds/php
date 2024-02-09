<?php


// traditional array
$guitars = ['Vela', 'Explorer', 'Strat'];


echo $guitars[0];
echo $guitars[1];
echo $guitars[2];


print_r($guitars);
var_dump($guitars);

if (isset($guitars[3])) {
  echo $guitars[3];
} else {
  echo 'The selected guitar does not exist';
}

// associative array

$guitars_two = [
  'prs' => 'Vela',
  'gibson' => 'Explorer',
  'fender' => 'Strat'
];

// case sensitive

echo $guitars_two['Prs']; // won't work case sensitive 

echo $guitars_two['prs'];
