<?php

// store all the require files
require('../app/app.php');

if (is_get()) {

  $key = sanitize($_GET['key']);

  if (empty($key)) {
    echo 'term not found';
    die();
  }

  $term = get_term($key);

  if ($term === false) {
    echo 'term not found';
    die();
  }

  view('admin/delete', $term);
}


if (is_post()) {
  $term = sanitize($_POST['term']);
  if (empty($term)) {
    echo 'Missing one of the field';
  } else {
    delete_term($term);
    redirect('/project/admin');
  }
}
