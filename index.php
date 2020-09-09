<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('./controller/controller.php');

if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'listCompanies':
            listCompanies();
            break;
    
        case 'listContacts':
            listContacts();
            break;
    
        case 'listInvoices':
            listInvoices();
            break;
    
        case 'detailCompany':
            detailCompany();
            break;
    
        case 'detailContact':
            detailContact();
            break;
    
        case 'detailInvoice':
            detailInvoice();
            break;
        
        case 'newCompany':
            newCompany();
            break;
    
        case 'newContact':
            newContact();
            break;
    
        case 'newInvoice':
            newInvoice();
            break;
        
        default:
            echo "ERROR: action undefined :( </br>
                (Check that you didn't make a typo in the URL ;)";
            break;
    }
    else if($_GET['action'] == "listContacts") {
        listContacts();
    }
    else if($_GET['action'] == "listInvoices") {
        listInvoices();
    }
    else if($_GET['action'] == "adminPanel"){
        adminPanel();
    }
    else if($_GET['action'] == "detailCompany") {
        detailCompany();
    }
    else if($_GET['action'] == "detailContact") {
        detailContact();
    }
    else if($_GET['action'] == "detailInvoice") {
        detailInvoice();
    }
}