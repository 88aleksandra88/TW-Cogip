<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start recording view
ob_start(); 
        
$title = "COGIP - Company Details"; 
?>

<section class="jumbotron d-flex flex-row justify-content-end">
    <h1 class="mr-5">Company Details</h1>
</section>
<section class="container">
    <article class="row">
        <section class="col">
            <table class='table'>
                <tr class="bg-info text-white">
                    <th scope='col'>Company</th>
                    <th scope='col'>Country</th>
                    <th scope='col'>VAT Number</th>
                </tr>
                <?php while($row = $companyDetails->fetch()){ ?>
                <tr>
                    <td><?= $row['company_name']?></td>
                    <td><?= $row['country']?></td>
                    <td><?= $row['company_vat']?></td>
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