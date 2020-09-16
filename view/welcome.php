<?php ob_start();?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - Log in"; ?>

      <section class="jumbotron bg-secondary mb-0">
            <article class="display-4 text-center">
                        <img src="./img/cogip_logo.png" alt="La Cogip">
            </article>
            <p class="lead text-center text-white">The intranet becomes child's play !</p>
            <?php if(empty($_SESSION)){ ?>
            <a href="?action=login" class="col-md-2 btn btn-warning mx-auto d-block font-weight-bold" >Log in</a>
            <?php } else { ?>
            <p class="text-center font-weight-bold">Hi <span class="text-warning"><?= $_SESSION['username'] ?></span>, how are your today ?</p>
            <a href="?action=adminPanel" class="col-md-2 btn btn-outline-warning mx-auto d-block font-weight-bold">Admin Panel</a>
            <?php  }?>
      </section>

<?php
$content = ob_get_clean();    
require('base.php');

