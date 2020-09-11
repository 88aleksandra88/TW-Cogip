<?php

function getListInvoices() { 
    include_once('model/Connection.php');
    $invoiceList =  $dbcon->query('SELECT * FROM invoices');

    return $invoiceList;
}

function getInvoice() {
    include_once('model/Connection.php');
    $i = $_GET['id'];
    $invoiceDetails = $dbcon->query('SELECT * FROM invoices WHERE id='.$i);

    return $invoiceDetails;
}

function addInvoice() {
    include_once('model/Connection.php');

    $number = $_POST['invoice_number'];
    $content = $_POST['invoice_content'];
    $idComp = $_POST['company_id'];
    $idUser = $_POST['user_id'];

    date_default_timezone_set('Europe/Brussels');
    $tz = date_default_timezone_get();
    $date = date('Y-m-d H:i:s');
    echo $date;

    $sql = "INSERT INTO invoices (invoice_number, invoice_date, invoice_content, user_id, company_id) 
                        VALUES (:invoice_number, :invoice_date, :invoice_content, :user_id, :company_id)";
        
    $stmt = $dbcon->prepare($sql);
    $stmt->execute(['invoice_number' => $number,
                    'invoice_date' => $date,
                    'invoice_content' => $content,
                    'user_id' => $idUser,
                    'company_id' => $idComp]);

    $stmt->debugDumpParams();
}