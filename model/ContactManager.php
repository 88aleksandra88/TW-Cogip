<?php

function getListContacts()
{ 
    include_once('model/Connection.php');
    $contactList =  $dbcon->query('SELECT * FROM users');

    return $contactList;
}