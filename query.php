<?php
include "db.php";

$sql = "SELECT * FROM utilisateur;";

try{
    $stmt = $conn->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo "Erreur lors de la récupération des données : " . $e->getMessage();
}