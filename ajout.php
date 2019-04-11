<?php
try
{
    $bdd= new PDO ('mysql:host=localhost;dbname=epoka;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    if(!isset($_GET['dateDeb']) || !isset($_GET['dateFin'])  || !isset($_GET['ville']) || !isset($_GET['idEm']))
    {
        throw new Exception('Paramètres manquants');
    }
    $req =$bdd->prepare('INSERT INTO mission (Miss_DateDebut, Miss_DateFin, Miss_Valide, Miss_Paye, Miss_NoSalarie, Miss_NoVille) VALUES (:dateDeb,:dateFin,0,0,:idEm,:idVi)');
    $req->bindParam(':dateDeb',$_GET['dateDeb'],PDO::PARAM_STR);
    $req->bindParam(':dateFin',$_GET['dateFin'],PDO::PARAM_STR);
    $req->bindParam(':idEm',$_GET['idEm'],PDO::PARAM_INT);
    $req->bindParam(':idVi',$_GET['ville'],PDO::PARAM_INT);
    if($req->execute())
    {
        echo 'La mission a été enregistré avec succès';
    }
}
catch(Exception $expt)
{
    echo 'Erreur : '.$expt->getMessage();
}
?> 