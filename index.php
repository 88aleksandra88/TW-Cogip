<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('./controller/controller.php');

if(isset($_GET['action'])){
    if($_GET['action'] == "listCompanies"){
        echo 'indextest';
        listCompanies();
    } else {
        echo 'Error: no company list available';
    }
} else 
{
    echo "No content added :(";
}
