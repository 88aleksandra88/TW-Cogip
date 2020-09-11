<?php

// namespace Becode\Cogip\model;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./model/Connection.php');

class ContactManager extends Connection
{
    function getContactDetails() 
    {
        $id = $_GET['id'];
        return $this->dbConnect()->query('SELECT * FROM users WHERE id='.$id);
    }

    function getContactCompanies()
    {
        $id = $_GET['id'];
        return $this->dbConnect()->query('SELECT companies.*, users.* FROM companies INNER JOIN users ON users.company_id=companies.id WHERE users.id='.$id);
    }

    function getContactInvoices()
    {
        $id = $_GET['id'];
        return $this->dbConnect()->query('SELECT invoices.*, invoices.id AS invoice_id, users.*  FROM invoices INNER JOIN users ON invoices.user_id=users.id WHERE users.id='.$id);
    }

    function getListContacts() 
    { 
        $contactList = $this->dbConnect()->query('SELECT * FROM users');

        return $contactList;
    }

    function newContact() 
    { 
        // $newContact = $this->dbConnect();
        // ! Missing function
    }
}

