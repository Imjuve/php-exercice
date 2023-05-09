<?php
header("refresh:0.5;url=index.php"); // Redirige vers la page index.php après 4 secondes
session_start(); // ouvre la session de l'utilisateur si elle existe
if (isset($_SESSION['LOGGED_USER'])) {
 session_destroy(); // Ferme la session
}

