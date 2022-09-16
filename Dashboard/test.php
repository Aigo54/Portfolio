<?php

$requeteGet = 'SELECT * FROM users WHERE id_user = :id_user' ;
$requeteGet = $pdo->prepare($requeteGet);
$requeteGet->execute(['id_user' => $_GET['id_profil']]);
$resGet=$requeteGet->fetch();

?>
