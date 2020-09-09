<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getClientsCompanies($type)
{ 
    include_once('Connection.php');
    $compList =  $dbcon->query('SELECT * FROM companies WHERE company_type = ' . $type);

    return $compList;
}
