<?php session_start();
    require_once 'db.php';
    require_once "query.php";
  
if (isset($_POST['username']) && isset($_POST['password'])) {
    foreach ($users as $user) {
        if ($user['nom_utilisateur'] === $_POST['username'] && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['LOGGED_USER'] = $user['nom_utilisateur'];
            header("Location: index.php");
            exit;
        }
    }

    $errorMessage = "Les informations d'identification fournies ne sont pas valides.";
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
    <?php include "templates/header.php" ?>
    <main>
        <section class="login">
            <h2>Connectez vous</h2>
             <?php if(isset($errorMessage)): ?>
                <p><?php echo $errorMessage; ?></p>
            <?php endif; ?>
            <form action="" method="POST">
                <label for="username">Votre nom d'utilisateur : </label>
                <input id="username" type="text" name="username">
                <label for="password">Votre mot de passe : </label>
                <input type="password" name="password" id="password">
                <input type="submit" value="Envoyer" class="submit">
            </form>
            <a href="register.php">Enregistrez vous ici</a>
        </section>
    </main>
</body>



</html>
