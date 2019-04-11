<?php

require ('../functions/database.php');
require ('../functions/CRUD.php');

$bdd = ConnectDB();

try {
    addParam($bdd, $_POST['villeDeb'], $_POST['villeFin'], $_POST['km']);
    header('Location: settings.php');
}
catch(PDOException $e) {
    echo $e->getMessage();
}

