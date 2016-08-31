    <div class="footer-menu">
        <div class="left-menu">
                <div class="footer-menu-titles">Навигация</div>
            <div>
                <ul class="footer-list-menu">
                    <li><a href="<?=APP_ROOT?>">Начало</a></li>
                    <li><a href="<?=APP_ROOT?>/advertisements">Всички обяви</a></li>
                    <li><a href="<?=APP_ROOT?>/contacts">Контакт с нас</a></li>
                    <li><a href="<?=APP_ROOT?>/advertisements/create">Добави обява</a></li>
                </ul>
            </div>
        </div>
        <div class="center-menu">
            <div class="footer-menu-titles">Контакт център</div>
            <div>
                <ul class="footer-list-menu">
                    <li>София, кв. Изгрев, ул. "Тинтява" 15-17, етаж 1</li>
                    <li>10:00 - 20:00 (Понеделник - Петък)</li>
                    <li>Телефон: +359 899 55 55 92</li>
                </ul>
            </div>
        </div>
        <div class="right-menu">
            <div class="footer-menu-titles">Developer information</div>
            <div>
                <ul class="right-menu">
                    <li><a href="https://www.facebook.com/nasko.daskalov"><img src='<?=APP_ROOT?>/content/images/facebook-logo.png' width='40' height='40' onmouseover="this.src='<?=APP_ROOT?>/content/images/facebook-logo-hover.png';" onmouseout="this.src='<?=APP_ROOT?>/content/images/facebook-logo.png';" /></a>
                        <a href="https://github.com/naskodaskalov"><img src='<?=APP_ROOT?>/content/images/github-logo.png' width='40' height='40' onmouseover="this.src='<?=APP_ROOT?>/content/images/github-logo-hover.png';" onmouseout="this.src='<?=APP_ROOT?>/content/images/github-logo.png';" /></a></li>
                    <li>Designed by NDaskalov</li>
                </ul>

            </div>
        </div>
    </div>

    <footer>
        Всички права запазени. ObiaviMe © 2016
    </footer>

    <?php require_once('fill-posted-fields.php'); ?>

    <?php require_once('show-validation-errors.php'); ?>

</body>

</html>
