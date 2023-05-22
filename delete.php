<?php
    require_once 'db.php';
    
    if (isset($_POST['delete'])) {
        $id_to_delete = $_POST['id_to_delete'];

        $sql = "DELETE FROM tasks WHERE id = ?";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$id_to_delete]);

        echo "L'article a été supprimé avec succès";
        // Vous pouvez rediriger l'utilisateur vers la page principale après la suppression
        header("Location: toDo.php");
    }
