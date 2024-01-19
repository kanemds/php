<?php

function redirect($url)
{
  header("Location:$url");
  die();
}

function view($name, $model)
{
  global $view_bag;
  require(APP_PATH . './views/layout.view.php');
}

function is_get()
{
  return $_SERVER['REQUEST_METHOD'] === 'GET';
}

function is_post()
{
  return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function sanitize($value)
{
  $trim = trim($value);
  $temp = htmlspecialchars($trim, ENT_QUOTES);

  if ($temp === false) {
    return '';
  }

  return $temp;
}
