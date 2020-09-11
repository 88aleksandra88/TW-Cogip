<?php
require_once('./model/Connection.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class CompanyManager extends Connection
{
    function getCompanyDetails() 
    {
        return $this->dbConnect()->query('SELECT * FROM companies  WHERE companies.id='.$_GET['id']);
    }

    function getCompanyContacts()
    {
        return $this->dbConnect()->query('SELECT * FROM users WHERE company_id='.$_GET['id']);
    }

    function getCompanyInvoices()
    {
        return $this->dbConnect()->query('SELECT * FROM invoices WHERE company_id='.$_GET['id']);
    }

    function getListCompanies() 
    { 
        $result =  $this->dbConnect()->query('SELECT * FROM companies');
    
        return $result;
    }

    function getClientsCompany()
    { 
        $result = $this->dbConnect()->query('SELECT *, company_name AS company,  company_vat AS vat FROM companies WHERE company_type = 3 ORDER BY company_name ASC');

        return $result;
    }

    function getProvidersCompany()
    {
        $result = $this->dbConnect()->query('SELECT *, company_name AS company,  company_vat AS vat  FROM companies WHERE company_type = 4 ORDER BY company_name ASC');

        return $result;
    }

    function addCompany() 
    {
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

    
}
