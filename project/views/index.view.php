<!-- $model from the  view function  -->

<table>
  <tr>
    <td>Term</td>
    <td>definition</td>
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
      <td><a href="detail.php?term=<?= $each->term ?>"><?= $each->term ?></a></td>
      <td><?= $each->definition ?></td>

    </tr>
  <?php endforeach; ?>
</table>

<!-- also work with if statement
<?php if (true) : ?>
  <body>

  </body>
<?php endif; ?> -->