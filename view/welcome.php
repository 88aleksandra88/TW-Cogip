<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - Log in"; ?>

<?php ob_start();?>

      <section class="jumbotron bg-secondary mb-0 d-flex flex-column justify-content-center align-items center">
            <article class="text-center">
                  <img  class="my-4 mx-auto d-block" src='./img/cogip_logo.png' alt='Logo Cogip'/>
                  <h4 class="lead text-center text-white">L'intranet devient un jeu d'enfant !</h4>
                  <a class="btn btn-warning" href="./index.php?action=login" role="button">Connectez-vous</a>
            </article>
      </section>

<?php
$content = ob_get_clean();    
require('base.php');
?>
