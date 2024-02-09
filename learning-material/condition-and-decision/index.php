<?php

$result = 1 > 3;

echo $result ===  false;

$first_name = 'John';
$last_name = 'wick';

if ($first_name === 'John' && $last_name === 'Wick') {
  echo 'name is matched';
} else {
  echo 'name is not matched';
}


if ($first_name === 'ohn' || $last_name === 'ick') {
  echo 'one of the value is matched';
} else {
  echo 'none of the value is matched';
}



if ($first_name === 'John' && $last_name === 'Wick') {
  echo 'both first and last name are matched';
} else if ($first_name === 'ohn' || $last_name === 'ick') {
  echo 'one of the value is matched';
} else {
  echo 'none of them are matched';
}
