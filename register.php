<?php session_start();

require_once 'db.php';

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_ARGON2ID);
    $prenom = $_POST['prenom'];
    $nomUtilisateur = $_POST['utilisateur'];

    // Requête SQL pour insérer un nouvel utilisateur
    $sqlQueryAddUser = "INSERT INTO utilisateur (nom, email, password, prenom, nom_utilisateur) VALUES (:nom, :email, :password, :prenom, :nomUtilisateur)";

    // Préparez la requête et liez les paramètres
    $insertUser = $conn->prepare($sqlQueryAddUser);
    $insertUser->bindParam(':nom', $nom);
    $insertUser->bindParam(':email', $email);
    $insertUser->bindParam(':password', $password);
    $insertUser->bindParam(':prenom', $prenom);
    $insertUser->bindParam(':nomUtilisateur', $nomUtilisateur);

    // Exécutez la requête
    $insertUser->execute();
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
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <?php include 'templates/header.php' ?>
    <section class="register">
        <h2>Inscrivez vous!</h2>
        <form action="" method="POST">
            <label for="utilisateur">Un nom d'utilisateur : </label>
            <input type="text" name="utilisateur" id="utilisateur">

            <label for="prenom"> Votre prénom : </label>
            <input type="text" name="prenom" id="prenom">

            <label for="nom"> Votre nom : </label>
            <input type="text" name="nom" id="nom">

            <label for="email">Votre email : </label>
            <input type="text" name="email" id="email">

            <label for="password">Choisissez un mot de passe</label>
            <input type="password" name="password" id="password">

            <input type="submit" name='submit' value="Envoyer" class="submit">
        </form>

    </section>

    <?php
    // var_dump($password);
    ?>
</body>

</html>