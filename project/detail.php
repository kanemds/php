<?php

// store all the require files
require('./app/app.php');

if (!isset($_GET['term'])) {
  redirect('/project');
}

$data = get_term($_GET['term']);

if ($data === false) {

  die();
}

$term = $data->term;
$view_bag = [
  'title' => 'Decode Json Data' . $term
];


view('detail', $data);
