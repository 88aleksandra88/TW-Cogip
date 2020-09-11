<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./model/AdminManager.php');
require_once('./model/CompanyManager.php');
require_once('./model/ContactManager.php');
require_once('./model/InvoiceManager.php');
require_once('./model/LoginManager.php');
// require_once('./model/errors.php');


class Controller 
{
   function adminPanel()
   {
      $lastInvoices = (new AdminManager)->getLastInvoices();
      $lastCompanies = (new AdminManager)->getLastCompanies();
      $lastContacts = (new AdminManager)->getLastContacts();

      require('./view/adminView.php');
   }

   function detailCompany() 
   {
      $companyDetails = (new CompanyManager)->getCompanyDetails();
      $companyContacts = (new CompanyManager)->getCompanyContacts();
      $companyInvoices = (new CompanyManager)->getCompanyInvoices();

      require('./view/companyView.php');
   }

   function listCompanies()
   {  
      $clientsList = (new CompanyManager)->getClientsCompany();
      $providersList = (new CompanyManager)->getProvidersCompany();
      
      require('./view/listCompaniesView.php');
   }

   function newCompany() 
   {
      $newCompany = (new CompanyManager)->newCompany();

      require('view/newCompany.php');
   }

   function detailContact() 
   {
      $contactDetails = (new ContactManager)->getContactDetails();
      $contactInvoices = (new ContactManager)->getContactInvoices();
      $contactCompanies = (new ContactManager)->getContactCompanies();

      require('./view/contactView.php');
   }

   function listContacts() 
   {
      $listContacts = (new ContactManager)->getListContacts(); 

      require('./view/listContactsView.php');
   }

   function newContact() 
   {
      $newContact = (new ContactManager)->newContact();
      
      require('view/newContact.php');
   }

   function detailInvoice() 
   {
      $invoiceDetails = (new InvoiceManager)->getInvoice();
      $invoiceCompany = (new InvoiceManager)->getInvoiceCompany();

      require('view/invoiceView.php');
   }

   function listInvoices() 
   {
      $listInvoices = (new InvoiceManager)->getListInvoices(); 

      require('./view/listInvoicesView.php');
   }

   function newInvoice() 
   {
      $listInvoices = (new InvoiceManager)->newInvoice(); 

      require('view/newInvoice.php');
   }

   function getLogged(){
      $login = new LoginManager;
      $login->login();
      require('view/login.php');
   }

   function getRegister(){
      $register = new LoginManager;
      $register->register();
      require('view/registration.php');
   }
}

