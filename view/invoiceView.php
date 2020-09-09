<?php $title = "COGIP - Invoice details";

ob_start();
$row = $details->fetch(); ?>

<h1> COGIP - Invoice: <?php echo $row['invoice_number']; ?></h1>

<?php
    echo "<p>";
    echo "Number : ".$row['invoice_number']."<br />";
    echo "Date : ".$row['invoice_date']."<br />";
    echo "Contact ID : ".$row['user_id']."<br />";
    echo "Company ID : ".$row['company_id']."<br />";

    $content = ob_get_clean();
    require('base.php');
?>