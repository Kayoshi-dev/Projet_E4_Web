<?php

require ('../template/header.php');
require ('../functions/database.php');
require ('../functions/menu_nav.php');
require ('../functions/CRUD.php');
require ('../functions/checkMissValide.php');

$script_name = basename(__FILE__, '.php');
menu_nav($script_name);

$bdd = ConnectDB();

?>

<div class="container-fluid">
    <div class="row">
        <table class="table">
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
            $req = selectData_Mission($bdd);
            while($data = $req->fetch()) {
                $missAttente = checkMission($data);
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
