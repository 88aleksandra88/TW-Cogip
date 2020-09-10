<?php
 include('./login must be split/server.php'); 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - Log in"; ?>

<?php ob_start();?>

<div class="header">
  	<h2>Login</h2>
 </div>
	 
<form method="post" action="index.php">
<?php include('./login must be split/errors.php'); ?>
<div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
</div>
<div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
</div>
<div class="input-group">
        <button type="submit" class="btn btn-primary" name="login_user">Login</button>
</div>
<p>
        Not yet a member? <a href='?action=registration.php'>Sign up</a>
</p>
</form>

<?php 
$content = ob_get_clean();    
require('base.php');
?>


