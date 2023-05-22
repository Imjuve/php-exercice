
<?php


include_once "db.php";

if(isset($_POST['ajouter'])){
    $titre = $_POST['titre'];
    $description = $_POST['description'];

    $sqlQueryAddTask = "INSERT INTO tasks (titre, description) VALUES (:titre,:description)";

    $insertTask = $conn->prepare($sqlQueryAddTask);
    $insertTask->bindParam(':titre', $titre);
    $insertTask->bindParam(':description', $description);
    $insertTask->execute();

    echo 'Tâche ajoutée avec succès';
    header('refresh:1;url=toDo.php');
}