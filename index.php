<!-- index.php?action=listPosts example -->

<?php 

require('controller/controller.php');

if(isset($_GET['action'])){
    if($_GET['action'] == "listCompanies"){
        listCompanies();
    } else {
        echo 'Erreur..';
    }
} else {
    echo "Mauvaise page ?";
}
?>