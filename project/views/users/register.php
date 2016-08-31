<?php $this->title = perm_title . ' :: Форма за регистрация'; ?>

<h2 class="pages-titles"><?= htmlspecialchars($this->title) ?></h2>

<main>

    <form class="registration-form" method="post">
        <div class="divTable">
            <div class="divRow">
                <div class="divCell"><label for="full_name">Име и фамилия:</label></div>
                <div class="divCell"><input type="text" id="full_name" name="full_name" placeholder="име и фамилия" /></div>
            </div>
            <div class="divRow">
                <div class="divCell"><label for="username">Потребителско име:</label></div>
                <div class="divCell"><input type="text" id="username" name="username" placeholder="потребителско име"/></div>
            </div>
            <div class="divRow">
                <div class="divCell"><label for="password">Парола:</label></div>
                <div class="divCell"><input type="password" id="password" name="password" placeholder="парола"/></div>
            </div>
            <div class="divRow">
                <div class="divCell"><label for="password_confirm">Повторете своята парола:</label></div>
                <div class="divCell"><input type="password" id="password_confirm" name="password_confirm" placeholder="повторете вашата парола"/></div>
            </div>
            <div class="divRow">
                <div class="divCell"><label for="email">E-mail адрес:</label></div>
                <div class="divCell"><input type="text" id="email" name="email" placeholder="example:admin@abv.bg"/></div>
            </div>
            <div class="divRow">
                <div class="divCell"><label for="phone">Мобилен телефон:</label></div>
                <div class="divCell"><input type="tel" id="phone" name="phone" placeholder="example:0888111222"/></div>
            </div>
            <div class="divRow">
                <div class="divCell-buttons" align="center"><input type="submit" value="Регистрирай" />
                    <a href="<?=APP_ROOT?>/">[Отказ]</a><a href="<?=APP_ROOT?>/users/login">[Влез]</a></div>
            </div>
        </div>
    </form>


</main>