<?php

// namespace Becode\Cogip\model;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./model/Connection.php');

class InvoiceManager extends Connection
{
    function getListInvoices() 
    { 
        $db = $this->dbConnect();
        $invoiceList =  $db->query('SELECT * FROM invoices');

        return $invoiceList;
    }

    function getInvoice() 
    {
        $db = $this->dbConnect();
        $i = $_GET['id'];
        $invoiceDetails = $db->query('SELECT * FROM invoices WHERE id='.$i);

        return $invoiceDetails;
    }

    function newInvoice() 
    {
        $db = $this->dbConnect();
        // ! Function 
    }
}



