<?php
    ob_start();

    if (isset($_POST['first_name']) AND isset($_POST['last_name']) AND isset($_POST['email'])) {
        include_once('model/ContactManager.php');
        addContact();
    };
?>
<section class="row">
    <form method="post" action="" class="container col-10">
        <label for="first_name">First name</label>
        <input id="first_name" name="first_name" class="form-control" type="text" value="">
        <label for="last_name">Last name</label>
        <input id="last_name" name="last_name" class="form-control" type="text" value="">
        <label for="email">E-mail<?= "<em style='color:red;'>".$errors['email']."</em>"; ?></label>
        <input id="email" name="email" class="form-control" type="email" placeholder="name@example.com" value="">
        <label for="phone">Phone Number</label>
        <input id="phone" name="phone" class="form-control" type="text" placeholder="0400/000000" value="">
        <label for="company_id">Company ID</label>
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
        <button class="btn btn-secondary" type="submit" name="button">Envoyer</button>
    </form>
</section>
<?php
    $content = ob_get_clean();
    require('base.php');
?>