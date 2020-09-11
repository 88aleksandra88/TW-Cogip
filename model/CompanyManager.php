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

function addCompany() {
    include_once('model/Connection.php');

    $name = $_POST['company_name'];
    $country = $_POST['country'];
    $vat = $_POST['company_vat'];
    $type = $_POST['company_type'];

    $sql = "INSERT INTO companies (company_name, country, company_vat, company_type) 
                        VALUES (:company_name, :country, :company_vat, :company_type)";
        
    $stmt = $dbcon->prepare($sql);
    $stmt->execute(['company_name' => $name,
                    'country' => $country,
                    'company_vat' => $vat,
                    'company_type' => $type]);

                    $stmt->debugDumpParams();
}