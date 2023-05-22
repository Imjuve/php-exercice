

<header>
    <nav>
        <div class="gauche">
            <?php if(isset($_SESSION['LOGGED_USER'])) : ?>
            <a href="index.php">
                <?php echo 'Salut'. " ". $_SESSION['LOGGED_USER']; ?>
            </a>
            <?php else : ?>
            <a href="index.php"> Mon Site</a>
            <?php endif ?>
        </div>
        <div class="droite">
            <ul>
                <li><a href="toDo.php">ToDo</a></li>
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