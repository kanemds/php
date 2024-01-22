<?php


define('APP_PATH', dirname(__FILE__) . '/../');

// data
require('config.php');

// functions
require('functions.php');

// data functions
// require('data/file_functions.php'); // normal function file
require('data/classes/file_data_provider.class.php'); // using class obj
