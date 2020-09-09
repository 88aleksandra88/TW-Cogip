
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - List of companies"; ?>

<?php ob_start(); ?>
<h1> COGIP : Companies Directory </h1>

<?php
    echo "<table class='table'>
                <tr>
                    <th scope='col'>Name</th>
                    <th scope='col'>TVA</th>
                    <th scope='col'>Country</th>
                </th>";
    while($row = $list->fetch()){
        echo "<tr>";
        echo "<td>" . $row['company_name'] . "</td>";
        echo "<td>" . $row['country'] . "</td>";
        echo "<td>" . $row['company_vat'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $content = ob_get_clean();
    
    require('base.php');
?>
