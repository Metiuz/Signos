<?php include('layouts/header.php'); ?>
<div class="container d-flex flex-column justify-content-center" id="container-home"  style="height: 75vh;">
    <div class="align-self-center" id="div-home">
        <h1 class="h1">Descubra seu signo:</h1>
    </div>
    <div class="align-self-center" id="div-home">
        <form id="signo-form" action="./show_zodiac_sign.php" method="POST">
            Data de Nascimento: <input class="form-control" type="date" name="data_nascimento">
            <input class="w-100 mt-2 btn btn-primary" type="submit" value="Enviar" name="submit">
        </form>
    </div>
</div>
<script src="./assets/js/bootstrap_bundle_min.js"></script>


<?php include('layouts/footer.php'); ?>