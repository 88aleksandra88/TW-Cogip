<?php
//  include('./login must be split/server.php'); 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// require('./model/errors.php');

// $logErr = new LoginManager();

$title = "COGIP - Log in"; ?>

<?php ob_start();?>
<html>
<section class="jumbotron d-flex flex-row justify-content-end">
    <h1 class="mr-5 text-info"><i class="fa fa-sign-in"></i> Log in</h1>
</section>

<form method="post" action="?action=adminPanel"> 
        <?= $login->login(); ?>
        <legend>Log in</legend>
        <div class="input-group" class="form-group row">
                <label class="col-form-label">Username</label>
                <input type="text" name="username" required >
        </div>
        <div class="input-group" class="form-grpup row">
                <label  class="col-form-label">Password</label>
                <input type="password" name="password" required>
        </div>
        <div class="input-group" class="form-group row">
                <button type="submit" class="btn btn-outline-success" name="login_user">Login</button>
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


