<?php

//Simple script de connexion à la base de donnée, on retourne l'objet $db

/**
 * @return PDO|string
 */
function ConnectDB()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=epoka', 'root', '');
        $bdd->exec("SET NAMES 'UTF8'");
        return $bdd;
    } catch (PDOException $e) {
        $erreur = 'Erreur :' . $e->getMessage();
        return $erreur;
    }
}

