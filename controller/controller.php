<?php 

require_once('model/CompanyManager.php');
require_once('model/ContactManager.php');
require_once('model/InvoiceManager.php');

function listCompanies() {

   $list = getListCompanies();
   require('view/listCompaniesView.php');
}

function listContacts() {

   $list = getListContacts();
   require('view/listContactsView.php');
}

function listInvoices() {

   $list = getListInvoices();
   require('view/listInvoicesView.php');
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

function newCompany() {

   require('view/newCompany.php');
}

function newContact() {
   
   require('view/newContact.php');
}

function newInvoice() {

   require('view/newInvoice.php');
}