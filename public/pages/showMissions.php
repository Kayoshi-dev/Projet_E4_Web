<?php

require ('../template/header.php');
require ('../functions/database.php');
require ('../functions/menu_nav.php');
require ('../functions/CRUD.php');
require('../functions/checkMission.php');

$script_name = basename(__FILE__, '.php');
menu_nav($script_name);

$bdd = ConnectDB();

?>

<div class="container-fluid">
    <div class="row">
        <div class="table-responsive">
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
                    <th scope="col">Création de la mission</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $req = selectData_Mission($bdd); // Requête selectionnant toute les infos de la table mission.
                while($data = $req->fetch()) {
                    //On vérifie si la mission est validée ou non.
                    $missAttente = checkMission($data); //On vérifie si la mission est validée ou non.
                    echo $infos ='
                <tr>
                    <th scope="row">' . $data['Miss_Id'] . '</th>
                    <td>' . $data['Miss_NoSalarie'] . '</td>
                    <td>' . $data['Miss_NoVille'] . '</td>
                    <td>' . $data['Miss_DateDebut'] . '</td>
                    <td>' . $data['Miss_DateFin'] . '</td>
                    <td>' . $missAttente . '</td>
                    <td>' . $data['Miss_Paye'] . '</td>
                    <td>' . $data['Miss_DateCreate'] . '</td>
                </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
