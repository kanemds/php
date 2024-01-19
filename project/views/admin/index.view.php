<!-- $model from the  view function  -->

<h1>Programming Languages</h1>
<table>
  <tr>
    <form action="" method='GET'>
      <input type="text" name="search" id="search">
      <input type="submit" value="Search">
    </form>
  </tr>
  <tr>
    <td>Term</td>
    <td>definition</td>
  </tr>

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