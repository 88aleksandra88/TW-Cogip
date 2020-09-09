<?php

function getListContacts() { 
    include_once('model/Connection.php');
    $contactList =  $dbcon->query('SELECT * FROM users');

    return $contactList;
}

function getContact() {
    include_once('model/Connection.php');
    $i = $_GET['id'];
    $contactDetails = $dbcon->query('SELECT * FROM users WHERE id='.$i);

    return $contactDetails;
}