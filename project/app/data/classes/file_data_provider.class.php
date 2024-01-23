<?php

// require('data_provider.class.php');

class File_data_provider extends Data_provider
{

  public function get_terms()
  {
    $json = $this->get_data();

    return json_decode($json);
  }

  public function get_term($term)
  {
    $data = $this->get_terms();

    foreach ($data as $item) {

      if ($item->term === $term) {
        return $item;
      }
    }

    return false;
  }

  // note: array_map(fn,arr) and array_filter(array,fn)

  public function search_terms($search)
  {
    $items = $this->get_terms();

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

  public function add_term($term, $definition)
  {
    $items = $this->get_terms();

    // $arr = [
    //   'term' => $term,
    //   'definition' => $definition
    // ];

    // $obj = (object) $arr;

    // $items[] = $obj;

    // add element end of array
    $items[] = new Term_data($term, $definition);

    $this->set_data($items);
  }

  public function update_term($original_term, $new_term, $definition)
  {
    $terms = $this->get_terms();

    foreach ($terms as $term) {
      if ($term->term === $original_term) {
        $term->term = $new_term;
        $term->definition = $definition;
        break;
      }
    }
    $this->set_data($terms);
  }

  public function delete_term($term)
  {
    $terms = $this->get_terms();

    for ($i = 0; $i < count($terms); $i++) {
      if ($terms[$i]->term === $term) {
        unset($terms[$i]);
        break;
      }
    }
    // unset will only remove the selected index will not re-arrange
    $new_terms = array_values($terms); // re-arrange the index order
    $this->set_data($new_terms);
  }


  ///////////////////////////////////////////// private //////////////////////////////////////////////////////////////////////////

  private function get_data()
  {


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

    if (!file_exists($this->source)) {
      // include open and close
      // instead of w+, file_put_contents($fname, '') do the same,
      // created if not exist
      // replace '' if existed
      file_put_contents($this->source, '');
    } else {
      // include open and close
      $json = file_get_contents($this->source);
    }

    return $json;
  }

  private function set_data($arr)
  {

    $json = json_encode($arr);

    file_put_contents($this->source, $json);
  }
}
