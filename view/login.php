<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - Log in"; ?>

<?php ob_start();?>
<html>
<section class="jumbotron d-flex flex-row justify-content-end">
    <h1 class="mr-5 text-info"><i class="fa fa-sign-in"></i> Log in</h1>
</section>

<form method="post" action="?action=adminPanel"> 
        <?= $login->login(); ?>
        <legend>Log in</legend>

        <div class="form-group">
                <label for="exampleInputPassword1">Username</label>
                <input type="text" name="username"  value="<?php $username; ?>" class="form-control"  placeholder="Username" required>
        </div>

        <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control"  name="password"  placeholder="Password" required>
        </div>


        <div class="input-group" class="form-group row">
                <button type="submit" class="btn btn-outline-primary" name="login_user">Login</button>
        </div>

        <p>
                Not yet a member? <a href='?action=registration'>Sign up</a>
        </p>
</form>
</html>

<?php
$content = ob_get_clean();    
require('base.php');
?>


