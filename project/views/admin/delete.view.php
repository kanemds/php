<!-- $model from the  view function  -->

<h1>Delete A Programming Language Term</h1>

<form action="" method='POST'>
  <h3>Are you sure to delete the term: <?= $model->term ?>?</h3>
  <input type="hidden" name="term" value="<?= $model->term ?>">
  <input type="submit" value="Delete">
</form>