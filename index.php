<?php 
// include('./view/base.php');
// require('controller/Controller.php');

// A adapter avec le router etc....
// $controller = new Controller();
// if(isset($_GET['action'])){
//     if($_GET['action'] == "login"){
//         $controller->getLogged();
//         echo "log ?";
//     } else if ($_GET['action'] == "registration"){
//         $controller->getRegister();
//         echo "log ?";
//     } 
//     else{
//             echo 'Error: no company list available';
//     }
// } else 
// {
//     $content = "<h1 class='text-center'>Page Accueil ou Page Login ?</h1> <br /> <p class='text-center'>Vous en pensez quoi ?</p> ";
//     require('view/base.php');
//     //echo "No content added :(";
// }
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('./router/Router.php');

(new Router)->actionRouting();