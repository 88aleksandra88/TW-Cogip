<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('./controller/controller.php');

if(isset($_GET['action'])) 
{
    if($_GET['action'] == "listContacts") 
    {
        listContacts();
    }
    else if($_GET['action'] == "listInvoices") 
    {
        listInvoices();
    }
    else if($_GET['action'] == "adminPanel")
    {
        adminPanel();
    }
    else if($_GET['action'] == "detailCompany") 
    {
        detailCompany();
    }
    else if($_GET['action'] == "detailContact") 
    {
        detailContact();
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
        providersListCompanies();
        listCompanies();
    } else {
        echo "ERROR: action undefined :( </br>
                (Check that you didn't make a typo in the URL ;)";
    }
}