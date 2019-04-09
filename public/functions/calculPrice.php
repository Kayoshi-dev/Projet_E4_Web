<?php

function montantTotal($bdd, $idMis) {
    try{
        $stringreqMontant ='SELECT (((DATEDIFF(mis_dateFin, mis_DateDeb) + 1) * indemnite) + (ROUND(dist_km * remboursement, 2))) as PrixTotal 
                            FROM mission, paiement, distance 
                            WHERE dist_Villefin = mis_VilleId
                            AND mis_id = :idMis';

        $reqMontant = $bdd->prepare($stringreqMontant);
        $reqMontant->bindParam(':idMis', $idMis, PDO::PARAM_INT);
        $reqMontant->execute();

        return $reqMontant->fetch();
    }
    catch(Exception $e){
        die(print("Erreur : " . $e->getMessage()));
    }
}