<?php

$host = 'localhost';
$dbname = 'test';
$userdb = 'root';
$pass = 'root';

// $userStatement->execute();
// $users = $userStatement->fetchAll();

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $userdb,
        $pass
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERREUR de connexion : ' . $e->getMessage();
}

// var_dump($conn);
