<?php

// store all the require files
require('./app/app.php');


$view_bag = [
  'title' => 'Decode Json Data'
];

// class instance
// $data = new File_data_provider(CONFIG['data_file']);


if (isset($_GET['search'])) {
  // $items = $data->search_terms($_GET['search']);
  $items = Data::search_terms($_GET['search']);
} else {
  $items =  Data::get_terms();
}



view('index', $items);
