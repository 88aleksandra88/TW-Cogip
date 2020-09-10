<?php
require_once('./model/Connection.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class CompanyManager extends Connection
{
    function getCompany() 
    {
        // $id = $_GET['id'];
        $result = $this->dbConnect()->query('SELECT * FROM companies  WHERE companies.id=1' );
    
        return $result;
    }

    function getListCompanies() 
    { 
        $result =  $this->dbConnect()->query('SELECT * FROM companies');
    
        return $result;
    }

    function getClientsCompany()
    { 
        $result = $this->dbConnect()->query('SELECT *, company_name AS company,  company_vat AS vat FROM companies WHERE company_type = 3');

        return $result;
    }

    function getProvidersCompany()
    {
        $result = $this->dbConnect()->query('SELECT *, company_name AS company,  company_vat AS vat  FROM companies WHERE company_type = 4');

        return $result;
    }

    function newCompany()
    {
        // $db = $this->dbConnect()->;
        //! Missing function

    }
}
