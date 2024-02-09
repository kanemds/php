<?php
session_start();

require_once('../functions/index.php');
require_once('../fake_api/config.php');

ensure_user_is_authenticated();

echo $_SESSION['email'];

if (isset($_POST['redirectButton'])) {
  redirect('/logout');
  die();
}

?>



<form method="post" action="">
  <button type="submit" name="redirectButton">logout</button>
</form>