<?php
    ob_start();

    if (isset($_POST['first_name']) AND isset($_POST['last_name'])
    AND isset($_POST['email']) AND isset($_POST['phone'])) {
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $id = $_POST['company_id'];
    };
?>
<section class="jumbotron d-flex flex-row justify-content-end">
    <h1 class="pr-5 text-info"><i class="fas fa-address-book"></i> Create new contact</h1>
</section>
<section class="column">
    <article class="col">
        <form method="post" action="" class="container col-10">
            <h3><span class="badge badge-primary">New contact</span></h3>
            <label class="p-1 mt-2 text-primary" for="first_name">First name</label>
            <input id="first_name" name="first_name" class="form-control" type="text" value="">
            <label class="p-1 mt-2 text-primary" for="last_name">Last name</label>
            <input id="last_name" name="last_name" class="form-control" type="text" value="">
            <label class="p-1 mt-2 text-primary" for="email">E-mail></label>
            <input id="email" name="email" class="form-control" type="email" placeholder="name@example.com" value="">
            <label class="p-1 mt-2 text-primary" for="phone">Phone Number</label>
            <input id="phone" name="phone" class="form-control" type="text" placeholder="0400/000000" value="">
            <label class="p-1 mt-2 text-primary" for="company_id">Company ID</label>
            <select id="company_id" name="company_id" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option> <!-- Temporaire ! => ajout systeme dynamique -->
                <option value="6">6</option>              <!--  avec les ID de la db in progress -->
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <button class="btn btn-warning mt-2 text-white" type="submit" name="button">Envoyer</button>
        </form>
    </article>
</section>
<?php
    $content = ob_get_clean();
    require('base.php');
?>