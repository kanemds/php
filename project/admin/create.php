<?php

// store all the require files
require('../app/app.php');

if (is_post()) {
  $term = sanitize($_POST['term']);
  $definition = sanitize($_POST['definition']);
  if (empty($term) || empty($definition)) {
    echo 'Missing one of the field';
  } else {
    add_term($term, $definition);
    redirect('/project/admin');
  }
}

view('admin/create', '');
