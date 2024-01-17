<?php

function view($name, $model)
{
  global $view_bag;
  require('./views/layout.view.php');
}

// file can open: reading, reading and writing, writing etc...
// php.net for more details
// w or w+ : if file not exist create one, if it does clean up data
// r or r+ : files have to exist

function get_data()
{
  $fname = CONFIG['data_file'];

  $json = '';

  // if (!file_exists($fname)) {
  //   // in general file needs to close after open
  //   $handle = fopen($fname, 'w+');
  //   fclose($handle);
  // } else {
  //   $handle = fopen($fname, 'r');
  //   // read all content set filesize as file itself
  //   $json = fread($handle, filesize($fname));
  //   fclose($handle);
  // }

  if (!file_exists($fname)) {
    // include open and close
    // instead of w+, file_put_contents($fname, '') do the same,
    // created if not exist
    // replace '' if existed
    file_put_contents($fname, '');
  } else {
    // include open and close
    $json = file_get_contents($fname);
  }

  return $json;
}
