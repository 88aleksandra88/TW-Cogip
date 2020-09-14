<?php
//  include('./login must be split/server.php'); 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$title = "COGIP - Log in";
?>

<section class="jumbotron d-flex flex-row justify-content-end">
    <h1 class="mr-5 text-info"><i class="fa fa-id-card"></i> Registration</h1>
</section>

<div class="header">
        <h2>Registration</h2>
</div>

<form method="post" action="">
	<?= $register->register() ?>
    <div class="form-group">
      <label for="exampleInputPassword1">Username</label>
      <input type="text" name="username"  value="<?php $username; ?>" class="form-control"  placeholder="Username" required>
    </div>

	<div class="form-group">
      <label for="email">Email address</label>
      <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" value="<?php $email; ?>" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

	<div class="form-group">
      <label for="inputPassword1">Password</label>
      <input type="password" class="form-control"  name="password_1"  placeholder="Password" required>
    </div>

	<div class="form-group">
      <label for="inputPassword2">Confirm password</label>
      <input type="password" class="form-control"  name="password_2"  placeholder="Password" required>
    </div>

	<div class="input-group">
		<button type="submit" class="btn btn-outline-success" name="reg_user">Register</button>
	</div>

	<p>
		Already a member? <a href="?action=login">Sign in</a>
	</p>
</form>


<?php
$content = ob_get_clean();
require('base.php');
?>