<!-- index.php?action=listPosts example -->

<?php 

require('./controller/controller.php');

if(isset($_GET['action'])) {
    if($_GET['action'] == 'listInvoices') {
        listInvoices();
    } 
    elseif ($_GET['action'] == 'invoice'){
        if(isset($_GET['id']) && $_GET['id'] > 0) {
            invoice();
        } 
        else {
            echo 'error : no invoice';
        }
    }
}
else {
    listInvoice();
}