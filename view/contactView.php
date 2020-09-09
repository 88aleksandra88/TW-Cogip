<?php $title = "COGIP - Contact details";

ob_start();
$row = $details->fetch(); ?>

<h1> COGIP - Contact: <?php echo $row['first_name']." ".$row['last_name']; ?></h1>

<?php
    echo "<p>";
    echo "Contact : ".$row['first_name']." ".$row['last_name']."<br />";
    echo "Company ID : ".$row['company_id']."<br />";
    echo "Email : ".$row['email']."<br />";
    echo "</p>";

    $content = ob_get_clean();
    require('base.php');
?>
