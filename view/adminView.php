
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - Panel Admin"; 
ob_start(); 
?>

<html>
    <section class="jumbotron d-flex flex-row justify-content-end">
        <h1 class="mr-5">Administration Panel <span class="badge badge-info">Private</span></h1>
    </section>
    <section class="container">
        <article class="row">
            <section class="col">
                <table class='table'>
                    <tr class="bg-info text-white">
                        <th scope='col'>Invoice ID</th>
                        <th scope='col'>Last Name</th>
                        <th scope='col'>First Name</th>
                    </tr>
                    <?php while($row = $lastInvoices->fetch()){ ?>
                    <tr>
                        <td><?= $row['invoice_number']?></td>
                        <td><?= $row['last_name']?></td>
                        <td><?= $row['first_name']?></td>
                        <td><button class="btn btn-primary btn-warning">EDIT</button><button class="ml-2 btn btn-primary btn-danger">DELETE</button></td>
                    </tr>
                    <?php }?>
                </table>
            </section>
            <section class="col">
                <table class='table'>
                    <tr class="bg-info text-white">
                        <th scope='col'>Company Name</th>
                        <th scope='col'>Country</th>
                    </tr>
                    <?php while($row = $lastCompanies->fetch()){ ?>
                    <tr>
                        <td><?= $row['company_name']?></td>
                        <td><?= $row['country']?></td>
                        <td><button class="btn btn-primary btn-warning">EDIT</button><button class="ml-2 btn btn-primary btn-danger">DELETE</button></td>
                    </tr>
                    <?php }?>
                </table>
            </section>
            <section class="col">
                <table class='table'>
                    <tr class="bg-info text-white">
                        <th scope='col'>Last Name</th>
                        <th scope='col'>First Name</th>
                        <th scope='col'>Email</th>
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
</html>
<!-- End record and create view -->
<?php

    $content = ob_get_clean();
    
    require('base.php');
?>
