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

function addContact() {
    include_once('model/Connection.php');

    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $id = $_POST['company_id'];

    $sql = "INSERT INTO users (first_name, last_name, email, phone, company_id) 
                        VALUES (:first_name, :last_name, :email, :phone, :company_id)";
        
    $stmt = $dbcon->prepare($sql);
    $stmt->execute(['first_name' => $firstname,
                    'last_name' => $lastname,
                    'email' => $email,
                    'phone' => $phone,
                    'company_id' => $id]);
}