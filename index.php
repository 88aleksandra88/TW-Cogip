<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('./controller/controller.php');

if(isset($_GET['action'])){
    if($_GET['action'] == "listCompanies"){
        listCompanies();
    }
    else if($_GET['action'] == "listContacts"){
        listContacts();
    }
    else if($_GET['action'] == "listInvoices"){
        listInvoices();
    }
    else if($_GET['action'] == "adminPanel"){
        adminPanel();
    }
}
else {
    echo "Error: action not defined";
}