<?php

// The use of placeholders like :term and :definition in your SQL query,
// along with parameter binding using prepare and execute,
// is a good practice for preventing SQL injection in PHP when working with databases like PostgreSQL.

function connect()
{
  try {
    return new PDO(CONFIG['db']);
  } catch (PDOException $e) {
    return null;
  }
}

function add_term($term, $definition)
{


  $db = connect();

  if ($db === null) {
    return;
  }
  // :term or :definition can be :foo :doo
  // order matter,
  $postgreSQL = 'INSERT TO php_terms (term,definition) VALUES (:term, :definition)';
  $smt = $db->prepare($postgreSQL);

  $smt->execute([
    ':term' => $term,
    ':definition' => $definition
  ]);

  $smt = null;
  $db = null;
}
