<?php

// store all the require files
require('./app/app.php');


$view_bag = [
  'title' => 'Decode Json Data'
];



view('index', get_decode_json_data());
