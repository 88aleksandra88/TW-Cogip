<?php
$title = "COGIP - List of contacts";
ob_start();
?>
<h1> COGIP : Contacts Directory </h1>

<table class='table'>
    <tr>
        <th scope='col'>Firstame</th>
        <th scope='col'>Lastname</th>
        <th scope='col'>Email</th>
        <th scope='col'>Company ID</th>
    </th>
   <?php  while($row = $listContacts->fetch()){ ?>
        <tr>
        <td><a href="index.php?action=detailContact&id=<?=$row['id']?>"><?=$row['first_name']?></a></td>
        <td><a href="index.php?action=detailContact&id=<?=$row['id']?>"><?=$row['last_name']?></a></td>
        <td><?= $row['email']?></td>
        <td><?= $row['company_id']?> </td>
        </tr>
    <?php } ?>
</table>

<?php
    $content = ob_get_clean();
    
    require('base.php');
?>
