<?php
    ob_start();

    if (isset($_POST['invoice_number']) AND isset($_POST['invoice_content'])) {
        $number = $_POST['invoice_number'];
        $invContent = $_POST['invoice_content'];
        $idComp = $_POST['company_id'];
        $idUser = $_POST['user_id'];
    };
?>
<section class="jumbotron d-flex flex-row justify-content-end">
    <h1 class="pr-5 text-info"><i class="fas fa-file-invoice-dollar"></i> Create new invoice</h1>
</section>
<section class="column">
    <article class="col">
        <form method="post" action="" class="container col-10">
            <h3><span class="badge badge-primary">New invoice</span></h3>
            <label class="p-1 mt-2 text-primary" for="invoice_number">Invoice Number</label>
            <input id="invoice_number" name="invoice_number" class="form-control" type="number" value="">
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
            <label class="p-1 mt-2 text-primary" for="user_id">Contact ID</label>
            <select id="user_id" name="user_id" class="form-control">
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
            <label class="p-1 mt-2 text-primary" for="invoice_content">Content</label>
            <textarea id="test" name="invoice_content" class="form-control" value=""></textarea>
            <button class="btn btn-warning mt-2 text-white" type="submit" name="button">Envoyer</button>
        </form>
    </article>
</section>
<?php
    $content = ob_get_clean();
    require('base.php');
?>