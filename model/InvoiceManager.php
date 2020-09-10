<?php

// namespace Becode\Cogip\model;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./model/Connection.php');

class InvoiceManager extends Connection
{
    function getInvoice() 
    {
        // $i = $_GET['id'];
        $invoiceDetails = $this->dbConnect()->query('SELECT invoices.invoice_number, users.last_name, users.first_name  FROM invoices INNER JOIN users ON invoices.user_id=users.id WHERE invoices.id=1');

        return $invoiceDetails;
    }

    function getListInvoices() 
    { 
        $invoiceList = $this->dbConnect()->query('SELECT * FROM invoices');

        return $invoiceList;
    }

    function newInvoice() 
    {
        $newInvoice = $this->dbConnect()->query();
        // ! Function 
    }
}



