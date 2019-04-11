<?php 
try {
    $bdd = new PDO('mysql:host=localhost;dbname=epoka', 'root', '');
    $bdd->exec("SET NAMES 'UTF8'");

    $req = $bdd->prepare("SELECT * FROM ville");
    if($req->execute()) {
        foreach($req as $ligne) {
            $output[] = $ligne; 
        }
        echo json_encode($output);
    }

} catch (PDOException $e) {
        $erreur = 'Erreur :' . $e->getMessage();
    }
?> 