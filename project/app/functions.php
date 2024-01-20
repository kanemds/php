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

function authenticate_user($email, $password)
{
  return $email === USER_NAME && $password === PASSWORD;
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
