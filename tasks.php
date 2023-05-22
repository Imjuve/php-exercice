<?php
include "db.php";

$sql = "SELECT * FROM tasks";

try{
    $stmt = $conn->query($sql);
    $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
   echo "Erreur lors de la récupération des données : " . $e->getMessage();
}

function getTask($id, $conn) {
    $sql = "SELECT * FROM tasks WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    $task = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $task;
}
