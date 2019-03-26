<?php

require '../template/header.php';
require '../functions/menu_nav.php';

$script_name = basename(__FILE__, '.php');
menu_nav($script_name);

?>

<form>
    <div class="row">
        <div class="offset-lg-1 col-lg-5">
            <label for="villedeb">Départ :</label>
            <input type="text" class="form-control" id="villedeb" placeholder="Ville de départ">
        </div>
        <div class="col-lg-5">
            <label for="villefin">Arrivée :</label>
            <input type="text" class="form-control" id="villefin" placeholder="Ville d'arrivée">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php

require '../template/footer.php';

?>