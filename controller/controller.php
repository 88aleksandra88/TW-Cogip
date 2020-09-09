<?php 

require('model/model.php');

function listCompanies(){
   $list = getListCompanies();
   require('view/listCompanies.php');
}

?>
