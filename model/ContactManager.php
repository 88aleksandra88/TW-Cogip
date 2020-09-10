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
        $db = $this->dbConnect();
        $i = $_GET['id'];
        $contactDetails = $db->query('SELECT * FROM users WHERE id='.$i);
    
        return $contactDetails;
    }

    function getListContacts() 
    { 
        $db = $this->dbConnect();
        $contactList =  $db->query('SELECT * FROM users');

        return $contactList;
    }

    function newContact() 
    { 
        $db = $this->dbConnect();
        // ! Missing function
    }
}

