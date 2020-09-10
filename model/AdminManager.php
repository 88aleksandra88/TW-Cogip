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
        $result = $this->dbConnect()->query('SELECT invoices.invoice_number, users.last_name, users.first_name  FROM invoices INNER JOIN users ON invoices.user_id=users.id ORDER BY invoice_date DESC LIMIT 0, 5');

        return $result;
    }

    function getLastCompanies()
    {
        $result = ($this->dbConnect())->query('SELECT company_name, country  FROM companies');

        return $result;
    }

    function getLastContacts()
    {
        $result = $this->dbConnect()->query('SELECT first_name, last_name, email FROM users ORDER BY last_name DESC LIMIT 0, 5');

        return $result;
    }

}
