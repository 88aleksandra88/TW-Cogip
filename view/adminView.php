
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Test de connexion
if(empty(($_SESSION['username']))){
    header('location: ./index.php');
    exit();
}
// Start recording view
ob_start(); 

$title = "COGIP - Administration panel"; 
?>

<section class="jumbotron d-flex flex-row justify-content-end">
    <!-- Test de connexion -->
    <p> Bienvenue <?= $_SESSION['username'] ?> ! </p>
    <h1 class="mr-5 text-info"><i class="fas fa-users-cog"></i> Administration Panel</h1>
</section>
<section class="container">
    <article class="column">

        <!-- Display last created invoices -->
        <section class="col">
            <table class='table'>
                <h3><span class="badge badge-primary">Last 5 Invoices</span></h3>
                <tr class="row bg-light text-primary">
                    <th col='col-2'>Invoice ID</th>
                    <th col='col-4'>Last Name</th>
                    <th col='col-4'>First Name</th>
                </tr>
                <?php while($row = $lastInvoices->fetch()){ ?>
                <tr class="row">
                    <td class='col-2'><a href='index.php?action=detailInvoice&id="<?= $row['invoice_id']?>"'><?= $row['invoice_number']?></a></td>
                    <td class='col-4'><a href='index.php?action=detailContact&id="<?= $row['user_id']?>"'><?= $row['last_name']?></a></td>
                    <td class='col-4'><a href='index.php?action=detailContact&id="<?= $row['user_id']?>"'><?= $row['first_name']?></td></a>
                    <td class='col-1'><button class="btn btn-primary btn-warning">EDIT</button></td>
                    <td class='col-1'><button class="ml-2 btn btn-primary btn-danger">DELETE</button></td>
                </tr>
                <?php }?>
            </table>
        </section>

        <!-- Display last created companies -->
        <section class="col">
            <table class='table'>
                <h3><span class="badge badge-primary">Last 5 Companies</span></h3>
                <tr class="row bg-light text-primary">
                    <th col='col'>Company Name</th>
                    <th col='col'>Country</th>
                </tr>
                <?php while($row = $lastCompanies->fetch()){ ?>
                <tr>
                    <td><?= $row['company_name']?></td>
                    <td><?= $row['country']?></td>
                    <td><button class="btn btn-primary btn-warning">EDIT</button></td>
                    <td><button class="ml-2 btn btn-primary btn-danger">DELETE</button></td>
                </tr>
                <?php }?>
            </table>
        </section>

        <!-- Display last created contacts -->
        <section class="col">
            <table class='table'>
                <h3><span class="badge badge-primary">Last 5 Contacts</span></h3>
                <tr class="row bg-light text-primary">
                    <th col='col-3'>Last Name</th>
                    <th col='col-3'>First Name</th>
                    <th col='col-4'>Email</th>
                </tr>
                <?php while($row = $lastContacts->fetch()){ ?>
                <tr>
                    <td><?= $row['last_name']?></td>
                    <td><?= $row['first_name']?></td>
                    <td><?= $row['email']?></td>
                    <td><button class="btn btn-primary btn-warning">EDIT</button><button class="ml-2 btn btn-primary btn-danger">DELETE</button></td>
                </tr>
                <?php }?>
            </table>
        </section>

    </article>
</section>

<!-- End record and create view -->
<?php

    $content = ob_get_clean();
    
    require('base.php');
?>
