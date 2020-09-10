<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start recording view
ob_start(); 

$title = "COGIP - Contact Details"; 
?>

<section class="jumbotron d-flex flex-row justify-content-end">
    <h1 class="mr-5">Contact Details</h1>
</section>
<section class="container">
    <article class="row">
        <section class="col">
            <table class='table'>
                <tr class="bg-info text-white">
                    <th scope='col'>Last Name</th>
                    <th scope='col'>First Name</th>
                    <th scope='col'>Email</th>
                </tr>
                <?php while($row = $contactDetails->fetch()){ ?>
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