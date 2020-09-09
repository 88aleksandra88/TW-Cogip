<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./model/AdminManager.php');
require_once('./model/CompanyManager.php');
require_once('./model/ContactManager.php');
require_once('./model/InvoiceManager.php');
// require_once('./model/LoginManager.php');

class Controller 
{
   function adminPanel()
   {
      $adminManager = new AdminManager();
      $lastInvoices = $adminManager->getLastInvoices();
      $lastCompanies = $adminManager->getLastCompanies();
      $lastContacts = $adminManager->getLastContacts();

      require('./view/adminView.php');
   }


   function detailCompany() 
   {
      $companyManager = new CompanyManager();
      $details = $companyManager->getCompany();

      require('./view/companyView.php');
   }


   function listCompanies()
   {  
      $companyManager = new CompanyManager();
      $clientsList = $companyManager->getClientsCompany();
      $providersList = $companyManager->getProvidersCompany();
      
      require('./view/listCompaniesView.php');
   }

   function detailContact() 
   {
      $contactManager = new ContactManager();
      $detailContact = $contactManager->getContact();

      require('./view/contactView.php');
   }

   function listContacts() 
   {
      $contactManager = new ContactManager();
      $listContacts = $contaxtManager->getListContacts(); 

      require('./view/listContactsView.php');
   }
}




// function listInvoices() 
// {
//    $list = getListInvoices(); 

//    require('./view/listInvoicesView.php');
// }





function detailInvoice() {

   $details = getInvoice();
   require('view/invoiceView.php');
}

function newCompany() {

   require('view/newCompany.php');
}

function newContact() {
   
   require('view/newContact.php');
}

function newInvoice() {

   require('view/newInvoice.php');
}