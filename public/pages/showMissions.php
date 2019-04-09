<?php

require ('../template/header.php');
require ('../functions/database.php');
require ('../functions/menu_nav.php');
require ('../functions/CRUD.php');
require ('../functions/checkMission.php');
require ('../functions/checkMissionColor.php');
require ('../functions/calculPrice.php');

$script_name = basename(__FILE__, '.php');
menu_nav($script_name);

$bdd = ConnectDB();

?>

<div class="container-fluid">
    <div class="row">
        <div class="table-responsive table-hover">
            <table class="table text-center">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Salarié</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Date début</th>
                    <th scope="col">Date fin</th>
                    <th scope="col">Validation</th>
                    <th scope="col">Payé</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Création de la mission</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $req = selectData_Mission($bdd); // Requête selectionnant toute les infos de la table mission.
                while($data = $req->fetch()) {
                    //On vérifie si la mission est validée ou non.
                    $missValide = checkAttente($data); //On vérifie si la mission est validée ou non.
                    $missRembourse = checkRembourse($data); //On vérifie si la mission est remboursée ou non.
                    $montant = montantTotal($bdd, $data['Miss_Id']);
                    echo $infos ='
                <tr style="background-color:' . $background = checkColor($missValide) .'">
                    <th scope="row">' . $data['Miss_Id'] . '</th>
                    <td>' . $data['Sal_Nom'] . ' ' . $data['Sal_Prenom'] . '</td>
                    <td>' . $data['Ville_Nom'] . '</td>
                    <td>' . $data['Miss_DateDebut'] . '</td>
                    <td>' . $data['Miss_DateFin'] . '</td>
                    <td>' . $missValide . '</td>
                    <td>' . $missRembourse . '</td>
                    <td>' . $montant[0] . ' €' . ' </td>
                    <td>' . $data['Miss_DateCreate'] . '</td>
                </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
