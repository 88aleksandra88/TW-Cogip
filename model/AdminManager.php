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
        $result = $this->dbConnect()->query('SELECT invoice_number, user_id  FROM invoices ORDER BY invoice_date DESC LIMIT 0, 5');

        return $result;
    }

    function getLastCompanies()
    {
        $result = ($this->dbConnect())->query('SELECT company_name, country  FROM companies');

        return $result;
    }

    function getLastContacts()
    {
        $result = $this->dbConnect()->query('SELECT first_name, last_name, email FROM users');

        return $result;
    }

}
