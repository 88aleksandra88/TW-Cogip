<?php

function getListInvoices() { 
    include_once('model/Connection.php');
    $invoiceList =  $dbcon->query('SELECT * FROM invoices');

    return $invoiceList;
}

function getInvoice() {
    include_once('model/Connection.php');
    $i = $_GET['id'];
    $invoiceDetails = $dbcon->query('SELECT * FROM invoices WHERE id='.$i);

    return $invoiceDetails;
}