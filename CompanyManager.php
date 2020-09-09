<?php

function getListCompanies()
{ 
    include_once('Connection.php');
    $companyList =  $dbcon->query('SELECT * FROM companies');

    return $companyList;
}