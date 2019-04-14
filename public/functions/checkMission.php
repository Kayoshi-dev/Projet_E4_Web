<?php

/* Ce fichier contient des fonctions permettant la vérification des missions */

/**
 * @param $data
 * @return string
 */
function checkAttente($data) {
    $missAttente = null;
    if($data['Miss_Valide'] == false && $_SESSION['Responsable'] == true) {
        return $missAttente = '<a href="../pages/validMission.php?id=' . $data['Miss_Id'] . '" class="btn btn-outline-dark">Valider</a>';
    } elseif($data['Miss_Valide'] == false && $_SESSION['Responsable'] == false) {
        return $missAttente = 'En attente ⌛';
    } else {
        return $missAttente = 'Validée ✅';
    }
}

/**
 * @param $data
 * @return string
 */
function checkRembourse($data) {
    $missAttente = null;
    if($data['Miss_Paye'] == false && $_SESSION['Comptable'] == true) {
        return $missAttente = '<a href="../pages/validMission.php?id=' . $data['Miss_Id'] . '&update=rembourse' . '" class="btn btn-outline-dark">Valider</a>';
    } elseif($data['Miss_Paye'] == false && $_SESSION['Comptable'] == false) {
        return $missAttente = 'En attente ⌛';
    } else {
        return $missAttente = 'Payée ✅';
    }
}


