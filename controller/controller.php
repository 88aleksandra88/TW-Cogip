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