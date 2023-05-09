<?php
include_once "query.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <?php include "templates/header.php" ?>
    <?php foreach ($users as $user) : ?>
        <article>
            <div>
                <h2><?= $user['nom_utilisateur'] ?></h2>
                <p><?= $user['nom'] ?></p>
                <p><?= $user['email'] ?></p>
            </div>
        </article>
    <?php endforeach; ?>

</body>

</html>