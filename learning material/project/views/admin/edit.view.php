<!-- $model from the  view function  -->

<h1>Edit A Programming Language Term</h1>

<form action="" method='POST'>
  <input type="hidden" name="original-term" value="<?= $model->term; ?>">
  <label for='term'>Term:</label>
  <input type="text" name="term" id="term" value="<?= $model->term; ?>">
  <label for='definition'>Definition:</label>
  <textarea name="definition" id="definition"><?= $model->definition; ?></textarea>
  <input type="submit" value="Edit">
</form>