<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getListCompanies()
{ 
    include_once('Connection.php');
    $companyList =  $dbcon->query('SELECT * FROM companies');

    return $companyList;
}