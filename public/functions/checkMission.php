<?php

function checkMission($data) {
    $missAttente = null;
    if($data['Miss_Valide'] == false && $_SESSION['Responsable'] == true) {
        return $missAttente = '<a href="../pages/validMission.php?id=' . $data['Miss_Id'] . '" class="btn btn-outline-success">Valider</a>';
    } else {
        return $missAttente = 'Validée';
    }
}

