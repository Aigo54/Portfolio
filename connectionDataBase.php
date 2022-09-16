<?php
$dbh = 'mysql:host=samuelfaigo.mysql.db;dbname=samuelfaigo';
$user = 'samuelfaigo';
$pass = 'Macha0605';

    try {
        $pdo = new PDO($dbh, $user, $pass);
    } catch (PDOException $erreur) {
        echo  "Erreur : accès refusé à la db";
        die();
    }
?>
