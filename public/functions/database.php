<?php
    function ConnectDB() {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=epoka', 'root', '');
            $bdd->exec("SET NAMES 'UTF8'");
            return $bdd;
        } catch (PDOException $e) {
            $erreur = 'Erreur :' . $e->getMessage();
            return $erreur;
        }
    }

