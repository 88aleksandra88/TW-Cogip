<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('./controller/controller.php');

$controller = new Controller();


if(isset($_GET['action'])) 
{
    if($_GET['action'] == "listContacts") 
    {
        $controller->listContacts();
    }
    else if($_GET['action'] == "listInvoices") 
    {
        $controller->listInvoices();
    }
    else if($_GET['action'] == "adminPanel")
    {
        adminPanel();
    }
    else if($_GET['action'] == "detailCompany") 
    {
        $controller->detailCompany();
    }
    else if($_GET['action'] == "detailContact") 
    {
        $controller->detailContact();
    }
    else if($_GET['action'] == "newCompany") 
    {
        newContact();
    }
    else if($_GET['action'] == "newInvoice") 
    {
        newInvoice();
    }
   else if($_GET['action'] == "listCompanies"){
        //  listCompanies();
         $controller->listCompanies();
    } else {
        echo "ERROR: action undefined :( </br>
                (Check that you didn't make a typo in the URL ;)";
    }
}