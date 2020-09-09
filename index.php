<?php 
require('controller/controller.php');

if(isset($_GET['action'])){
    if($_GET['action'] == "listCompanies"){
        listCompanies();
    } else {
        echo 'Error: no company list available';
    }
} else 
{
    echo "No content added :(";
}
