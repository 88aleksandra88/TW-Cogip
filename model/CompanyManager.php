<?php
require_once('./model/Connection.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class CompanyManager extends Connection
{
    function getCompany() 
    {
        $db = $this->dbConnect();
        $i = $_GET['id'];
        $result = $db->query('SELECT * FROM companies WHERE id='.$i);
    
        return $result;
    }

    function getListCompanies() 
    { 
        $db = $this->dbConnect();
        $result =  $db->query('SELECT * FROM companies');
    
        return $result;
    }

    function getClientsCompany(){ 
        $db = $this->dbConnect();
        $result = $db->query('SELECT * FROM companies WHERE company_type = 3');

        return $result;
    }

    function getProvidersCompany(){
        $db = $this->dbConnect();
        $result = $db->query('SELECT * FROM companies WHERE company_type = 4');

        return $result;
    }
}
