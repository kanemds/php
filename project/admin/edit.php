<?php
session_start();
// store all the require files
require('../app/app.php');
ensure_user_is_authenticated();

if (is_get()) {

  // note: for the better performance first check if the key exist then do stuff, else stop

  // what term to request
  $key = sanitize($_GET['key']);
  // $key = $_GET['key'];

  if (empty($key)) {
    echo 'term not found';
    die();
  }

  $term = get_term($key);

  if ($term === false) {
    echo 'term not found';
    die();
  }

  view('admin/edit', $term);
}





if (is_post()) {
  $term = sanitize($_POST['term']);
  $definition = sanitize($_POST['definition']);
  $original_term = sanitize($_POST['original-term']);
  if (empty($term) || empty($definition) || empty($original_term)) {
    echo 'Missing one of the field';
  } else {
    update_term($original_term, $term, $definition);
    redirect('/project/admin');
  }
}
