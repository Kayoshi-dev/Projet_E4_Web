<?php

session_start();

require '../functions/database.php';
$bdd = ConnectDB();

if(!empty($_POST['login']) && !empty($_POST['password'])) {
    $query = $bdd->prepare('SELECT Sal_Id, Sal_NoAgence, Sal_Nom, Sal_Prenom, Sal_Pwd, Sal_Resp, Sal_Compt
                                     FROM salarie 
                                     WHERE Sal_Id = :id');
    $query->bindValue(':id', $_POST['login'], PDO::PARAM_STR);
    $query->execute();
    $data = $query->fetch();
    if ($data['Sal_Pwd'] == $_POST['password']) {
        $_SESSION['User_ID'] = $data['Sal_Id'];
        $_SESSION['NumAgence'] = $data['Sal_NoAgence'];
        $_SESSION['Nom'] = $data['Sal_Nom'];
        $_SESSION['Prenom'] = $data['Sal_Prenom'];
        $_SESSION['Responsable'] = $data['Sal_Resp'];
        $_SESSION['Comptable'] = $data['Sal_Compt'];
        header('Location: home.php');
    }
} else {
    header('Location: ../../index.php');
}