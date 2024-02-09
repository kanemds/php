<?php

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

function pluck($array, $key)
{
  // anonymous function within array_map
  // use ($key) is when global does not exist
  $result = array_map(function ($item) use ($key) {
    return $item[$key];
  }, $array);

  return $result;
}
