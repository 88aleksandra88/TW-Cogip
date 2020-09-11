<?php
//  include('./login must be split/server.php'); 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - Log in";
?>


<div class="alert alert-dismissible alert-success">
	<h1 class="alert-heading" class="header">Sign up</h1>
	<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, qui esse. Eaque tempore quasi corrupti, inventore temporibus suscipit fuga facere! .</p>
</div>

<form method="post" action="">

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
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