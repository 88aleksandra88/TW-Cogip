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
        $name = "";
        $country = "";
        $vat = "";
        $type = "";

        if (isset($_POST['company_name']) AND isset($_POST['company_vat'])) {
            $name = $_POST['company_name'];
            $country = $_POST['country'];
            $vat = $_POST['company_vat'];
            $type = $_POST['company_type'];
        };

        $sql = "INSERT INTO companies (company_name, country, company_vat, company_type) 
                            VALUES (:company_name, :country, :company_vat, :company_type)";
            
        $stmt = $this->dbConnect()->prepare($sql);

        $stmt->execute(['company_name' => $name,
                        'country' => $country,
                        'company_vat' => $vat,
                        'company_type' => $type]);
    }

    function deleteCompany()
    {
        if (isset($_POST['delete']))
        {
            try {
                $id = $_POST['delete'];
                $sql = "DELETE FROM `companies` WHERE `id`=$id";

                $stmt = $this->dbConnect();
                $stmt->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt->exec($sql);
                header('Location: index.php?action=listCompanies');
            }
            catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        };
    }
}
