<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start recording view
ob_start(); 
        
$title = "COGIP - Company Details"; 
?>

<section class="jumbotron d-flex flex-row justify-content-end">
    <h1 class="pr-5 text-info"><i class="fas fa-building"></i> Company Details</h1>
</section>
<section class="container">
    <article class="column">

        <!-- Company details -->
        <section class="col">
            <table class='table'>
                <span class="badge badge-primary">Company informations</span>
                <tr class="row bg-light text-primary">
                    <th class='col-2'>VAT Number</th>
                    <th class='col-3'>Company Name</th>
                    <th class='col-3'>Country</th>
                    <th class='col-2'>Type</th>
                </tr>
                <?php while($row = $companyDetails->fetch()){ ?>
                <tr class="row">
                    <td class='col-2'><?= $row['company_vat']?></td>
                    <td class='col-3'><?= $row['company_name']?></td>
                    <td class='col-3'><?= $row['country']?></td>
                    <td class='col-2'><?= $row['company_type']?></td>
                    <td class='col-1'><button class="btn btn-primary btn-warning">EDIT</button></td>
                    <td class='col-1'><button class="ml-2 btn btn-primary btn-danger">DELETE</button></td>
                </tr>
                <?php }?>
            </table>
        </section>

        <!-- Contacts for this company -->
        <section class="col">
            <table class='table'>
                <span class="badge badge-primary">Company contacts</span>
                <tr class="row bg-light text-primary">
                    <th class='col-2'>Last Name</th>
                    <th class='col-3'>First Name</th>
                    <th class='col-3'>Email</th>
                    <th class='col-2'>phone</th>
                </tr>
                <?php while($row = $companyContacts->fetch()){ ?>
                <tr class="row">
                    <td class="col-2"><a href='index.php?action=detailContact&id="<?= $row['id']?>"'><?= $row['last_name']?></a></td>
                    <td class='col-3'><?= $row['first_name']?></td>
                    <td class='col-3'><a href="mailto:<?=$row['email']?>"><?= $row['email']?></a></td>
                    <td class='col-2'><?= $row['phone']?></td>
                    <td class='col-1'><button class="btn btn-primary btn-warning">EDIT</button></td>
                    <td class='col-1'><button class="ml-2 btn btn-primary btn-danger">DELETE</button></td>
                </tr>
                <?php }?>
            </table>
        </section>

        <!-- Invoices for this company -->
        <section class="col">
            <table class='table'>
                <span class="badge badge-primary">Invoices</span>
                <tr class="row bg-light text-primary">
                    <th class='col-2'>Number</th>
                    <th class='col-8'>Content</th>
                </tr>
                <?php while($row = $companyInvoices->fetch()){ ?>
                <tr class="row">
                    <td class='col-2'><a href='index.php?action=detailInvoice&id="<?= $row['id']?>"'><?= $row['invoice_number']?></a></td>
                    <td class='col-8'><?= $row['invoice_content']?></td>
                    <td class='col-1'><button class="btn btn-primary btn-warning">EDIT</button></td>
                    <td class='col-1'><button class="ml-2 btn btn-primary btn-danger">DELETE</button></td>
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