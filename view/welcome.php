<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - Log in"; ?>

<?php ob_start();?>

      <div class="jumbotron bg-secondary mb-0">
            <div class="display-4 text-center">COGIP - Société de production de jouets</div>
            <div class="row">
                  <img  class="my-4 mx-auto d-block" src='./img/logo.png' alt='Logo Cogip'/>
            </div>
            <p class="lead text-center text-white">Une facture, une entreprise, un endroit... l'intranet COGIP !</p>
            <button class="btn btn-warning mx-auto d-block font-weight-bold">Connectez-vous</button>
      </div>

<?php
$content = ob_get_clean();    
require('base.php');
?>
