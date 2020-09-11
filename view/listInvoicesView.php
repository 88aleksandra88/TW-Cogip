<?php $title = "COGIP - List of invoices"; ?>

<?php ob_start(); ?>
<h1> COGIP : Invoices Directory </h1>

<table class='table'>
    <tr>
        <th scope='col'>Number</th>
        <th scope='col'>Date</th>
        <th scope='col'>Contact ID</th>
        <th scope='col'>Company ID</th>
    </th>
    <?php while($row = $listInvoices->fetch()){ ?>
    <tr>
        <td><a href="index.php?action=detailInvoice&id=<?=$row['id']?>"><?= $row['invoice_number']?></a></td>
        <td><?=$row['invoice_date']?></td>
        <td><?=$row['user_id']?></td>
        <td><?=$row['company_id']?></td>
    </tr>
    <?php }?>
</table>

<?php
    $content = ob_get_clean();
    
    require('base.php');
?>