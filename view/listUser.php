<?php
// Start recording view
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Test de connexion
if(empty($_SESSION['username']) || $_SESSION['type'] != 1){
      header('location:?action=adminPanel');
      exit();
  }
$title = "COGIP - user panel gestion"; 
?>

<section class="jumbotron d-flex flex-row justify-content-end">
    <h1 class="display-4 mr-5 text-info"><i class="fas fa-users-cog"></i> User gestion Panel</h1>
</section>



<article class="column">


<!-- User details -->
<section class="col-8 m-auto">
    <table class='table'>
    <h2>
     <span class="badge badge-warning "><i class="fas fa-list"></i> Users list</span>
    </h2>

        <tr class="row bg-light text-primary">
            <th class='col-3'>Username</th>
            <th class='col-3'>Email</th>
            <th class='col-5'>Droits</th>
        </tr>
        <?php while($row = $listUsers->fetch()){ ?>
        <tr class="row">
            <td class='col-3'><?= $row['username']?></td>
            <td class='col-3'><?= $row['email']?></td>
                  <?php
                   if($row['droit'] == 1){
                         $color = "text-danger";
                         $row['droit'] = "Admin";
                        } else if ($row['droit'] == 2){
                              $color = "text-warning";
                              $row['droit'] = "Modo";
                        } else {
                              $row['droit'] = "Normal User";
                              $color = "text-secondary";
                        } ?>
            <td class='col-3 <?= $color ?>''>
                  <?= $row['droit'] ?>
            </td>
            <?php if($_SESSION['type'] == 1) { ?>
                    <td class='col-1'><button class="btn btn-light border-warning text-center text-warning"><i class="fas fa-edit"></i></button></td>
                    <td class='col-1'><button class="ml-2 btn btn-light border-danger text-center text-danger"><i class="fas fa-times"></i></button></td>
                    <?php } ?>
        </tr>
        <?php }?>
    </table>
</section>
<?php 
//Fin de la mise en mémoire de la page
$content = ob_get_clean();
require('base.php');
