<?php session_start();
include_once 'tasks.php' ?>

<?php
if (!isset($_SESSION['LOGGED_USER'])) {
    header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/tasks.css">


</head>

<body>
    <?php include "templates/header.php" ?>
    <h1 style="text-align: center; margin:5vh 0 5vh 0;">Administration des tâches</h1>
    <?php if (!isset($_POST['new'])) {
        echo '
    <form action="" method="post">
        <input type="submit" name="new" value="Ajouter">
    </form> ';
    } ?>
    <?php if (isset($_POST['new'])) : ?>
        <form style="display: flex; flex-direction: column; width: 50vw; align-items: center;margin:0 auto 5vh auto;" action="ajouter.php" method="POST">
            <label for="titre">Votre titre</label>
            <input style="width: 40%; height: 3vh; border-radius: 10px;" type="text" name="titre" id="titre">
            <label for="description">Votre texte</label>
            <textarea style="height: 15vh; width: 50%; border-radius: 10px;" name="description" id="description" cols="30" rows="10"></textarea>
            <input style="border-radius: 10px; width: 5vw;margin: 5px auto 5px auto;" type="submit" value="ajouter" name="ajouter">

        </form>
    <?php endif ?>
    <div class="container">
        <?php if (isset($tasks)) foreach ($tasks as $task) : ?>

            <article>
                <div>
                    <h2><?= $task['titre'] ?></h2>
                    <p><?= $task['description'] ?></p>
                    <div class="button-container">
                        <form action="delete.php" method="POST">
                            <input type="hidden" name="id_to_delete" value="<?= $task['id'] ?>">
                            <input type="submit" name="delete" value="Supprimer">
                        </form>
                        <form action="modifier.php" method="post">
                            <input type="hidden" name="id_to_modify" value="<?= $task['id'] ?>">
                            <input type="submit" value="Modifier" name="modifier">
                        </form>
                    </div>

                </div>
            </article>
        <?php endforeach ?>
    </div>




</body>

</html>