<?php
include_once 'db.php';

if(isset($_POST['modifier'])){
    $id_to_update = $_POST['id_to_modify'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];

    try{
        $sql = "UPDATE tasks SET titre = :titre, description = :description WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['titre' => $titre, 'description' => $description, 'id' => $id_to_update]);

        echo "La tâche a été mise à jour avec succès!";
        header("Location: toDo.php");
    } catch(PDOException $e){
       echo "Erreur lors de la mise à jour des données : " . $e->getMessage();
       header("Location:toDo.php");
    }
}
