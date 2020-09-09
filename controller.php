<?php 

// require('../model/AdminManager.php');
// require_once('Connection.php');
require_once('CompanyManager.php');
// require('../model/ContactManager.php');
// require('../model/InvoiceManager.php');
// require('../model/LoginManager.php');



function listCompanies()
{
   $list = getListCompanies();
    
   require('listCompaniesView.php');
}


// function invoice()
// {
//     $invoiceManager = new InvoiceManager();

//     $invoice = $invoiceManager->getPost($_GET['id']);

//     require('../view/invoiceView.php');
// }