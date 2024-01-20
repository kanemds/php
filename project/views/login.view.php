<div>
  <h1>Login</h1>
  <form action="" method="POST">
    <div>
      <label for="email"> Email:</label>
      <input type="text" name="email_input" id="email" />
    </div>

    <div>
      <label for="password"> Password:</label>
      <input type="password" name="password_input" id="password" />
    </div>

    <div>
      <button type="submit" name="login-button">Submit</button>

    </div>
  </form>
  <div>
    <?php
    if (isset($view_bag['status'])) {
      echo $view_bag['status'];
    }
    ?>
  </div>
</div>