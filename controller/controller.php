<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./model/AdminManager.php');
// require_once('Connection.php');
require_once('./model/CompanyManager.php');
// require_once('./model/ContactManager.php');
// require_once('./model/InvoiceManager.php');
// require('./model/LoginManager.php');

function listCompanies()
{
   $companyManager = new CompanyManager();
   $clientsList = $companyManager->getClientsCompany();
   $providersList = $companyManager->getProvidersCompany();
    
   require('./view/listCompaniesView.php');
}

// function listContacts() 
// {
//    $list = getListContacts(); 

//    require('./view/listContactsView.php');
// }

// function listInvoices() 
// {
//    $list = getListInvoices(); 

//    require('./view/listInvoicesView.php');
// }

function adminPanel()
{
   $adminManager = new AdminManager();
   $list = $adminManager->getLastInvoices();
   $listDeux = $adminManager->getLastCompanies();
   // $lastContacts = getLastContacts();
   // $lastCompanies = getLastCompanies();

   require('./view/adminView.php');
}

function detailCompany() {
   
   $details = getCompany();
   require('view/companyView.php');
}

function detailContact() {

   $details = getContact();
   require('view/contactView.php');
}

function detailInvoice() {

   $details = getInvoice();
   require('view/invoiceView.php');
}