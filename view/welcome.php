<?php ob_start();?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - Log in"; ?>

      <div class="jumbotron bg-secondary mb-0">
            <div class="display-4 text-center">COGIP - Toys production society</div>
            <div class="row">
                  <img  class="my-4 mx-auto d-block" src='./img/logo.png' alt='Logo Cogip'/>
            </div>
            <p class="lead text-center text-white">An invoice, a company... COGIP intranet !</p>
            <?php if(empty($_SESSION)){ ?>
            <a href="?action=login" class="col-md-2 btn btn-warning mx-auto d-block font-weight-bold" >Log in</a>
            <?php } else { ?>
            <p class="text-center font-weight-bold">Hi <span class="text-warning"><?= $_SESSION['username'] ?></span>, how are your today ?</p>
            <a href="?action=adminPanel" class="col-md-2 btn btn-outline-warning mx-auto d-block font-weight-bold">Admin Panel</a>
            <?php  }?>
      </div>

<?php
$content = ob_get_clean();    
require('base.php');

