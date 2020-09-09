<?php 
require('controller.php');

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
