<?php


$host = 'localhost';
$port = '5432';
$dbname = 'shoes_store';
$user = 'postgres';
$password = 'postgres';
$dsn = "pgsql:host=localhost;dbname=shoes_store";
$dbusername = "postgres";
$dbpassword = "postgres";


try {
  // Create a new PDO instance
  // $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  var_dump($pdo);
  // Set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM customer";
  $statement = $pdo->query($sql);
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);

  var_dump($result);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die(); // Exit the script in case of connection failure
}


$pdo = null;


// phpinfo();
// $db_handle = pg_connect("host=localhost dbname=shoes_store user=postgres password=postgres");

// if ($db_handle) {

//   echo 'Connection attempt succeeded.';
// } else {

//   echo 'Connection attempt failed.';
// }

// pg_close($db_handle);
