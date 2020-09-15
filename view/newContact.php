<?php
    ob_start();
?>
<section class="jumbotron d-flex flex-row justify-content-end">
    <h1 class="pr-5 text-info"><i class="fas fa-address-book"></i> Create new contact</h1>
</section>
<section class="column">
    <article class="col">
        <form method="post" action="" class="container col-10">
            <h3><span class="badge badge-primary">New contact</span></h3>
            <label class="p-1 mt-2 text-primary" for="first_name">First name</label>
            <input id="first_name" name="first_name" class="form-control" type="text">
            <label class="p-1 mt-2 text-primary" for="last_name">Last name</label>
            <input id="last_name" name="last_name" class="form-control" type="text">
            <label class="p-1 mt-2 text-primary" for="email">E-mail</label>
            <input id="email" name="email" class="form-control" type="email" placeholder="name@example.com">
            <label class="p-1 mt-2 text-primary" for="phone">Phone Number</label>
            <input id="phone" name="phone" class="form-control" type="text" placeholder="0400/000000">
            <label class="p-1 mt-2 text-primary" for="company_id">Company</label>
            <select id="company_id" name="company_id" class="form-control">
            <?php
                echo "<option value='' selected></option>";
                foreach ($listCompanies as $row) {
                echo "<option value=".$row['id'].">".$row['company_name']."</option>";
            }; ?>
            </select>
            <button class="btn btn-warning mt-2 text-white" type="submit" name="button">Envoyer</button>
        </form>
    </article>
</section>
<?php
    $content = ob_get_clean();
    require('base.php');
?>