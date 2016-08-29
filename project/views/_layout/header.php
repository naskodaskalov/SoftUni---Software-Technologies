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
<header><a href="<?=APP_ROOT?>"><img class="header-logo" src="<?=APP_ROOT?>/content/images/header-logo.jpg"></a></header>

<nav>
    <ul class="navigation">
        <?php if ($this->isLoggedIn) : ?>
            <div class="greeting">Здравейте, <b><?=htmlspecialchars($_SESSION['username'])?>!</b></div>
        <?php endif; ?>
        <li><a href="<?=APP_ROOT?>/">Начало</a></li>
        <?php if ($this->isLoggedIn && $_SESSION['username'] == "admin") { ?>
            <li><a href="<?=APP_ROOT?>/advertisements">Всички обяви</a></li>
            <li><a href="<?=APP_ROOT?>/advertisements/create">Добавете нова обява</a></li>
            <li><a href="<?=APP_ROOT?>/users">Потребители</a></li>
            <li><a href="<?=APP_ROOT?>/users/logout">Излез</a></li>
        <?php } elseif (!$this->isLoggedIn) { ?>
            <li><a href="<?=APP_ROOT?>/users/login">Влез</a> / <a href="<?=APP_ROOT?>/users/register">Регистрация</a></li>
        <?php } else { ?>
            <li><a href="<?=APP_ROOT?>/advertisements">Всички обяви</a></li>
            <li><a href="<?=APP_ROOT?>/advertisements/create">Добавете нова обява</a></li>
            <li><a href="<?=APP_ROOT?>/users/logout">Излез</a></li>
        <?php } ?>

        <li><a href="<?=APP_ROOT?>/contacts">Контакт с нас</a></li>
    </ul>
</nav>

<?php require_once('show-notify-messages.php'); ?>
