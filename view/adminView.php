
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "COGIP - Panel Admin"; ?>

<?php ob_start(); ?>
<h1> COGIP : Administration Panel </h1>

<?php
    echo "<table class='table'>
                <tr>
                    <th scope='col'>Invoice ID</th>
                    <th scope='col'>User ID</th>
                </t>";
    while($row = $lastInvoices->fetch()){
        echo "<tr>";
        echo "<td>" . $row['invoice_number'] . "</td>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "<td><button>EDIT</button><button>DELETE</button></td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<table class='table'>
                <tr>
                    <th scope='col'>Company Name</th>
                    <th scope='col'>Country</th>
                </th>";
    while($row = $lastCompanies->fetch()){
        echo "<tr>";
        echo "<td>" . $row['company_name'] . "</td>";
        echo "<td>" . $row['country'] . "</td>";
        echo "<td><button>EDIT</button><button>DELETE</button></td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<table class='table'>
                <tr>
                    <th scope='col'>Last Name</th>
                    <th scope='col'>First Name</th>
                    <th scope='col'>Email</th>
                </th>";
    while($row = $lastContacts->fetch()){
        echo "<tr>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td><button>EDIT</button><button>DELETE</button></td>";
        echo "</tr>";
    }
    echo "</table>";

    $content = ob_get_clean();
    
    require('base.php');
?>
