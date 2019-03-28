<?php

require '../template/header.php';
require '../functions/menu_nav.php';
require '../functions/database.php';
require '../functions/CRUD.php';

$script_name = basename(__FILE__, '.php');
menu_nav($script_name);

$bdd = ConnectDB();

?>
    <div class="container-fluid">
        <form method="post" action="addParam.php">
            <div class="row">
                <div class="offset-lg-1 col-lg-5">
                    <label for="villedeb">Départ :</label>
                    <select class="custom-select" id="villedeb" name="villeDeb">
                        <?php Options_Villes($bdd) ?>
                    </select>
                </div>
                <div class="col-lg-5">
                    <label for="villefin">Arrivée :</label>
                    <select class="custom-select" id="villefin" name="villeFin">
                        <?php Options_Villes($bdd) ?>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="offset-lg-4 col-lg-4">
                    <label for="nbKm">Distance :</label>
                    <div class="input-group">
                        <input type="text" id="nbKm" class="form-control" name="km">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <br>

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Ville de départ</th>
            <th scope="col">Ville d'arrivée</th>
            <th scope="col">Distance</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $req = selectParam($bdd);
        while($data = $req->fetch()) {
            echo $row = '
            <tr>
                <td>' . $data['villeA'] . '</td>
                <td>' . $data['villeB'] . '</td>
                <td>' . $data['Dist_Km'] . '</td>
            </tr>';
        }
        ?>
        </tbody>
    </table>

<?php

require '../template/footer.php';

?>