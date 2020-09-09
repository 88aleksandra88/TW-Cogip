<?php $title = "COGIP - Company details";

ob_start();
$row = $details->fetch(); ?>

<h1> COGIP - Company: <?php echo $row['company_name']; ?></h1>

<?php
    echo "<p>";
    echo "Name : ".$row['company_name']."<br />";
    echo "Country : ".$row['country']."<br />";
    echo "VAT : ".$row['company_vat']."<br />";
    echo "</p>";

    $content = ob_get_clean();
    require('base.php');
?>