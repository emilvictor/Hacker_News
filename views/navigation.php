<nav class="navbar">
    <a class="navbar-brand" href="/../index.php"><?php echo $config['title']; ?></a>
    <!-- <img class="logo" src="/../assets/HN.svg" alt="Hacker News" /> -->

    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/newer.php' ? 'active' : ''; ?>" href="/newer.php">Recent Posts</a>
        </li><!-- /nav-item -->

        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/older.php' ? 'active' : ''; ?>" href="/older.php">Older Posts</a>
        </li><!-- /nav-item -->

        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/index.php' ? 'active' : ''; ?>" href="/index.php">Home</a>
        </li><!-- /nav-item -->

        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/signup.php' ? 'active' : ''; ?>" href="/signup.php">Sign Up</a>
        </li><!-- /nav-item -->

        <li class="nav-item">
            <?php if (isset($_SESSION['user'])) : ?>
                <a class="nav-link" href="/app/users/logout.php">Logout</a>
            <?php else : ?>
                <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/login.php' ? 'active' : ''; ?>" href="login.php">Login</a>
            <?php endif; ?>
        </li><!-- /nav-item -->
    </ul><!-- /navbar-nav -->
</nav><!-- /navbar -->