<?php

/* Ce fichier contient la fonction permettant de calculer le cout d'une mission */

/**
 * @param $bdd
 * @param $idMission
 * @return string
 */
function montantTotal($bdd, $idMission) {
    try{
        $req = $bdd->prepare("SELECT (((DATEDIFF(Miss_DateFin, Miss_DateDebut) + 1) * Param_Hebergement) + (ROUND(Dist_Km * 2 * Param_IndemKm, 2))) as PrixTotal
        FROM Mission, Parametrage, Distance WHERE Dist_NoVille2 = Miss_NoVille AND Miss_Id = :idMission");
        $req->bindValue(':idMission', $idMission, PDO::PARAM_INT);
        $req->execute();
        $montant = $req->fetch();
        if($montant[0] == '') {
            $montant = '<a href="settings.php">Distance non définie</a>';
            return $montant;
        }
        else {
            $montant = $montant[0] . '€';
            return $montant;
        }
    }
    catch(Exception $e){
        die(print("Erreur : " . $e->getMessage()));
    }
}