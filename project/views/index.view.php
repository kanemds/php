<!-- $model from the  view function  -->

<table>
  <tr>
    <td>Term</td>
    <td>definition</td>
  </tr>
  <tr>
    <form action="" method='GET'>
      <input type="text" name="search" id="search">
      <input type="button" value="search">
    </form>
  </tr>
  <!-- <?php
        foreach ($model as $each) {
          // js each.term
          // php $each->term
          $term = $each->term;
          $definition = $each->definition;
          echo "<tr><td> $term</td><td>$definition</td></tr>";
        }
        ?> -->

  <?php foreach ($model as $each) : ?>
    <tr>
      <!-- nginx default to look for the file if provide file path and name  -->
      <!-- href='filepath/filename.php' -->
      <!-- <td><a href="detail.php?term=<?= $each->term ?>"><?= $each->term ?></a></td> -->
      <td><a href="detail?term=<?= $each->term ?>"><?= $each->term ?></a></td>
      <td><?= $each->definition ?></td>

    </tr>
  <?php endforeach; ?>
</table>

<!-- also work with if statement
<?php if (true) : ?>
  <body>

  </body>
<?php endif; ?> -->