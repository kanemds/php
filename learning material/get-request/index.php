<?php

include('../header_footer/header.php');

// $_GET[] super global
// /get-request/?query=ab&limit=2
// $query = $_GET['query'];
// $limit = $_GET['limit'];

// other way of doing it

// $query = '';
// $limit = '';

// function get_query()
// {
//   global $query, $limit;

//   $query = $_GET['query'];
//   $limit = $_GET['limit'];
// }

// get_query();

// better way of using filter_input prevent cross site scripting

// INPUT_GET FILTER_VALIDATE_INT are built in method
// 'query' and 'limit' are the  // /get-request/?query=ab&limit=2
$query = filter_input(INPUT_GET, 'query', FILTER_VALIDATE_INT); // return true or false
$limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT); // return true or false


// die(): stop processing from here not full script
// if ($query || $limit) {
//   die();
// }
if ($query === false) {
  $query = 1;
}

if ($limit === false) {
  $limit = 4;
}

?>


<div>
  query string: <?= $query; ?>
  <br />
  limit : <?= $limit; ?>
</div>


<?php include('../header_footer/footer.php') ?>