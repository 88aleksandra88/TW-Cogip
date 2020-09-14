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
<div class="header">
        <h2>Login</h2>
</div>
<form method="post" action=""> 
        <?= $login->login(); ?>
        <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" >
        </div>
        <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
        </div>
        <div class="input-group">
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


