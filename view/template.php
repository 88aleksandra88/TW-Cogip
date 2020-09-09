<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title> <?php $title ?></title>
</head>
<body>
<!-- HEADER avec le Navbar à séparer ?-->
<header>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <img src="#" alt="LOGO COGIP" />
    <ul class="navbar-nav">
        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Invoices</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Companies</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contacts</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Con</a></li>
    </ul>
</nav>
</header>

<?= $content; ?>


<footer>
    <p> Site réalisé avec amour par les membres du COGIP ! </p>
</footer>
</body>
</html>