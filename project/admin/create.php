<?php

session_start();
// store all the require files
require('../app/app.php');
ensure_user_is_authenticated();

if (is_post()) {
  $term = sanitize($_POST['term']);
  $definition = sanitize($_POST['definition']);
  if (empty($term) || empty($definition)) {
    echo 'Missing one of the field';
  } else {
    Data::add_term($term, $definition);
    redirect('/project/admin');
  }
}

view('admin/create', '');
