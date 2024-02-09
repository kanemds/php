<?php

include('../header_footer/header.php');
require('../functions/index.php');

// $_POST[name] is from the input name='' attribute
// single form suggest this
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // individual by attribute name
  output_print_r($_POST['email_input']);
  output_print_r($_POST['password_input']);

  // retrieve all data from method POST 
  output_print_r($_POST);
  // filter_input(INPUT_POST, input['name'], FILTER_VALIDATE_EMAIL)
  $email = filter_input(INPUT_POST, 'email_input', FILTER_VALIDATE_EMAIL);

  if ($email === false) {
    $status = 'Please enter a validate email address.';
  }
}


// <input type="submit" name="login-button" value="login">
// for multiples submit buttons, provide name attribute can activate the selected button 
if (isset($_POST['login-button'])) {
  output_print_r($_POST);
  // filter_input(INPUT_POST, input['name'], FILTER_VALIDATE_EMAIL)
  $email = filter_input(INPUT_POST, 'email_input', FILTER_VALIDATE_EMAIL);

  if ($email === false) {
    $status = 'Please enter a validate email address.';
  }
}
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