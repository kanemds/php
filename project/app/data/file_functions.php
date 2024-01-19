<?php

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

function get_terms()
{
  $json = get_data();

  return json_decode($json);
}

function get_term($term)
{
  $data = get_terms();

  foreach ($data as $item) {

    if ($item->term === $term) {
      return $item;
    }
  }

  return false;
}

// note: array_map(fn,arr) and array_filter(array,fn)

function search_terms($search)
{
  $items = get_terms();

  $results = array_filter($items, function ($item) use ($search) {
    if (
      strpos($item->term, $search) !== false ||
      strpos($item->definition, $search) !== false
    ) {
      return $item;
    }
  });

  return $results;
}
