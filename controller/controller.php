<?php 

require('../model/AdminManager.php');
require('../model/CompanyManager.php');
require('../model/CompanyManager.php');
require('../model/InvoiceManager.php');
require('../model/LoginManager.php');

function listCompanies(){
   $list = getListCompanies();
   require('view/listCompaniesView.php');
}


function invoice()
{
    $invoiceManager = new InvoiceManager();

    $invoice = $invoiceManager->getPost($_GET['id']);

    require('../view/invoiceView.php');
}