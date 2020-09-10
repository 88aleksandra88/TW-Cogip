
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - List of companies"; ?>

<!-- Content start -->
<?php ob_start(); ?>
<h1 class="m-4 text-center"> COGIP : Companies Directory </h1>

<?php
// Clients Table 
    echo "<h2> Clients </h2>
    <table class='table'>
    <thead class='thead-dark'>
    <tr>
    <th scope='col'>Name</th>
    <th scope='col'>Country</th>
    <th scope='col'>TVA</th>
    </th>
    </thead>";
    while($row = $clientsList->fetch()){
            echo "<tr>";
            echo "<td><a href='index.php?action=detailCompany&id=".$row['id']."'>" . $row['company'] . "</td>";
            echo "<td>" . $row['country'] . "</td>";
            echo "<td>" . $row['vat'] . "</td>";
            echo "</tr>";
    }
    echo "</table>";

    // Providers Table
    echo "<h2>Providers</h2>
    <table class='table'>
    <thead class='thead-dark'>
    <tr>
    <th scope='col'>Name</th>
    <th scope='col'>Country</th>
    <th scope='col'>TVA</th>
    </th>
    </thead>";
    while($row = $providersList->fetch()){
            echo "<tr>";
            echo "<td><a href='index.php?action=detailCompany&id=".$row['id']."'>" . $row['company'] . "</td>";
            echo "<td>" . $row['country'] . "</td>";
            echo "<td>" . $row['vat'] . "</td>";
            echo "</tr>";
    }
    echo "</table>";

    
    $content = ob_get_clean();
    
    require('base.php');
?>
