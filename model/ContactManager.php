<?php

// namespace Becode\Cogip\model;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./model/Connection.php');

class ContactManager extends Connection
{
    function getContact() 
    {
        // $i = $_GET['id'];
        $contactDetails = $this->dbConnect()->query('SELECT * FROM users WHERE id=1');
    
        return $contactDetails;
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

