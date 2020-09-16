<?php
// Start recording view
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Test de connexion
if(empty($_SESSION['username'])){
    header('location:./index.php');
    exit();
}

$title = "COGIP - Administration panel"; 
?>

    <!-- Test de connexion -->
    
<section class="jumbotron d-flex flex-row justify-content-end">
    <h3 class="mr-5 text-info"> Bienvenue <?= $_SESSION['username'] ?> !</h3>
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
                    <td class='col-3'><a href='index.php?action=detailContact&id="<?= $row['user_id']?>"'><?= $row['first_name']?></td></a>
                    <?php if($_SESSION['type'] == 1) { ?>
                    <td class='col-1'><button class="btn btn-light border-warning text-center text-warning"><i class="fas fa-edit"></i></button></td>
                    <td class='col-1'><button class="ml-2 btn btn-light border-danger text-center text-danger"><i class="fas fa-times"></i></button></td>
                    <?php } ?>
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
                <tr class='row'>
                    <td class='col-3'><a href='index.php?action=detailCompany&id=<?=$row['id']?>"'><?= $row['company_name']?></a></td>
                    <td class='col-4'><?= $row['country']?></td>
                    <td class='col-3'><a href='index.php?action=detailCompany&id=<?=$row['id']?>"'><?= $row['company_vat']?></a></td>
                    <?php if($_SESSION['type'] == 1) { ?>
                    <td class='col-1'><button class="btn btn-light border-warning text-center text-warning"><i class="fas fa-edit"></i></button></td>
                    <td class='col-1'><button class="ml-2 btn btn-light border-danger text-center text-danger"><i class="fas fa-times"></i></button></td>
                    <?php } ?>
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
                <tr class='row'>
                    <td class='col-3'><a href="index.php?action=detailContact&id=<?=$row['id']?>"><?= $row['last_name']?></a></td>
                    <td class='col-4'><a href="index.php?action=detailContact&id=<?=$row['id']?>"><?= $row['first_name']?></a></td>
                    <td class='col-3'><a href="mailto:<?=$row['email']?>"><?= $row['email']?></a></td>
                    <?php if($_SESSION['type'] == 1) { ?>
                        <td class='col-1'><button class="btn btn-light border-warning text-center text-warning"><i class="fas fa-edit"></i></button></td>
                        <td class='col-1'><button class="ml-2 btn btn-light border-danger text-center text-danger"><i class="fas fa-times"></i></button></td>
                     <?php } ?>
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

