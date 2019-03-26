<?php
    function Options_Villes($bdd) {
        $req = $bdd->query("SELECT * FROM ville");
        while($res = $req->fetch()) {
            echo '<option value="' . $res['Ville_Id'] . '">' . $res['Ville_Nom'] . '</option>';
        }
    }

