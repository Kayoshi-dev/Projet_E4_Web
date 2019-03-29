<?php

require ('../functions/database.php');
require ('../functions/CRUD.php');

$bdd = ConnectDB();

updateMissions($bdd, $_GET['id']);
header('Location: showMissions.php');

