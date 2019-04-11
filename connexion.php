<?php 

if(!isset($POST['Sal_Id']) || !isset($POST['Sal_Pwd']))
$erreur = "";
try {
    $bdd = new PDO('mysql:host=localhost;dbname=epoka', 'root', '');
    $bdd->exec("SET NAMES 'UTF8'");

    $req = $bdd->prepare("SELECT Sal_Id FROM salarie WHERE Sal_Id = ? AND Sal_Pwd = ?");
    if($req->execute(array($_GET['Sal_Id'], $_GET['Sal_Pwd']))) {
    if($req->rowCount()==1) {
        $ligne = $req->fetch();
        echo $ligne[0];
    }
    else {
        throw new Exception("Identifiant ou mot de passe incorrect");
    }
    }


} catch (PDOException $e) {
    $erreur = 'Erreur :' . $e->getMessage();
}

?> 