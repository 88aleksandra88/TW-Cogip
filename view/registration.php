<?php ob_start();?>
<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!empty($_SESSION['username'])){
  header('location:./index.php');
  exit();
}

$title = "COGIP - Log in";
?>

<section class="jumbotron d-flex flex-row justify-content-end">
    <h1 class="mr-5 text-info"><i class="fa fa-id-card"></i> Registration</h1>
</section>

<div class="alert alert-dismissible alert-success">
	<h1 class="alert-heading" class="header">Sign up</h1>
	<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, qui esse. Eaque tempore quasi corrupti, inventore temporibus suscipit fuga facere! .</p>
</div>

<form method="post" action="">
	<?= $register->register(); ?>
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

    <?= $register->register(); ?>


      <div class="form-group col-md-5">
      <h3><span class="col-auto badge badge-warning">Registration</span></h3>
          <label for="exampleInputPassword1">Username</label><span style="color: red; display: inline; float: none;">*</span>
          <input type="text" name="username"  value="<?php $username; ?>" class="form-control"  placeholder="Username" required>
        </div>

      <div class="form-group col-md-5">
          <label for="email">Email address</label><span style="color: red; display: inline; float: none;">*</span>
          <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" value="<?php $email; ?>" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

      <div class="form-group col-md-5">
          <label for="inputPassword1">Password</label><span style="color: red; display: inline; float: none;">*</span>
          <input type="password" class="form-control"  name="password_1"  placeholder="Password" required>
        </div>

      <div class="form-group col-md-5">
          <label for="inputPassword2">Confirm password</label><span style="color: red; display: inline; float: none;">*</span>
          <input type="password" class="form-control"  name="password_2"  placeholder="Password" required>
        </div>

      <div class="form-group col-md-5">
        <button type="submit" class="btn btn-outline-warning" name="reg_user">Register</button>
      </div>

      <p class="col-md-5">
        Already a member? <a class="text-warning" href="?action=login">Sign in</a>
      </p>

    </form>

  </section>


<?php
$content = ob_get_clean();
require('base.php');
