<?php

require ('../functions/database.php');
require ('../functions/CRUD.php');

$bdd = ConnectDB();

if($_GET['update'] == 'rembourse') {
    updateRembourse($bdd, $_GET['id']);
} else {
    updateValide($bdd, $_GET['id']);
}

header('Location: showMissions.php');


