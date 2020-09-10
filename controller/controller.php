<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require_once('./model/AdminManager.php');
// require_once('./model/CompanyManager.php');
// require_once('./model/ContactManager.php');
// require_once('./model/InvoiceManager.php');
// require_once('./model/LoginManager.php');

class Controller 
{
     function getLogged(){

      require('view/login.php');
   }

   function getRegister(){

      require('view/registration.php');
   }
}