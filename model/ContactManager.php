<?php
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

