<?php $title = "COGIP - List of contacts"; ?>

<?php ob_start(); ?>
<h1> COGIP : Contacts Directory </h1>

<?php
    echo "<table class='table'>
                <tr>
                    <th scope='col'>Firstame</th>
                    <th scope='col'>Lastname</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Company ID</th>
                </th>";
    while($row = $list->fetch()){
        echo "<tr>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['company_id'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $content = ob_get_clean();
    
    require('base.php');
?>
