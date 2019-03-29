<?php

/**
 * @param $bdd
 */
function selectOptions_Villes($bdd)
{
    try {
        $req = $bdd->query("SELECT * FROM ville ORDER BY Ville_Nom ASC");
        while ($res = $req->fetch()) {
            echo '<option value="' . $res['Ville_Id'] . '">' . $res['Ville_Nom'] . '</option>';
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

/**
 * @param $bdd
 * @param $villeDeb
 * @param $villeFin
 * @param $km
 * @return string
 */
function addParam($bdd, $villeDeb, $villeFin, $km)
{
    try {
        $req = $bdd->prepare("INSERT INTO distance VALUES (:villeDeb, :villeFin, :km)");
        $req->bindValue(':villeDeb', $villeDeb, PDO::PARAM_INT);
        $req->bindValue(':villeFin', $villeFin, PDO::PARAM_INT);
        $req->bindValue(':km', $km, PDO::PARAM_INT);
        $req->execute();
    } catch (PDOException $e) {
        $erreur = 'Erreur :' . $e->getMessage();
        return $erreur;
    }
}

/**
 * @param $bdd
 * @return string
 */
function selectParam($bdd)
{
    try {
        $req = $bdd->query('SELECT v1.Ville_Nom AS villeA, v2.Ville_Nom AS villeB, Dist_Km 
                            FROM distance 
                            INNER JOIN ville AS v1 ON Dist_NoVille1 = v1.Ville_Id 
                            INNER JOIN ville AS v2 ON Dist_NoVille2 = v2.Ville_Id 
                            ORDER BY Dist_Km');
        return $req;
    } catch (PDOException $e) {
        $erreur = 'Erreur :' . $e->getMessage();
        return $erreur;
    }
}

function selectData_Mission($bdd) {
    try {
        $req = $bdd->query('SELECT * FROM mission');
        return $req;
    }
    catch (PDOException $e) {
        $erreur = 'Erreur :' . $e->getMessage();
        return $erreur;
    }
}

function updateMissions($bdd, $id) {
    $req = $bdd->prepare('UPDATE mission SET Miss_Valide = 1 WHERE Miss_Id = :id');
    $req->bindValue(':id', $id, PDO::PARAM_INT);
}

