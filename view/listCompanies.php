<?php $title = "Companies list ! "; ?>

<?php ob_start(); ?>
<h1> COGIP : Companies Directory </h1>

<?php
    while($row = $list->fetch()){
        echo $row['company_name'] . "<br />";
        echo $row['country'] . "<br />";
        echo $row['company_vat'] . "<br />";
    }

    $content = ob_get_clean();
    require('template.php');
?>
