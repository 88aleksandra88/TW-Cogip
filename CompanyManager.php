<?php
require('Connection.php');

function getListCompanies()
{ 
    // include_once('Connection.php');
    var_dump($dbcon);
    $res =  $dbcon->query('SELECT * FROM companies');
    var_dump($res->fetch());
    return $res;
}