<?php
require_once('./model/Connection.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class CompanyManager extends Connection
{
    function getClientsCompany(){ 
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM companies WHERE company_type = 3');

        return $req;
    }

    function getProvidersCompany(){
        $db = $this->dbConnect();
        $result = $db->query('SELECT * FROM companies WHERE company_type = 4');

        return $result;
    }
}


// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// function getListCompanies() { 
//     include_once('model/Connection.php');
//     $companyList =  $dbcon->query('SELECT * FROM companies');

//     return $companyList;
// }

// function getCompany() {
//     include_once('model/Connection.php');
//     $i = $_GET['id'];
//     $companyDetails = $dbcon->query('SELECT * FROM companies WHERE id='.$i);

//     return $companyDetails;
// }