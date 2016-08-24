<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
    <link rel="icon" href="<?=APP_ROOT?>/content/images/favicon.ico" />
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<header>
    <?php if (!$this->isLoggedIn) : ?>
    <div class="login-form">
        <form method="post">
            <div><label for="username">Потребителско име:</label></div>
            <input id="username" type="text" name="username" placeholder="enter your username here" />
            <div><label for="password">Парола:</label></div>
            <input id="password" type="password" name="password" placeholder="enter your password here" />
            <div><input type="submit" value="Login" />
                <a href="<?=APP_ROOT?>/users/register">[Register first]</a></div>
        </form  >
    </div>
    <?php endif; ?>

        <a href="<?=APP_ROOT?>"><img class="header-logo" src="<?=APP_ROOT?>/content/images/logo1.png"></a>
</header>

<nav>
    <ul class="navigation">
        <li><a href="<?=APP_ROOT?>/">Начало</a></li>
        <?php if ($this->isLoggedIn) : ?>
            <li><a href="<?=APP_ROOT?>/posts">Posts</a></li>
            <li><a href="<?=APP_ROOT?>/posts/create">Create Post</a></li>
            <li><a href="<?=APP_ROOT?>/users">Users</a></li>
        <?php else: ?>
            <li><a href="<?=APP_ROOT?>/users/login">Влез</a> / <a href="<?=APP_ROOT?>/users/register">Регистрация</a></li>
        <?php endif; ?>
        <?php if ($this->isLoggedIn) : ?>
                <li><a href="<?=APP_ROOT?>/users/logout">Излез</a></li>
        <?php endif; ?>

        <li><a href="<?=APP_ROOT?>/contacts">Контакт с нас</a></li>
    </ul>
</nav>

<?php require_once('show-notify-messages.php'); ?>
