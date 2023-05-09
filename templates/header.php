<header>
    <nav>
        <div class="gauche">
            <a href="index.php">Mon Site</a>
        </div>
        <div class="droite">
            <ul>
                <li><a href="#">ToDo</a></li>
                <li><a href="#">Music</a></li>
                <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php else : ?>
                    <li><a href="login.php"> Login</a></li>
                <?php endif ?>

            </ul>
        </div>
    </nav>
</header>