<?php

require('controller/controller.php');

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
}