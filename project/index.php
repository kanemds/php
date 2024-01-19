<?php

// store all the require files
require('./app/app.php');


$view_bag = [
  'title' => 'Decode Json Data'
];

if (isset($_GET['search'])) {
  $items = search_terms($_GET['search']);
} else {
  $items = get_terms();
}



view('index', $items);
