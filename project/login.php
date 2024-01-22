<?php
session_start();

require('./app/app.php');

if (is_user_authenticated()) {
  redirect('/project/admin');
}


if (is_post()) {
  $email = filter_input(INPUT_POST, 'email_input', FILTER_VALIDATE_EMAIL);
  $password = sanitize($_POST['password_input']);

  // compare with data from server
  if (authenticate_user($email, $password)) {
    $_SESSION['email'] = $email;
    redirect('/project/admin');
  } else {
    $view_bag['status'] = 'Current user is not authenticated.';
  }

  if ($email === false) {
    $view_bag['status'] = 'Please enter a validate email address.';
  }
}

view('login', '');
