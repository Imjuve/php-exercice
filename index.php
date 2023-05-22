<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <style>
        
    </style>
</head>

<body>
        <?php include "templates/header.php" ?>
    <main>
        <?php if (!isset($_SESSION['LOGGED_USER'])) : ?>
            <div class="form-login-area">
                <h1>Salut! Connecte toi <a href="login.php"> ici</a></h1>
            
            <?php else : ?>
                <div class="alert alert-success" role="alert">
                    Bonjour <?= $_SESSION['LOGGED_USER']; ?> et bienvenue sur le site !
                </div>
            <?php endif; ?>
    
                <div>
                    Cliquez  <a href="listeUser.php">ici</a> pour voir les utilisateurs
                </div>
        </main>


        
</body>

</html>