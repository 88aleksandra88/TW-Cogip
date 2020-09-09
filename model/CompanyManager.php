<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getClientsCompanies(){ 
    include_once('Connection.php');
    $clientsQuery =  $dbcon->query("SELECT * FROM companies WHERE company_type = 3");
    
    return $clientsQuery;
}

function getProvidersCompanies(){ 
    include_once('Connection.php');
    $providersQuery =  $dbcon->query("SELECT * FROM companies WHERE company_type = 4");
    
    return $providersQuery;
}
