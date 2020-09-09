<?php

function getListInvoices()
{ 
    include_once('model/Connection.php');
    $invoiceList =  $dbcon->query('SELECT * FROM invoices');

    return $invoiceList;
}