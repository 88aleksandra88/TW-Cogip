<?php
// Start recording view
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Test de connexion
if(empty($_SESSION['username'])){
    header('location:./index.php');
    exit();
}

$title = "COGIP - user panel gestion"; 
?>

<section class="jumbotron d-flex flex-row justify-content-end">
    <h1 class="display-4 mr-5 text-info"><i class="fas fa-users-cog"></i> User gestion Panel</h1>
</section>

<article class="column">

<!-- User details -->
<section class="col">
    <table class='table'>
        <tr class="row bg-light text-primary">
            <th class='col-3'>Username</th>
            <th class='col-3'>Email</th>
            <th class='col-3'>Droits</th>
        </tr>
        <?php while($row = $listUsers->fetch()){ ?>
        <tr class="row">
            <td class='col-3'><?= $row['username']?></td>
            <td class='col-3'><?= $row['email']?></td>
            <td class='col-3'><?= $row['droit']?></td>

        </tr>
        <?php }?>
    </table>
</section>
<?php 
//Fin de la mise en mémoire de la page
$content = ob_get_clean();
require('base.php');
