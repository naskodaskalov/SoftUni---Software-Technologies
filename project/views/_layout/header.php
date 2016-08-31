<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
    <link rel="icon" href="<?=APP_ROOT?>/content/images/favicon.ico" />
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>

<!--    <script>-->
<!--        $(document).ready(function(){-->
<!--            $("#allads").on("click", function(){-->
<!--                var $hidemenu = $(".hidden");-->
<!--                if ($hidemenu.hasClass("hidden")) {-->
<!--                    $hidemenu.removeClass("hidden");-->
<!--                    $hidemenu.addClass("show");-->
<!--                }  else {-->
<!--                    $hidemenu.removeClass("hidden");-->
<!--                }-->
<!--            });-->
<!--        });-->
<!--    </script>-->
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<header><a href="<?=APP_ROOT?>"><img class="header-logo" src="<?=APP_ROOT?>/content/images/header-logo.jpg"></a></header>

<nav>
    <ul class="navigation">
        <?php if ($this->isLoggedIn) : ?>
            <div class="greeting">Здравейте, <b><a href="<?=APP_ROOT?>/users/profile/<?=$_SESSION['user_id']?>"><?=htmlspecialchars($_SESSION['username'])?></a>!</b></div>
        <?php endif; ?>
        <li><a href="<?=APP_ROOT?>/">Начало</a></li>
        <li><a href="<?=APP_ROOT?>/advertisements">Всички обяви</a></li>
        <?php if ($this->isLoggedIn && $_SESSION['username'] == "admin") { ?>

<!--            <li id="allads">Категории обяви</li>-->
<!--               --><?php //$this->categories = $this->model->categories();
//                    foreach ($this->categories as $category) { ?>
<!--                        <li class="hidden"><a href="">--><?//=$category['type_category']?><!--</a></li>-->
<!--                --><?php //} ?>
            <li><a href="<?=APP_ROOT?>/advertisements/create">Добавете нова обява</a></li>
            <li><a href="<?=APP_ROOT?>/users/myads">Моите обяви</a></li>
            <li><a href="<?=APP_ROOT?>/users">Потребители</a></li>
            <li><a href="<?=APP_ROOT?>/users/logout">Излез</a></li>
        <?php } elseif (!$this->isLoggedIn) { ?>
            <li><a href="<?=APP_ROOT?>/users/login">Влез</a> / <a href="<?=APP_ROOT?>/users/register">Регистрация</a></li>
        <?php } else { ?>
<!--            <li><a href="--><?//=APP_ROOT?><!--/advertisements">Всички обяви</a></li>-->
<!--            <li id="allads">Категории обяви</li>-->
<!--            <ul id="hidden-menu" class="hidden">-->
<!--                --><?php
//                $this->categories = $this->model->categories();
//                foreach ($this->categories as $category) { ?>
<!--                    <li><a href="">--><?//=$category['type_category']?><!--</a></li>-->
<!--                --><?php //} ?>
<!--            </ul>-->
            <li><a href="<?=APP_ROOT?>/advertisements/create">Добавете нова обява</a></li>
            <li><a href="<?=APP_ROOT?>/users/myads">Моите обяви</a></li>
            <li><a href="<?=APP_ROOT?>/users/logout">Излез</a></li>
        <?php } ?>

        <li><a href="<?=APP_ROOT?>/contacts">Контакт с нас</a></li>
    </ul>
</nav>
<?php require_once('show-notify-messages.php'); ?>