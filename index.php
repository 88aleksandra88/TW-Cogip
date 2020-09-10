<?php 
// include('./view/base.php');
require('controller/controller.php');

// A adapter avec le router etc....
$controller = new Controller();
if(isset($_GET['action'])){
    if($_GET['action'] == "login"){
        $controller->getLogged();
        echo "log ?";
    } else {
        echo 'Error: no company list available';
    }
} else 
{
    require('view/base.php');
    echo "No content added :(";
}
