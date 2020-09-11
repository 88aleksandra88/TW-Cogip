<?php $title = "COGIP - List of invoices"; ?>

<?php ob_start(); ?>
<h1> COGIP : Invoices Directory </h1>

<?php
    echo "<table class='table'>
                <tr>
                    <th scope='col'>Number</th>
                    <th scope='col'>Date</th>
                    <th scope='col'>Contact ID</th>
                    <th scope='col'>Company ID</th>
                </th>";
    while($row = $listInvoices->fetch()){
        echo "<tr>";
        echo "<td><a href='index.php?action=detailInvoice&id=".$row['id']."'>".$row['invoice_number']."</a></td>";
        echo "<td>" . $row['invoice_date'] . "</td>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "<td>" . $row['company_id'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $content = ob_get_clean();
    
    require('base.php');
?>