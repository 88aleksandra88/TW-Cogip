<?php

require('controller/controller.php');

if(isset($_GET['action'])){
    if($_GET['action'] == "listCompanies"){
        listCompanies();
    }
    else if($_GET['action'] == "listContacts"){
        listContacts();
    }
    else if($_GET['action'] == "listInvoices"){
        listInvoices();
    }
}
else {
    echo "Error: action not defined";
}