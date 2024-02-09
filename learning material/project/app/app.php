<?php


define('APP_PATH', dirname(__FILE__) . '/../');

// data
require('config.php');

// functions
require('functions.php');

// this one before Class Data and File_data_provider in case conflict
require('data/classes/data_provider.class.php');

// static  class members (properties or methods) 
require('data/classes/data.class.php');

// data functions
// require('data/file_functions.php'); // normal function file
require('data/classes/file_data_provider.class.php'); // using class obj

require('data/classes/my_postgreSQL_data_provider.class.php');




Data::initialize(new My_postgreSQL_data_provider(CONFIG['data_file']));
