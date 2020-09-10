<?php
$title = "COGIP - List of contacts";
ob_start();
?>
<h1> COGIP : Contacts Directory </h1>
<?php
    echo "<table class='table'>
                <tr>
                    <th scope='col'>Firstame</th>
                    <th scope='col'>Lastname</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Company ID</th>
                </th>";
    while($row = $listContacts->fetch()){
        echo "<tr>";
        echo "<td><a href='index.php?action=detailContact&id=".$row['id']."'>".$row['first_name']."</a></td>";
        echo "<td><a href='index.php?action=detailContact&id=".$row['id']."'>".$row['last_name']."</a></td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['company_id'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $content = ob_get_clean();
    
    require('base.php');
?>
