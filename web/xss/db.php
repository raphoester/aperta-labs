<?php
    try{
        $pdo = new PDO('mysql:host=db;dbname=livechat;charset=utf8', 'owasp', 'password');
    }
    catch(Exception $error){
        echo 'Error while connecting to the database:  : '. $error->getMessage();
    }
?>
