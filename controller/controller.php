<?php 

require_once('../db/db.php');
require('model.php');

function listCompanies(){
   $list = getListCompanies();
   require('view/listCompanies.php');
}

?>
