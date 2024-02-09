<?php

// must be at the top for the file that needs to get the session 
session_start();


require_once('../functions/index.php');
require_once('../fake_api/config.php');

if (is_user_authenticated()) {
  redirect('/admin');
  die();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  $email = filter_input(INPUT_POST, 'email_input', FILTER_VALIDATE_EMAIL);
  $password = $_POST['password_input'];

  // compare with data from server
  if (authenticate_user($email, $password)) {
    $_SESSION['email'] = $email;
    redirect('/admin');
    die();
  } else {
    $status = 'Current user is not authenticated.';
  }

  if ($email === false) {
    $status = 'Please enter a validate email address.';
  }
}


include('../header_footer/header.php');
?>



<div>
  <!-- when action empty default for this page action button -->
  <!-- action: the submit page url '/submit'  -->
  <form action="" method="POST">
    <div>
      <!-- the label for='' and the input id='' so when label is click it will focus on the input  -->
      <label for="email"> Email:</label>
      <input type="text" name="email_input" id="email" />
    </div>

    <div>
      <label for="password"> Password:</label>
      <input type="password" name="password_input" id="password" />
    </div>

    <div>
      <!-- <input type="submit" name="login-button" value="login"> -->

      <!-- or -->

      <button type="submit" name="login-button">Submit</button>

    </div>
  </form>
  <div>
    <?php
    if (isset($status)) {
      echo $status;
    }
    ?>
  </div>
</div>


<?php include('../header_footer/footer.php') ?>