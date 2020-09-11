
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - List of companies"; ?>

<!-- Content start -->
<?php ob_start(); ?>
<h1 class="m-4 text-center"> COGIP : Companies Directory </h1>

<!--  Clients Table  -->
<h2> Clients </h2>
<table class='table'>
    <thead class='thead-dark'>
        <tr>
            <th scope='col'>Name</th>
            <th scope='col'>Country</th>
            <th scope='col'>TVA</th>
        </tr>
    </thead>
        <?php while($row = $clientsList->fetch()){ ?>
        <tr>
            <td><a href='index.php?action=detailCompany&id=<?=$row['id']?>"'><?=$row['company']?></td>
            <td><?=$row['country']?></td>
            <td><?=$row['vat']?></td>
        </tr>
        <?php } ?>
</table>

 <!-- Providers Table -->
 <h2>Providers</h2>
<table class='table'>
        <thead class='thead-dark'>
            <tr>
                <th scope='col'>Name</th>
                <th scope='col'>Country</th>
                <th scope='col'>TVA</th>
            </tr>
        </thead>
<?php while($row = $providersList->fetch()){?>
        <tr>
            <td><a href="index.php?action=detailCompany&id=<?=$row['id']?>"><?=$row['company']?></td>
            <td><?=$row['country']?></td>
            <td><?=$row['vat']?></td>
        </tr>
<?php } ?>
</table>

<?php
    $content = ob_get_clean();
    
    require('base.php');
?>