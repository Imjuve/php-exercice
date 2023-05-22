<?php 
session_start();
include_once 'db.php';
include_once 'tasks.php';

if (!isset($_SESSION['LOGGED_USER'])) {
    header('Location:login.php');
    exit();
}

if (!isset($_POST['modifier'])) {
    header('Location:index.php');
    exit();
}

$task_id = $_POST['id_to_modify'];
$task = getTask($task_id, $conn);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la tâche</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/tasks.css">
</head>

<body>
    <?php include "templates/header.php" ?>
    <h1 style="text-align: center; margin:5vh 0 5vh 0;">Modification de la tâche</h1>

    <form style="display: flex; flex-direction: column; width: 50vw; align-items: center; margin:0 auto 5vh auto;" action="update.php" method="POST">
        <input type="hidden" name="id_to_modify" value="<?= $task['id'] ?>">
        <label for="titre">Votre titre</label>
        <input style="width: 40%; height: 3vh; border-radius: 10px;" type="text" name="titre" id="titre" value="<?= $task['titre'] ?>">
        <label for="description">Votre texte</label>
        <textarea style="height: 15vh; width: 50%; border-radius: 10px;" name="description" id="description" cols="30" rows="10"><?= $task['description'] ?></textarea>
        <input style="border-radius: 10px; width: 5vw; margin: 5px auto 5px auto;" type="submit" value="Modifier" name="modifier">
    </form>

</body>
</html>
