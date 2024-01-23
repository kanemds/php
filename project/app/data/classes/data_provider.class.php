<?php

require('term_data.class.php');

// reason leave empty because of api call can have different requirement, it can be replace by extends when empty

class Data_provider
{
  protected $source;

  function __construct($source)
  {
    $this->source = $source;
  }

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
  }

  public function update_term($original_term, $new_term, $definition)
  {
  }

  public function delete_term($term)
  {
  }
}
