<?php
$servername='localhost';
$dbname='jeanbaptisted760_dbportfolio';
$username='jeanbaptisted760';
$password='iXHa14tt9zDfvw==';
try {
    $db = new PDO ("mysql:host=$servername; dbname=$dbname",$username,$password);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*     echo 'success'; */
} catch (PDOException $e) {
    echo 'connexion failed'.$e->getMessage();
}