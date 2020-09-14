<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - Log in"; ?>

<?php ob_start();?>
<html>

<section class="jumbotron d-flex flex-row justify-content-end">
    <h1 class="mr-5 text-info"><i class="fa fa-sign-in"></i>Log in</h1>
</section>

<section class="container">
        <form method="post" action="" class="column"> 
                <?= $login->login(); ?>

                <h3><span class="form-group col-md-2 badge badge-primary">Log in</span></h3>

                <div class="form-group col-md-5">
                        <label for="exampleInputPassword1">Username</label><span style="color: red; display: inline; float: none;">*</span>
                        <input type="text" name="username"  value="<?php $username; ?>" class="form-control"  placeholder="Username" required>
                </div>

                <div class="form-group col-md-5">
                        <label for="inputPassword">Password</label><span style="color: red; display: inline; float: none;">*</span>
                        <input type="password" class="form-control"  name="password"  placeholder="Password" required>
                </div>

                <div class="form-group col-md-6" class="form-group row ">
                        <button type="submit" class="btn btn-outline-primary" name="login_user">Login</button>
                </div>

                <p class="col-md-6">
                        Not yet a member? <a href='?action=registration'>Sign up</a>
                </p>
        </form>

</section>

</html>

<?php
$content = ob_get_clean();    
require('base.php');
?>


