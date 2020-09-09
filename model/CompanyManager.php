<?php
require_once('Connection.php');

function getListCompanies()
{
    $res =  $dbcon->query('SELECT * FROM companies');

    return $res;
}