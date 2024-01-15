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

function authenticate_user($email, $password)
{
  return $email === USER_NAME && $password === PASSWORD;

  // or 

  // if($email === USER_NAME && $password === PASSWORD){
  //   return true;
  // }
}

function redirect($url)
{
  header("location: $url");
}

function is_user_authenticated()
{
  return isset($_SESSION['email']);
}

function ensure_user_is_authenticated()
{
  if (!is_user_authenticated()) {
    redirect('/session');
    die();
  }
}
