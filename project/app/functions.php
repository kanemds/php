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
  $users = CONFIG['users'];

  if (!isset($users[$email])) {
    return false;
  }

  $users_password = $users[$email];

  return $password === $users_password;
}

function is_user_authenticated()
{
  return isset($_SESSION['email']);
}

function ensure_user_is_authenticated()
{
  if (!is_user_authenticated()) {
    redirect('/project');
  }
}
