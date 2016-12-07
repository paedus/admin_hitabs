<form class="login-form" method="post" action="">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <?php 
    $login_error = $user->getError('wrong-user');
    echo !empty($login_error) ? "<p class='bg-danger'>&nbsp;$login_error</p>" : "";
  ?>
  <button type="submit" class="btn btn-default" name="login">Submit</button>
  <img src="img/favicon.png" class="login-form-logo" />
</form>