<?php

// namespace Becode\Cogip\model;

require_once('./model/Connection.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class AdminManager extends Connection
{
    function getLastInvoices()
    { 
        $db = $this->dbConnect();
        $req = $db->query('SELECT invoice_number, user_id  FROM invoices ORDER BY invoice_date DESC LIMIT 0, 5');

        return $req;
    }

    function getLastCompanies()
    {
        $db = $this->dbConnect();
        $result = $db->query('SELECT user_id  FROM invoices ORDER BY invoice_date DESC LIMIT 0, 5');

        return $result;
    }

}
