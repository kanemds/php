<?php


class My_postgreSQL_data_provider extends Data_provider
{

  public function get_terms()
  {
  }

  public function get_term($term)
  {
  }

  public function search_terms($search)
  {
  }

  public function add_term($term, $definition)
  {
    $db = $this->connect();

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

  public function update_term($original_term, $new_term, $definition)
  {
  }

  public function delete_term($term)
  {
  }

  private function connect()
  {
    try {
      return new PDO($this->source, CONFIG['db']);
    } catch (PDOException $e) {
      return null;
    }
  }
}
