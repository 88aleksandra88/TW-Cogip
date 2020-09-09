<?php

function getListCompanies() { 
    include_once('model/Connection.php');
    $companyList =  $dbcon->query('SELECT * FROM companies');

    return $companyList;
}

function getCompany() {
    include_once('model/Connection.php');
    $i = $_GET['id'];
    $companyDetails = $dbcon->query('SELECT * FROM companies WHERE id='.$i);

    return $companyDetails;
}