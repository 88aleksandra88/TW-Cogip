<?php

require('controller/controller.php');

if(isset($_GET['action'])) {
    if($_GET['action'] == "listCompanies") {
        listCompanies();
    }
    else if($_GET['action'] == "listContacts") {
        listContacts();
    }
    else if($_GET['action'] == "listInvoices") {
        listInvoices();
    }
    else if($_GET['action'] == "detailCompany") {
        detailCompany();
    }
    else if($_GET['action'] == "detailContact") {
        detailContact();
    }
    else if($_GET['action'] == "detailInvoice") {
        detailInvoice();
    }
}
else {
    echo "Error: action is undefined";
}