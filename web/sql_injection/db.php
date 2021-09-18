<?php
    try{
        $pdo = new PDO('mysql:host=db;dbname=library;charset=utf8', 'owasp', 'password');
    }
    catch(Exception $erreur){
        echo 'ERREUR lors de la co. à la BDD : '. $erreur->getMessage();
    }
?>