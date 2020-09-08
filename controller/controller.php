<?php 

require_once('../db/db.php');
require('model.php');

function listInvoices()
{
    $invoices = getInvoices();

    require('invoicesListView.php');
}

function invoice()
{
    $invoice = getInvoice($_GET['id']);

    require('invoiceView.php');
}

