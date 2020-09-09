
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - Panel Admin"; ?>

<?php ob_start(); ?>
<h1> COGIP : Administration Panel </h1>

<?php
    echo "<table class='table'>
                <tr>
                    <th scope='col'>Invoice ID</th>
                    <th scope='col'>User ID</th>
                </th>";
    while($row = $list->fetch()){
        echo "<tr>";
        echo "<td>" . $row['invoice_number'] . "</td>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<table class='table'>
                <tr>
                    <th scope='col'>Invoice ID</th>
                    <th scope='col'>User ID</th>
                </th>";
    while($row = $listDeux->fetch()){
        echo "<tr>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $content = ob_get_clean();
    
    require('base.php');
?>
